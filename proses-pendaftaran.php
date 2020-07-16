<?php 
	include('koneksi.php');
	$nama = $_POST['nama'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$email = $_POST['email'];
	$kota = $_POST['kota'];
	$negara = $_POST['negara'];
	$phone = $_POST['phone'];
	$pin = $_POST['pin'];
	$pin_length = strlen("$pin");
	// echo $pin_length;

	if(is_numeric($pin) && $pin_length == 6){

		$sql = "insert into userlist(nama,email,username, role, pin, password, kota, negara, phone) values ('$nama','$email','$username', 'User', '$pin', '$password', '$kota', '$negara', '$phone')";

		// echo $sql;

		$query = mysqli_query($db_connection,$sql);

		if($query){
			header('Location: index.php?status=sukses');
		}
		else{
			header('Location: index.php?status=gagal');
		}
	}
	else{
		header('Location: register.php?msg=invalid-pin');
	}
?>