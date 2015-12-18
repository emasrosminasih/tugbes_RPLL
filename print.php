<html>
<body onLoad="print();">
</body>
</html>
<div style="border-width: 2px;
	border-style: solid;
	border-color: #000000;
	padding: 15px;">
<?php

echo "<u><b>PERPUSTAKAAN SMP NEGERI 1 CARIU</u></b>";
echo "<br>";


$id_peminjaman = $_POST['id_peminjaman'];
$nama = $_POST['nama'];
$tgl_skrg = $_POST['tgl_skrg'];
$tgl_haruskembali = $_POST['tgl_haruskembali'];


echo "<label>Id Peminjaman : </label><input type='hidden' name='id_peminjaman' value='".$id_peminjaman."'> ".$id_peminjaman."<br/>";
echo "<label>Nama Peminjam : </label><input type='hidden' name='nama' value='".$nama."'> ".$nama."<br/>";
echo "<label>Tanggal Peminjaman : </label><input type='hidden' name='tgl_skrg' value='".$tgl_skrg."'> ".$tgl_skrg."<br/>";
echo "<label>Tanggal Harus Kembali : </label><input type='hidden' name='tgl_haruskembali' value='".$tgl_haruskembali."'> ".$tgl_haruskembali."<br/>";
								
								
?>