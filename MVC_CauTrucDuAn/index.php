<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$database = "mvc";
	$db = new mysqli($servername, $username, $password, $database);

	if(isset($_POST['btn-login'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
		$sql = "SELECT * from user where username='$username' and password='$password'";
    	$result = $db->query($sql)->fetch_all();
    	if(count($result) > 0){
    		echo "<script> alert ('Login Thanh Cong!'); </script>";
    	}
    	else{
    		echo "<script> alert ('Login That Bai!'); </script>";
    	}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="" method="post">
		<input type="text" name="username" placeholder="Username">
		<input type="password" name="password" placeholder="Password">
		<button type="submit" name="btn-login">Login</button>
	</form>
</body>
</html>