
<?php
	session_start();
	if($_SESSION['satu']=="terhubung")
		{
			include "koneksi.php";
			include "vote.php";
		}
	else
		{
			header('location:index.php');
		}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US" xml:lang="en">
<head>
<link rel="stylesheet" type="text/css" href="development-bundle/themes/ui-lightness/ui.all.css">
    <script type="text/javascript" src="development-bundle/jquery-1.3.2.js"></script>
    <script type="text/javascript" src="development-bundle/ui/ui.core.js"></script>
    <script type="text/javascript" src="development-bundle/ui/ui.dialog.js"></script>
    <script type="text/javascript" src="development-bundle/ui/ui.draggable.js"></script>
     <script type="text/javascript" src="searchadmin.js"></script>
     

    <script type="text/javascript">
      $(document).ready(function(){
        $("#kotakdialog").dialog({
          autoOpen: false
        });
      
        $("#buka").click(function() {
            $("#kotakdialog").dialog('open');
          }
        );
      });
    </script>
<div id="kotakdialog" title="Tambah Data Buku">
	   <form action="catalogue.admin.php" method="POST">
											<table>
											<tr><td>Judul Buku&nbsp;&nbsp;&nbsp;&nbsp;</td><td><input size="30" title="Judul Buku" type="text" name="judul_buku"></td></tr>
											<tr><td>Kategori</td>
											<td><select title="Kategori" name="kategori"><option value="000">Karya Umum</option>
																							<option value="100">Pemerintahan</option>
																							<option value="200">Agama</option>
																							<option value="300">Ilmu Sosial</option>
																							<option value="400">Bahasa</option>
																							<option value="500">Teknologi dan Ilmu Terapan</option>
																							<option value="600">Geografi dan Sejarah</option>
																							<option value="700">Kesenian, Hiburan, Olahraga</option>
																							<option value="800">Kesusastraan</option>
																				</select></td>
																				<td><a href='editkategori.php'>Tambah Kategori</a></td></tr>
											<tr><td>Pengarang&nbsp;&nbsp;&nbsp;&nbsp;</td><td><input size="30" title="Pengarang" type="text" name="pengarang"></td></tr>
											<tr><td>Penerbit&nbsp;&nbsp;&nbsp;&nbsp;</td><td><input size="30" title="Penerbit" type="text" name="penerbit"></td></tr>
											<tr><td>Kota Terbit&nbsp;&nbsp;&nbsp;&nbsp;</td><td><input size="30" title="Kota Terbit" type="text" name="kota_terbit"></td></tr>
											<tr><td>Tahun Terbit&nbsp;&nbsp;&nbsp;&nbsp;</td><td><input size="30" title="Tahun Terbit" type="text" name="tahun_terbit"></td></tr>
											<tr><td>Eksemplar&nbsp;&nbsp;&nbsp;&nbsp;</td><td><input title="Jumlah Eksemplar Buku" type="text" name="status"></td></tr>
											<tr><td>Lokasi Rak&nbsp;&nbsp;&nbsp;&nbsp;</td><td><select title="Lokasi Rak" name="lokasi_rak"><option value="A1B">A1B</option>
																							<<option value="Manajemen">Manajemen</option>
																							<option value="Hukum">Hukum</option>
																							<option value="Sosial">Sosial</option>
																							<option value="Komunikasi">Komunikasi</option>
																							<option value="Statistik">Statistik</option>
																							<option value="Eksiplodia">Eksiplodia</option>
																							<option value="Politik">Politik</option>
																							<option value="Ekonomi">Ekonomi</option>
																							<option value="Pemerintahan">Pemerintahan</option>
																							<option value="Kamus">Kamus</option>
																							<option value="Bahasa">Bahasa</option>
																							<option value="Per.Per-UU">Per.Per-UU</option>
																		                    <option value="Transmigrasi">Transmigrasi</option>
																							<option value="Umum">Umum</option>
																							<option value="Komputer">Komputer</option>
																							<option value="Skripsi">Skripsi</option>
																				</select></td></tr>		
											<tr><td></td><td>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											&nbsp;&nbsp;&nbsp;
											<input class="art-button" type="submit" name="post" value="Tambah" /></td></tr>
											</table></form></div>