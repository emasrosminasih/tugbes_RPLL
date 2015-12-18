<?php
	
	include "koneksi.php";
	$username = $_POST['username']; 
	$password = $_POST['password']; 
	$nama = $_POST['nama']; 
	$email = $_POST['email']; 
	$alamat = $_POST['alamat']; 
	$tempat = $_POST['tempat']; 
	$tanggal = $_POST['tanggal']; 
		$TTL = $tempat+", "+$tanggal;
	$pekerjaan = $_POST['pekerjaan']; 
			
	$query = "insert into member values ('','$username','$password','$nama','$email','$alamat','$TTL','$pekerjaan');";
	mysql_query($query);
			
	header('location:home.php');
?>