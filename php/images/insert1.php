<?php
  include "conn.php";
  if(isset($_POST['submit']))
  {
  	$check = getimagesize($_FILES["image"]["tmp_name"]);
  	if($check!==false)
  	{
  	$file= rand(1000,10000)."-".$_FILES['image']['name'];
  	$file_type=$_FILES['image']['type'];
  	$file_size=$_FILES['image']['size'];
  	$file_loc = $_FILES['image']['tmp_name'];
  	$folder="uploads/";
    move_uploaded_file($file_loc,$folder.$file); 
  	
  	$qy="INSERT INTO images(image_name,image_size,image_type) VALUES('$file','$file_size','$file_type')";
  	$res=mysqli_query($conn,$qy);
    if($res)
    {
    	echo"sucessful insertion";
    }
    else
    {
    	echo "failed to insert";
    }
}
else
echo "plese upload an image";
}
else
   echo"not submited";
  ?>