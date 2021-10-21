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
	<?php

	if(isset($_POST["login"]))
	{
		$usr=$_POST['usr'];
		$pwd=$_POST['pwd'];
		$sql="select * from admin where username='$usr' and password='$pwd'";
		/*Must command*/
		$res=$db->query($sql);
		if($res->num_rows>0)
		{
			/*to get additional values from table*/
			$ro=$res->fetch_assoc();
			$_SESSION["ID"]=$ro["id"];

			$_SESSION["NAME"]=$usr;
			header('location:adminhome.php');
		}
		else
		{
			echo "invalid username or password";
		}
	}

	?>
	<form action="" method="post">
		<input type="text" name="usr" placeholder="Enter username">
		<input type="text" name="pwd" placeholder="Enter password">
		<button type="submit" name="login">Log In</button>
	</form>

</body>
</html>