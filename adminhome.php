<?php
include 'database.php';
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>WELCOME <?php echo $_SESSION["NAME"]; ?></h1>

	<h1><?php echo $_SESSION["ID"]; ?></h1>

</body>
</html>