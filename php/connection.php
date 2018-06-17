<?php
 $server="localhost";
 $uesername="root";
 $password="";
 $database="restaurents";
 $conn=mysqli_connect($server,$uesername,$password,$database);
 if(mysqli_connect_errno())
 	echo "connection failed".mysqli_connect_error();
 ?>