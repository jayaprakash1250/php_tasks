  <?php
 $connect=mysqli_connect("localhost","root","","restaurents");
 if(isset($_POST['submit']))
 {
 	$file=$_FILES["file"]["name"];
 $qy="INSERT INTO images(file) values('$file')";
 $res=mysqli_query($connect,$qy);
 if($res)
 	echo"image is inserted";
}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Insert and display Images</title>
</head>
<body>
   <form method='post' enctype="multipart/form-data">
   	 <input type="file" name="file" id="file"><br><br>
   	 <input type="submit" name="submit" value="submit">
   </form>
   <br/>
   <br/>
 
   <table border="1">
    <tr>
        <th>Image</tr>
    </tr>
    <?php
       $qy="SELECT * from images";
       $result=mysqli_query($connect,$qy);
       while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
       {
       	echo "<tr> " ;  	       
       	 echo"<td>";?><img src="<?php $row['file'];?>" height="100"  width="100"><?php echo"</td>";
       	 echo"</td>"; 
       	echo"</tr>";
       	}
       	mysqli_close($connect);
       ?>
       	</table> 
    </body>
</html>
<script type="text/javascript">
	$(document).ready(function(){
		$('#submit').click(function(){
			var image_name=$('#file').val();
			if(image_name='')
				{
					alert("please slect image");
					return false;
				}
				else
			 {
			 	var extension=$('#file').val().split('.').pop().toLowerCase();
			 	if(JQuery().inArray(extension,['gif','png','jpg','jpeg'])==-1)
			 	{
			 		alert("Invalid Image");
			 		$('#file').val();
			 		return false;

			 	}

			 }
		})
	}
	
</script>