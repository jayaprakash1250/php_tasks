<?php
  include "conn.php";
  $qy="SELECT * FROM images";
  $res=mysqli_query($conn,$qy);
  if(mysqli_num_rows($res)>0)
  {
  	while($row=mysqli_fetch_assoc($res))
  	{
  		echo "id:".$row['id']."<br>";
  		header("Content-type:image/jpg");
  		#$s="uploads/".$row['image_name'];
      
      echo "<img src='uploads/".$row['file']."' height=\"200px\" width=\"320px\">";
    		echo"image_type".$row['image_type']."<br>";
  		echo "<br/><br/>";

  	}

  }
  else
  echo "0 results";
  ?>