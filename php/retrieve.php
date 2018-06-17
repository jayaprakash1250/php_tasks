<?php
include "connection.php";
$qy="select * from registration";
if($res=mysqli_query($conn,$qy))
{
	echo '<table border="1">';
	echo'<tr>';
	echo'<th>Name<th>';
	echo'<th>phone<th>';
	echo'<th>email<th>';
	echo'<tr>';
while($row=mysqli_fetch_assoc($res))
{
	echo'<tr>';
  echo'<td>'.$row['name'] .'<td>';
  echo'<td>'.$row['email'] .'<td>';
  echo'<td>'.$row['phone'] .'<td>';
  echo'</tr>';
}
echo'</table>';
}
?>