<?php 
	session_start();
	$username = $_SESSION['username'];

	include('koneksi.php');

	$password = $_POST['password'];
	$password2 = $_POST['password2'];

	if($password == $password2){
		$sql = "update userlist set password = '$password' where username = '$username'";
		$query = mysqli_query($db_connection,$sql);
		if($query){
			header('Location: index.php?status=success');
			session_destroy();
		}
		else{
			header('Location: reset-pass2.php?msg=failed');
		}
	}
	else{
		header('Location:reset-pass2.php?msg=password-not-match');
	}
?>