<?php
include'db_conn.php';

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		p {
			font-size: 20px;
			color: #fff;
			background-color: #4caf50;
			padding: 14px 16px;
		}
		
	</style>
</head>
<body>

<form method="POST">
	<input type="text" name="id" placeholder="enter user id">
	<input type="submit" name="submit" value="submit">
</form>



<p>	
<?php

if (isset($_POST['submit'])) {
	
	$id = $_POST['id'];
}

$sql = "SELECT * FROM users where user_id = '$id';";
$result = mysqli_query($conn,$sql);
$resultCheck= mysqli_num_rows($result);

if($resultCheck > 0) {

while ($row = mysqli_fetch_assoc($result)) {
	echo"User id". $row['user_id'] ."<br>";
	echo"First Name:". $row['user_first'] ."<br>";
	echo"Last Name:". $row['user_last'] ."<br>";
	echo"Email:". $row['user_email'] ."<br>";
	echo"Password:". $row['user_pwd'] ."<br>";
	
	
}
}


?>

</p>
</body>
</html>