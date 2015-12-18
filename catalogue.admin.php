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

<link rel="shortcut icon" href="./icon.png" type="image/x-icon" />
	
	<!--
    Created by Artisteer v3.0.0.32906
    Base template (without user's data) checked by http://validator.w3.org : "This page is valid XHTML 1.0 Transitional"
    -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Admin </title>

    <link rel="stylesheet" href="style.css" type="text/css" media="screen" />
    
	
	<!--[if IE 6]><link rel="stylesheet" href="style.ie6.css" type="text/css" media="screen" /><![endif]-->
    <!--[if IE 7]><link rel="stylesheet" href="style.ie7.css" type="text/css" media="screen" /><![endif]-->

  
    <script type="text/javascript" src="script.js"></script>
	
</head>
<body onLoad='proses()'>
<div id="art-page-background-glare">
        <div id="art-page-background-glare-image">
    <div id="art-main">
        <div class="art-sheet">
            <div class="art-sheet-tl"></div>
            <div class="art-sheet-tr"></div>
            <div class="art-sheet-bl"></div>
            <div class="art-sheet-br"></div>
            <div class="art-sheet-tc"></div>
            <div class="art-sheet-bc"></div>
            <div class="art-sheet-cl"></div>
            <div class="art-sheet-cr"></div>
            <div class="art-sheet-cc"></div>
            <div class="art-sheet-body">
                <div class="art-header">
                    <div class="art-header-center">
                        <div class="art-header-png"></div>
                    </div>
                    <div class="art-logo">
                     <h1 id="name-text" class="art-logo-name">
                    </div>
                </div>
                <div class="art-nav">
                	<div class="l"></div>
                	<div class="r"></div>
                	<ul class="art-menu">
                		
						<li>
                			<a href="home.php"><span class="l"></span><span class="r"></span><span class="t">Home</span></a>
                		</li>
                		<li>
                			<a class="1" title="Online Public Access Catalogue" href="index.php"><span class="l"></span><span class="r"></span><span class="t">OPAC</span></a>
                		</li>		
                		<li>
                			<a href="#"><span class="l"></span><span class="r"></span><span class="t">About</span></a>
							<ul>
                				<li><a href="sejarah.php">Sejarah Terbentuk</a>
                				</li>
                				<li><a href="visi.php">Visi</a></li>
                				<li><a href="misi.php">Misi</a></li>
							</ul>
                		</li>
						<?php
							if($_SESSION['satu']=="terhubung")
								{
									echo "<li>";
									echo "<a href=\"#\" class=\"active\" ><span class=\"l\"></span><span class=\"r\"></span><span class=\"t\">Admin</span></a>";
									echo "<ul>";
									echo "<li><a href=\"catalogue.admin.php\">Catalogue</a>";
									echo "<li><a href=\"member.php\">Member</a>";
									echo "</li>";
									echo "<li><a href=\"pinjam.php\">Peminjaman</a></li>";
									echo "<li><a href=\"kembali.php\">Pengembalian</a></li>";
									echo "<li><a href=\"admin/keluar.php\">Logout</a></li>";
									echo "</ul>";
									echo "</li>";
									
								}
						?>

                	</ul>
                </div>
                <div class="art-content-layout">
                    <div class="art-content-layout-row">
                        <div class="art-layout-cell art-content">
                          <div class="art-post">
                              <div class="art-post-body">
                          <div class="art-post-inner art-article">
                                          <div id="panel">
											<center>
											
											</center>
										</div>
                                    <div class="cleared"></div>
                          </div>
                          		<div class="cleared"></div>
			<?php
												$no_buku = $_POST['no_buku'];
												$kategori = $_POST['kategori'];
												$pengarang = $_POST['pengarang'];
												$judul_buku = $_POST['judul_buku'];
												$penerbit = $_POST['penerbit'];
												$kota_terbit = $_POST['kota_terbit'];
												$tahun_terbit = $_POST['tahun_terbit'];
												$lokasi_rak = $_POST['lokasi_rak'];
												$status = $_POST['status'];
												
												if($no_buku!=null&&$kategori!=null&&$pengarang!=null&&$judul_buku!=null&&$penerbit!=null&&$kota_terbit!=null&&$tahun_terbit!=null&&$lokasi_rak!=null)
													{
														$insert = "insert into buku(no_buku,id_kategori,pengarang,judul_buku,penerbit,kota_terbit,tahun_terbit,lokasi_rak,status) values
																	('$no_buku','$kategori','$pengarang','$judul_buku','$penerbit','$kota_terbit','$tahun_terbit','$lokasi_rak','$status');";
														$insert_query = mysql_query($insert);
														$_SESSION['action']="Tambah data $judul_buku";
													}
											?>
		    
											
	   </div>
	   <div id="kotakdialog" title="Tambah Data Buku">
	   <form action="catalogue.admin.php" method="POST">
											<table>
											<tr><td>No buku&nbsp;&nbsp;&nbsp;&nbsp;</td><td><input size="30" title="No buku" type="text" name="no_buku"></td></tr>
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
																				
											<tr><td>Pengarang&nbsp;&nbsp;&nbsp;&nbsp;</td><td><input size="30" title="Pengarang" type="text" name="pengarang"></td></tr>
											<tr><td>Penerbit&nbsp;&nbsp;&nbsp;&nbsp;</td><td><input size="30" title="Penerbit" type="text" name="penerbit"></td></tr>
											<tr><td>Kota Terbit&nbsp;&nbsp;&nbsp;&nbsp;</td><td><input size="30" title="Kota Terbit" type="text" name="kota_terbit"></td></tr>
											<tr><td>Tahun Terbit&nbsp;&nbsp;&nbsp;&nbsp;</td><td><input size="30" title="Tahun Terbit" type="text" name="tahun_terbit"></td></tr>
											<tr><td>Eksemplar&nbsp;&nbsp;&nbsp;&nbsp;</td><td><input title="Jumlah Eksemplar Buku" type="text" name="status"></td></tr>
											<tr><td>Lokasi Rak&nbsp;&nbsp;&nbsp;&nbsp;</td><td><select title="Lokasi Rak" name="lokasi_rak"><option value="Agama">Agama</option>
																							<option value="Manajemen">Manajemen</option>
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
   </div>
          
				                
						
						
						<div class="art-post">
                              <div class="art-post-body">
                           <div class="art-post-inner art-article">
										<center>
											
						  
										<center>
										  <form name="form1">
										  Keyword <input type="text" id="keyword" size="80" title="Masukan Keyword Pencarian">
										  <select name="pilih" id="database" onchange='proses()' title="Pilih Database">
										  <option value="id_buku">ID</option>
										  <option value="judul_buku">Judul Buku</option>
										  <option value="pengarang">Pengarang</option>
										  <option value="penerbit">Penerbit</option>
										 </select>
										  
										
										  </form>
										  <div id="hasil">
										  
										</center><br/><br/><br/><br/>
                                
											
												<h3>Daftar Koleksi Buku</h3>
												<form action="catalogue.admin.php" method="POST">
												<table align="center">
												<br>
												<tr>
													Sort by <select name="sort">
														<option value="id_buku">ID</option>
														<option value="id_kategori">Kategori</option>
														<option value="pengarang">Pengarang</option>
														<option value="judul_buku">Judul Buku</option>
														<option value="penerbit">Penerbit</option>
														<option value="kota_terbit">Kota Terbit</option>
														<option value="tahun_terbit">Tahun Terbit</option>
														<option value="lokasi_rak">Lokasi Rak</option>
														
														</select>
													<select name="mode">
														<option value="asc">A - Z</option>
														<option value="desc">Z - A</option></select>
													<input type="submit" name="show" value="Tampil"></td>
												
												</tr>
												<br></br>
												</table></form>
											
												<tr>
													<td>
											
											</center>                                        
												<?php
													echo "<div align=\"center\"><table border=\"0\" align=\"center\">";
													echo "<tr><th>ID</th><th>No Buku</th><th>Kategori</th><th>Pengarang</th><th>Judul Buku</th><th>Penerbit</th><th>Kota Terbit</th><th>Tahun Terbit</th><th>Lokasi Rak</th><th>Eksemplar</th><th>Delete</th></tr>";
													$sort = $_POST['sort'];
													$mode = $_POST['mode'];
													
													if($_SESSION['tampil']==null)
														{
															$_SESSION['tampil'] = "select *from buku;";
														}
													else if($sort==null&&$mode==null)
														{
															$_SESSION['tampil'];
														}
													else
														{
															$_SESSION['tampil'] =  "select id_buku,no_buku,id_kategori, pengarang, judul_buku, penerbit, kota_terbit, tahun_terbit, lokasi_rak, cekStatus(id_buku) as 'hasil' from buku order by $sort $mode;";
														}
														
															$select = $_SESSION['tampil'];
															$select_query = mysql_query($select);
															while($hasil = mysql_fetch_array($select_query))
																{
																		$id = $hasil['id_buku'];
																		$no_buku = $hasil['no_buku'];
																		$id_kategori = $hasil['id_kategori'];
																		$pengarang = $hasil['pengarang'];
																		$judul_buku = $hasil['judul_buku'];
																		$penerbit = $hasil['penerbit'];
																		$kota_terbit = $hasil['kota_terbit'];
																		$tahun_terbit = $hasil['tahun_terbit'];
																		$lokasi_rak = $hasil['lokasi_rak'];
																		$status = $hasil['status'];
																	echo "<tr><td><a title=\"edit $judul_buku\" href=\"edit.buku.php?no=$id\">$id</a></td><td>";
																		$select_kategori = "select kategori from kategori where id_kategori = '$id_kategori';";
																		$select_kategori_jalan = mysql_query($select_kategori);
																		while($hasil = mysql_fetch_array($select_kategori_jalan))
																			{
																				$nama_kategori = $hasil['kategori'];
																			}
																	echo "$no_buku</td><td>$nama_kategori</td><td>$pengarang</td><td>$judul_buku</td><td>$penerbit</td><td>$kota_terbit</td><td>$tahun_terbit</td><td>$lokasi_rak</td><td>$status";
																	
																	echo "<td>";
																	echo "<form action=\"delete.php\" method=\"POST\">";
																	echo "<center><input title =\"Hapus $judul_buku\" type=\"image\" src=\"delete.ico\" alt=\"Submit button\"><input type=\"hidden\" name=\"no\" value=\"$id\"</center></td>";							
																	echo "</form>";
																
																}
															echo "</table></div>";
												?>
													
                                    <div class="cleared"></div>
                          </div>
                          
                          		<div class="cleared"></div>
                              </div>
                          </div>
						  
						  <div class="art-post">
                              <div class="art-post-body">
                           <div class="art-post-inner art-article">
                                        
										
										
                                    <div class="cleared"></div>
                          </div>
                          
                          		<div class="cleared"></div>
                              </div>
                          </div>
                          <div class="cleared"></div>
                        </div>
						
                        <div class="art-layout-cell art-sidebar1">
			<div class="art-block">
						
                              <div class="art-block-body">
                                          <div class="art-blockheader">
                                              <h3 class="t">TAMBAH DATA BUKU</h3>
                                          </div>
                                          <div class="art-blockcontent">
                                              <div class="art-blockcontent-tl"></div>
                                              <div class="art-blockcontent-tr"></div>
                                              <div class="art-blockcontent-bl"></div>
                                              <div class="art-blockcontent-br"></div>
                                              <div class="art-blockcontent-tc"></div>
                                              <div class="art-blockcontent-bc"></div>
                                              <div class="art-blockcontent-cl"></div>
                                              <div class="art-blockcontent-cr"></div>
                                              <div class="art-blockcontent-cc"></div>
                                              <div class="art-blockcontent-body">
                                                          <div>
						<button title="Tambah data buku" id="buka"><img src="images2/new21.png"></img></button>													  
                                          		<div class="cleared"></div>
                                              </div>
                                          </div>
                          		<div class="cleared"></div>
                              </div>
                          </div>
			  </div>
			
						  <?php
						  if($_SESSION['satu']!=="terhubung")
							{
								  echo "<div class=\"art-block\">";
									  echo "<div class=\"art-block-body\">";
												  echo "<div class=\"art-blockheader\">";
													  echo "<h3 class=\"t\">Admin</h3>";
												  echo "</div>";
												  echo "<div class=\"art-blockcontent\">";
													  echo "<div class=\"art-blockcontent-tl\"></div>";
													  echo "<div class=\"art-blockcontent-tr\"></div>";
													  echo "<div class=\"art-blockcontent-bl\"></div>";
													  echo "<div class=\"art-blockcontent-br\"></div>";
													  echo "<div class=\"art-blockcontent-tc\"></div>";
													  echo "<div class=\"art-blockcontent-bc\"></div>";
													  echo "<div class=\"art-blockcontent-cl\"></div>";
													  echo "<div class=\"art-blockcontent-cr\"></div>";
													  echo "<div class=\"art-blockcontent-cc\"></div>";
													  echo "<div class=\"art-blockcontent-body\">";
																  echo "<div><form method=\"POST\" action=\"cek.php\">";
																  echo "<table><tr><td>Username</td><td colspan=\"2\">";
																  echo "<input type=\"text\" value=\"\" name=\"username\" id=\"s\" style=\"width: 95%;\" /></td></tr>";
																  echo "<tr><td>Password</td><td colspan=\"2\"><input type=\"password\" value=\"\" name=\"password\" id=\"s\" style=\"width: 95%;\" /></td></tr>";
																  echo "<tr><td>Validasi</td><td><input type=\"text\" maxlength=\"6\" name=\"validasi\" style=\"width: 80%;\"></td><td><img src=\"captchasecurityimages.php?width=110&height=40&character=6\" height=\"23\"></td></tr>";
																  echo "<tr><td colspan=\"3\" align=\"right\"><span class=\"art-button-wrapper\">";
																	echo "<span class=\"art-button-l\"> </span>";
																	echo "<span class=\"art-button-r\"> </span>";
																	echo "<input class=\"art-button\" type=\"submit\" name=\"search\" value=\"Login\" />";
																  echo "</span></td></tr>";
																  echo "</table>";
																  echo "</form></div>";
												  
														echo "<div class=\"cleared\"></div>";
													  echo "</div>";
												  echo "</div>";
										echo "<div class=\"cleared\"></div>";
									  echo "</div>";
								  echo "</div>";
							}
						  ?>
                          
                    </div>
                </div>
                <div class="cleared"></div>
                <div class="art-footer">
                    <div class="art-footer-t"></div>
                    <div class="art-footer-l"></div>
                    <div class="art-footer-b"></div>
                    <div class="art-footer-r"></div>
                    <div class="art-footer-body">
                        <div class="art-footer-text">
                            <p><a target="_blank" href="#">TugasBesar</a> | <a target="_blank" href="#">APDP</a> | <a target="_blank" href="#">1137050076</a></p><p>Copyright IFUIN &copy; 2015. </p>
                        </div>
                		<div class="cleared"></div>
                    </div>
                </div>
        		<div class="cleared"></div>
            </div>
        </div>
        <div class="cleared"></div>
        <p class="art-page-footer"></p>
    </div>
        </div>
    </div>
    
</body>
</html>
