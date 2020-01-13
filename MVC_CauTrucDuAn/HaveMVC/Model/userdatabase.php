<?php
	require "database.php";
	require "user.php";
	function login($username, $password){
		global $db;
		$sql = "SELECT * from user where username='$username' and password='$password'";
		$result = $db->query($sql)->fetch_all();
		if(count($result) > 0){
			$user = new User();
			$user->fullname = $result[0][1];
			return $user;
		}
		return null;
	}
	
?>