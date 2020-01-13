<?php
	require "../Model/userdatabase.php";
	session_start();
	if(isset($_POST['btn-login'])){
		$username = $_POST['username'];
		$password = $_POST['password'];

		$user = login($username, $password);
		if($user == null){
			$_SESSION['isLogin'] = false;
		}
		else{
			$_SESSION['isLogin'] = true;
			$_SESSION['fullname'] = $user->fullname;
		}
		header("location: ../View/home.php");
	}
?>