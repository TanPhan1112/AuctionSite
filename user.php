<!DOCTYPE html>
<html lang="en">
<head>
	<title>User</title>
	<meta charset="utf-8">
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
	#myEmail {
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
	#passWord {
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
			<h1>User login</h1>
		</header>
		<main>
			<form id="contactForm" method="post" action="">
				<label for="myEmail">E-mail:</label>
				<input type="text" name="myEmail" id="myEmail">
				<label for="passWord">Password:</label>
				<input type="password" name="passWord" id="passWord">
				<input id="mySubmit" type="submit" value="Log In">
			</form>
		</main>
		<footer>
			<h6><i>Created by Phan, Duc Minh Tan</i></h6>
		</footer>
	</div>
</body>
</html>
