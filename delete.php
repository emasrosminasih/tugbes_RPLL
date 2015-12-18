<?php
	session_start();
	include "koneksi.php";
	$no = $_POST['no'];
	if($no!=null)
		{
			$lihat = "select *from buku;";
			$lihat_query = mysql_query($lihat);
			while($hasil = mysql_fetch_array($lihat_query))
				{
					$judul = $hasil['judul_buku'];
				}
			$delete = "delete from buku where id_buku = $no;";
			$delete_query = mysql_query($delete);
			if($delete_query)
				{
					$_SESSION['action']="Hapus data $judul";
				}
			else
				{
					$_SESSION['action']="Hapus data $judul";
				}
		}
	header('location:catalogue.admin.php');
?>