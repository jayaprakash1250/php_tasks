<?php
include("conn.php");
$sql = "SELECT * FROM images";
$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_array($result))
{   echo " 
  <table border='1'>
<tr>
<td><img src='uploads/".$row['image_name']."' height=\"200px\" width=\"320px\"></td>
</tr>
<tr>".$row['image_type']."</tr>
<br>
<tr align=\"right\">".$row['image_size']."</tr>
</table>
";
}  

?>