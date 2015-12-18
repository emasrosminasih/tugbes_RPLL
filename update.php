<?php
	session_start();
	include "koneksi.php";
 
	$no = $_POST['id'];
	$no_buku = $_POST['no_buku'];
	$kategori = $_POST['kategori'];
	$pengarang = $_POST['pengarang'];
	$judul_buku = $_POST['judul_buku'];
	$penerbit = $_POST['penerbit'];
	$kota_terbit = $_POST['kota_terbit'];
	$tahun_terbit = $_POST['tahun_terbit'];
	$lokasi_rak = $_POST['lokasi_rak'];
	$status = $_POST['status'];
												
	$update = "update buku set no_buku = '$no_buku',id_kategori = '$kategori', pengarang = '$pengarang', judul_buku ='$judul_buku', penerbit = '$penerbit', kota_terbit = '$kota_terbit', tahun_terbit = '$kota_terbit', tahun_terbit = '$tahun_terbit', lokasi_rak = '$lokasi_rak', status = '$status' where id_buku=$no;";
	$update_query = mysql_query($update);
	if($update_query)
		{
			$_SESSION['action']="Edit data $judul_buku";
		}
	else
		{
			$_SESSION['action']="Edit data $judul_buku";
		}
	header('location:catalogue.admin.php');
?>