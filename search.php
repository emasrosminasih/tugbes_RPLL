<?php
include "koneksi.php";
	header('Content-Type: text/xml');
	
	echo '<hasil>';
	$keyword = $_GET['keyword'];
	$database = $_GET['database'];
	
	
	if($keyword!=null)
		{
			$query = "select id_buku, id_kategori, pengarang, judul_buku, penerbit, kota_terbit, tahun_terbit, lokasi_rak, status as 'hasil' from buku where $database LIKE '%$keyword%';";
		}
	$hasil = mysql_query($query);
	
	while($data = mysql_fetch_array($hasil))
		{
			echo "<buku>";
			echo "<id_buku>".$data['id_buku']."</id_buku>";
			echo "<pengarang>".$data['pengarang']."</pengarang>";
			echo "<judul_buku>".$data['judul_buku']."</judul_buku>";
			echo "<penerbit>".$data['penerbit']."</penerbit>";
			
		    echo "<status>".$data['hasil']." buku</status>";
			
			echo "<lokasi_rak>".$data['lokasi_rak']."</lokasi_rak>";
			echo "</buku>";
		}
	echo '</hasil>';
?>