<!DOCTYPE html>
<html>
<head>
	<title>INSERTION</title>
	<style type="text/css">
	.main{
		background-color: ivory;
		border:1px solid;
		margin-top:150px;
		margin-left:500px;
		height: 300px;
		width:30%;

	}
	input:hover
	{
		width:40%;
		height:25px;
	}
	input[type=submit]:hover
	{
		width:20%;
		height:25px;
	}
	</style>
</head>
<body>
 <center class="main" >
 <p id="message"></p>
	<form  method="post" enctype="multipart/form-data">
		<br><br><br>
		<label>Name</label>
		<input type="text" name="name" id="name"><br><br>
		<label>Email</label>
		<input type="email" name="email"><br><br>
		<label>phone</label>
		<input type="tel" name="phone"><br><br>
		<label>password</label>
		<input type="password" name="password"><br><br>
		<input type="submit" name="submit" value="submit">
	</form>
	
  </center>
 

</body>
</html>
<?php
if(isset($_POST['submit']))
{
 include"connection.php";
 $name=mysqli_real_escape_string($conn,$_POST['name']);
 $email=mysqli_real_escape_string($conn,$_POST['email']);
 $phone=mysqli_real_escape_string($conn,$_POST['phone']);
 $password=mysqli_real_escape_string($conn,$_POST['password']);
 $qy="INSERT INTO REGISTRATION(name,email,phone,password) VALUES('$name','$email','$phone','$password') ";
 $res=mysqli_query($conn,$qy);
 if($res)
 	echo'<script>
         document.getElementById("message").innerHTML="Registration Suceesful";
         </script>';
  else
  	echo'<script>
         document.getElementById("message").innerHTML="Registration not  Suceesful";
         </script>';

}
?>