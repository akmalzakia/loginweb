<?php
session_start();

include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];
$sql = "select * from userlist where username='$username' and password='$password'";


$data = mysqli_query($db_connection,$sql);
$cek = mysqli_num_rows($data);
$user = mysqli_fetch_array($data);


if($cek > 0 && $user['role'] == 'Administrator'){
	$_SESSION['name'] = $user['nama'];
	$_SESSION['username'] = $username;
	$_SESSION['status'] = 'login';
	$_SESSION['role'] = 'Administrator';
	$_SESSION['id'] = $user['id'];
	header('location:admin/index.php');
}
else if($cek > 0 and $user['role'] == 'User'){
	$_SESSION['name'] = $user['nama'];
	$_SESSION['username'] = $username;
	$_SESSION['status'] = 'login';
	$_SESSION['role'] = 'User';
	$_SESSION['id'] = $user['id'];
	header('location:user/index.php');
}
else{
	header('location:index.php?pesan=gagal');
}

?>