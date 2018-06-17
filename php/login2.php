<?php
session_start();
if(isset($_POST['submit']))
{
 include"connection.php";
 $email=mysqli_real_escape_string($conn,$_POST['email']);
 $password=mysqli_real_escape_string($conn,$_POST['password']);
 $qy="SELECT * FROM REGISTRATION WHERE email='$email' and password='$password'";
if($res=mysqli_query($conn,$qy))
{
	while($row = mysqli_fetch_assoc($res))
		$name = $row['name'];
	$_SESSION['name']=$name;
	header ("Location:login3.php");	
}
 echo "Invalid username or password"; 
}
?>