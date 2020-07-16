<?php
$server = 'localhost';
$user = 'root';
$password = 'adminadmin';
$database = 'userlogin';

$db_connection = mysqli_connect($server, $user,$password,$database);

if( !$db_connection){
	die('Gagal terhubung dengan server'.mysqli_connect_error());
}
?>