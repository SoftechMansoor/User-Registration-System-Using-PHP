<?php
include'db_conn.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Sign up</title>
<style type="text/css">

	*{
		margin: 0px;
		padding: 0px;
		box-sizing: border-box;
	}
	

	input[type=text] {

		width: 100%;
		margin-top: 10px;
		padding: 10px 20px;
		text-align: center;
		box-sizing: border-box;
		display: inline-block;
		border: 1px solid #aaa;


	}

	input[type=password] {

		width: 100%;
		margin-top: 10px;
		padding: 10px;
		text-align: center;
		box-sizing: border-box;
		display: inline-block;
		border: 1px solid #aaa;
		border-radius: 4px;

	}

	button{
		width: 100%;
		margin-top: 10px;
		padding: 10px;
		text-align: center;
		box-sizing: border-box;
		display: inline-block;
		border: 1px solid #aaa;
		background-color: #4caf50;
		color: #fff;
	}

	button:hover{background-color: #dddddd}

	label {
		width: 100%;
		margin-top: 10px;
		padding: 10px 0px 20px 0px;
		text-align: center;
		box-sizing: border-box;
		display: inline-block;
		border: 1px solid #aaa;
		background-color: #4caf50;
		color: #fff;
	}

</style>
</head>
<body>
	<label>Signup Form</label>
	<form action="signup.php" method="POST">
		<input type="text" name="first" placeholder="First Name">
		<br>
		<input type="text" name="last" placeholder="Last Name">
		<br>
		<input type="text" name="email" placeholder="Email">
		<br>
		<input type="text" name="uid" placeholder="Username">
		<br>
		<input type="Password" name="pwd" placeholder="Password">
		<br>
		<button type="submit" name="submit">Sign Up</button>
	</form>

</body>
</html>

