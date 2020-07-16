<?php
include('../koneksi.php');
include('admin.php');

if(!isset($_GET['id'])){
	header('Location: list-user.php');
}
$id = $_GET['id'];
$sql = 'delete from userlist where id='.$id;
$query = mysqli_query($db_connection,$sql);

// echo $sql;

if($query){
	header('Location: list-user.php?status=sukses');
}
else{
	header('Location: list-user.php?status=gagal');
}
?>
