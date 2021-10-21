<?php
include 'database.php';
session_start();
?>
<html> <head> <body style="background-image: url(./img/bg.jpg);"> <div
style="width: 100%; height: 100px; background: green; padding-top: 10px"> <h1
style="text-align: center">ATTENDANCE MANAGEMENT SYSTEM </h1> </div> <div><a
href="./log1.html">BACK</a> </div>

	<div style="border: 1px black solid; border-radius: 5px;display: inline-block;margin-left: 40%;margin-top: 50px;background: rgba(0,0,0,.3);">
	<h1 style="padding-right: 10px;padding-left: 10px;"><center>Faculty Registration</center></h1>
	<form action="" method="post">
	<center><input type="text" placeholder="Full Name" name="uname" required><br><br>
	<center><input type="text" placeholder="Mobile" name="mobile" required><br><br>
	<center><input type="text" placeholder="Department" name="dept" required><br><br>
	<center><input type="text" placeholder="User id" name="id" required><br><br>
	<center><input type="text" placeholder="Password" name="pwd"
	required><br>
	<br>
	<button type="submit" name="reg">REGISTER</button>
	<button type="button">CANCEL</button>
	</div>	
</form>
<?php
if(isset($_POST["reg"]))
	{
		$usr=$_POST['uname'];
		$pwd=$_POST['pwd'];
		$mob=$_POST['mobile'];
		$dept=$_POST['dept'];
		$uid=$_POST['id'];

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
</body>
</head>
</html>