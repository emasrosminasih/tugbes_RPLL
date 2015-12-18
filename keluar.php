<?php
	session_start();
	include "koneksi.php";
	$nama = $_SESSION['nama'];
	$query_status = "update user set status='tidak' where nama='$nama';";
	$status_ganti = mysql_query($query_status);
	unset($_SESSION['satu']);
	session_destroy();
	header('location:home.php');
?>
