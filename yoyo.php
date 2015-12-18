<?php
include "koneksi.php";
$id_pemijaman = $_POST['id11'];
$id1 = $_POST['id1'];
$id2 = $_POST['id2'];
$id3 = $_POST['id3'];
$id4 = $_POST['id4'];
$id5 = $_POST['id5'];
$tgl_pengembalian = $_POST['tgl_pengembalian'];
$denda = $_POST['denda'];
$query = "UPDATE  `perpustakaan`.`peminjaman` SET `tgl_pengembalian` =  '$tgl_pengembalian',`denda` =  '$denda',`status` =  'kembali' WHERE  `peminjaman`.`id` =$id_pemijaman;";
$query=mysql_query($query);
?><script language = "Javascript">alert('Pengembalian Buku Berhasil');
					document.location='kembali.php'</script><?php
?>