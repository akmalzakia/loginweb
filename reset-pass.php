<?php 
	session_start();

	include('koneksi.php');
	$username = $_POST['username'];
	$email = $_POST['email'];
	$pin = $_POST['pin'];

	$_SESSION['username'] = $username;

	$sql = "select count(id) as find from userlist where username = '$username' and email = '$email' and pin = '$pin'";
	$query = mysqli_query($db_connection,$sql);
	$search = mysqli_fetch_assoc($query);
	if($search['find']){
		header('Location: reset-pass2.php');
	}
	else{
		header('Location: forgot-password.php?msg=invalid');
	}
	// 	header('Location: index.php?status=sukses');
	// }
	// else{
	// 	header('Location: index.php?status=gagal');
	// }

?>
