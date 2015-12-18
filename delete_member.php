<?php
	session_start();
	include "koneksi.php";
	$no = $_POST['no'];
	if($no!=null)
		{
			
			$delete = "delete from member where id_member = $no;";
			$delete_query = mysql_query($delete);
			if($delete_query)
				{
					$_SESSION['action_member']="Hapus data $judul";
				}
			else
				{
					$_SESSION['action_member']="Hapus data $judul";
				}
		}
	header('location:member.php');
?>