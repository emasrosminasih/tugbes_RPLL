<?php
	session_start();
	include "koneksi.php";
 
	$no = $_POST['id'];
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$jk = $_POST['jk'];
	$pekerjaan = $_POST['pekerjaan'];
	$agama = $_POST['agama'];
	$tlp = $_POST['tlp'];	
												
	$update = "update member set nama = '$nama', alamat = '$alamat', jk ='$jk', pekerjaan = '$pekerjaan', agama = '$agama', tlp = '$tlp'  where id_member=$no;";
	$update_query = mysql_query($update);
	
	header('location:member.php');
?>