<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Session</title>
	<style type="text/css">
		.right
		{
			float:right;
		}
	</style>
</head>
<body>

</body>
</html>
<?php
  $user=$_SESSION['name'];
  echo'<div class="right">';
  echo $user;
  echo'</div>';
  ?>
