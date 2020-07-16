<?php
	include('../koneksi.php');
	include ('admin.php');

	$id = $_POST['id'];
	$nama = $_POST['nama'];
	$username = $_POST['username'];
	$kota = $_POST['kota'];
	$negara = $_POST['negara'];
	$phone = $_POST ['phone'];
	$password = $_POST['password'];
	$role = $_POST['role'];
	$pin = $_POST['pin'];
	$pin_length = strlen("$pin");

	if(is_numeric($pin) && $pin_length == 6){
		$sql = "update userlist set
		nama = '".$nama."',
		username = '".$username."',
		role = '".$role."',
		kota = '".$kota."',
		negara = '".$negara."',
		phone = '".$phone."',
		password = '".$password."',
		pin = '".$pin."'
		where id = ".$id;
		// echo $sql;
		$query = mysqli_query($db_connection,$sql);

		if($query){
			header('Location: list-user.php?status=sukses');
		}
		else{
			header('Location: list-user.php?status=gagal');
		}
	}
	else{
		header('Location: form-edit.php?id='.$id.'&msg=invalid-pin');
	}

?>