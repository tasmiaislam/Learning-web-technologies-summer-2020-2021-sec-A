<?php
	session_start();
	if(!isset($_COOKIE['flag'])){
		header('location:../view/Login.php');
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title><?=$title?></title>
</head>
<body>
	<center>
	
</body>
</html>