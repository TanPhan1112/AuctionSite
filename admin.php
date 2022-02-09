<!DOCTYPE html>
<?php
include("sql/sqlhelper.php");
// Always start this first
session_start();

$error = '';
if($_SERVER["REQUEST_METHOD"] == "POST") {
	// username and password sent from form

	$myusername = mysqli_real_escape_string($db,$_POST['username']);
	$mypassword = mysqli_real_escape_string($db,$_POST['password']);

	$sql = "SELECT * FROM admin WHERE username = '$myusername' and password = '$mypassword'";
	$result = mysqli_query($db,$sql);
	$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
	$active = $row['active'];

	$count = mysqli_num_rows($result);

	// If result matched $myusername and $mypassword, table row must be 1 row

	if($count == 1) {
		// session_register("myusername");
		$_SESSION['login_user'] = $myusername;

		header("location: adsite.php");
	}else {
		$error = "Your Login Name or Password is invalid";
	}
}
?>
<html lang="en">
<head>
	<title>Administrator</title>
	<meta charset="utf-8">
	<script src="login.js" style="text/javascript" defer></script>
	<link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet">
	<style>
	label {
		float: left;
		width: 100px;
		clear: left;
		text-align: right;
		padding-right: 10px;
		margin-top: 10px;
	}
	#username {
		margin-top: 5px;
		display: block;
		width: 25%;
		border: 2px solid #ccc;
		border-radius: 5px;
		font-size: 15px;
		background-color: white;
		padding: 5px;
		font-family: 'Lora', serif;
	}
	#password {
		margin-top: 5px;
		display: block;
		width: 25%;
		border: 2px solid #ccc;
		border-radius: 5px;
		font-size: 15px;
		background-color: white;
		padding: 5px;
		font-family: 'Lora', serif;
	}
	#mySubmit {
		margin-top: 5px;
		margin-left: 110px;
		width: auto;
		padding: 10px;
		border-radius: 5px;
		color: white;
		background-color: #2D7F3E;
		font-size: 20px;
		text-align: center;
		font-family: 'Lora', serif;
	}
	#mySubmit:hover {
		background-color: #667F6B;
	}
	</style>
</head>
<body>
	<div id="wrapper">
		<header>
			<h1>Administrator login</h1>
		</header>
		<main>
			<form id="contactForm" method="post" name="myForm">
				<label for="username">Username:</label>
				<input type="text" name="username" id="username">
				<label for="passWord">Password:</label>
				<input type="password" name="password" id="password">
				<input id="mySubmit" type="submit" value="Log In">
			</form>
			<div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
		</main>
		<footer>
			<h6><i>Created by Phan, Duc Minh Tan</i></h6>
		</footer>
	</div>
</body>
</html>
