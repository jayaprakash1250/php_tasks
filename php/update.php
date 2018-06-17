<!DOCTYPE html>
<html>
<head>
	<title>CHANGE PASSWORD</title>
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
	<form  method="post" enctype="multipart/form-data">
		<br><br><br>
		<label>Email</label>
		<input type="email" name="email"><br><br>
		<label>new password</label>
		<input type="password" name="password"><br><br>
		<input type="submit" name="submit" value="submit">
	</form>
	<p id="message"></p>
  </center>
 

</body>
</html>
<?php
if(isset($_POST['submit']))
{
 include"connection.php";
 $email=mysqli_real_escape_string($conn,$_POST['email']);
 $password=mysqli_real_escape_string($conn,$_POST['password']);
 $qy="UPDATE  REGISTRATION SET password='$password' where email='$email'";
 if(mysqli_query($conn,$qy))
 	echo'<script>
         document.getElementById("message").innerHTML="Updation" Suceesful";
         <script>';
  else
  	echo'<script>
         document.getElementById("message").innerHTML="Updation not  Suceesful";
         <script>';

}
?>