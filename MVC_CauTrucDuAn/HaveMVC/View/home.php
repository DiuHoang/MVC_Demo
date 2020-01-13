<?php
require "../Model/user.php";
	session_start();
	$user = null;
	if(isset($_SESSION['isLogin'])){
		if($_SESSION['isLogin'] == true){
			$user = new User();
			$user->fullname = $_SESSION['fullname'];
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		if($user == null){
	?>
	<?php
		}
		else{
		?>
		<h1> Hello <?php echo $user->fullname; ?> </h1>
	<?php 
		}
	?>
</body>
</html>