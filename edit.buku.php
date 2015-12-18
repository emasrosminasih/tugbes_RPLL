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
<link rel="shortcut icon" href="./icon.png" type="image/x-icon" />
    
<script type="text/javascript" src="jquery-1.6.2.js"></script>

	<!--
    Created by Artisteer v3.0.0.32906
    Base template (without user's data) checked by http://validator.w3.org : "This page is valid XHTML 1.0 Transitional"
    -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Admin | O P A C | Digital Library </title>

    <link rel="stylesheet" href="style.css" type="text/css" media="screen" />
    <!--[if IE 6]><link rel="stylesheet" href="style.ie6.css" type="text/css" media="screen" /><![endif]-->
    <!--[if IE 7]><link rel="stylesheet" href="style.ie7.css" type="text/css" media="screen" /><![endif]-->

    <script type="text/javascript" src="jquery.js"></script>
    <script type="text/javascript" src="script.js"></script>
</head>
<body>
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
									echo "</li>";
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
                                      
											<center>
											 <h2 class="art-postheader">Update Data Buku</h2>
											<?php
											echo "<form action=\"update.php\" method=\"POST\">";
											echo "<table>";
											$no = $_REQUEST['no']; 
											echo "<tr><td>ID</td><td><b>$no</b></td></tr>";
											echo "<tr><td>Kategori<br>&nbsp;&nbsp;&nbsp;&nbsp;</td><td><select name=\"kategori\">
																							<option value=\"000\">Karya Umum</option>
																							<option value=\"100\">Filsafat dan Psikologi</option>
																							<option value=\"200\">Agama</option>
																							<option value=\"300\">Ilmu Sosial</option>
																							<option value=\"400\">Bahasa</option>
																							<option value=\"500\">Ilmu Alam dan Matematika</option>
																							<option value=\"600\">Teknologi dan Ilmu Terapan</option>
																							<option value=\"700\">Kesenian, Hiburan, Olahraga</option>
																							<option value=\"800\">Kesusastraan</option>
																							<option value=\"900\">Geografi dan Sejarah</option>																				
																				</select>";
																						
																							$select = "select *from buku where id_buku = $no;";
																							$select_query = mysql_query($select);
																							while($hasil = mysql_fetch_array($select_query))
																								{
																									$kategori2 = $hasil['id_kategori'];
																										$pilih_kategori = "select *from kategori where id_kategori = '$kategori2'";
																										$pilih_query = mysql_query($pilih_kategori);
																										while($nama = mysql_fetch_array($pilih_query))
																											{
																												$kategori = $nama['kategori'];
																											}
																									$pengarang = $hasil['pengarang'];
																									$judul_buku = $hasil['judul_buku'];
																									$penerbit = $hasil['penerbit'];
																									$kota_terbit = $hasil['kota_terbit'];
																									$status = $hasil['status'];
																									$tahun_terbit = $hasil['tahun_terbit'];
																									$lokasi_rak = $hasil['lokasi_rak'];
																								}
																							
																						
																						echo "<font size=\"1\"><i>&nbsp;&nbsp;sebelumnya <b>'$kategori'</b></i></font></td></tr>";
											echo "<tr><td>Pengarang&nbsp;&nbsp;&nbsp;&nbsp;</td><td><input value=\"$pengarang\" size=\"50\" type=\"text\" name=\"pengarang\"></td></tr>";
											echo "<tr><td>Judul Buku&nbsp;&nbsp;&nbsp;&nbsp;</td><td><input value=\"$judul_buku\" size=\"50\" type=\"text\" name=\"judul_buku\"></td></tr>";
											echo "<tr><td>Penerbit&nbsp;&nbsp;&nbsp;&nbsp;</td><td><input value=\"$penerbit\" size=\"50\" type=\"text\" name=\"penerbit\"></td></tr>";
											echo "<tr><td>Kota Terbit&nbsp;&nbsp;&nbsp;&nbsp;</td><td><input value=\"$kota_terbit\" size=\"50\" type=\"text\" name=\"kota_terbit\"></td></tr>";
											echo "<tr><td><input type=\"hidden\" name=\"id\" value=\"$no\">Tahun Terbit&nbsp;&nbsp;&nbsp;&nbsp;</td><td><input value=\"$tahun_terbit\" size=\"50\" type=\"text\" name=\"tahun_terbit\"></td></tr>";
											echo "<tr><td>Lokasi Rak&nbsp;&nbsp;&nbsp;&nbsp;</td><td><select name=\"lokasi_rak\"><option value=\"Manajemen\">Manajemen</option>";
																							echo "<option value=\"Hukum\">Hukum</option>";
																							echo "<option value=\"Sosial\">Sosial</option>";
																							echo "<option value=\"Komunikasi\">Komunikasi</option>";
																							echo "<option value=\"Statistika\">Statistika</option>";
																							echo "<option value=\"Eksiplodia\">Eksiplodia</option>";
																							echo "<option value=\"Politik\">Politik</option>";
																							echo "<option value=\"Ekonomi\">Ekonomi</option>";
																							echo "<option value=\"Pemerintahaan\">Pemerintahaan</option>";
																							echo "<option value=\"Kamus\">Kamus</option>";
																							echo "<option value=\"Bahasa\">Bahasa</option>";
																							echo "<option value=\"Per.Per-UU\">Per.Per-UU</option>";
																							echo "<option value=\"Transmigrasi\">Transmigrasi</option>";
																							echo "<option value=\"Umum\">Umum</option>";
																							echo "<option value=\"Komputer\">Komputer</option>";
																							echo "<option value=\"Skripsi\">Skripsi</option>";
																							
																				echo "</select>&nbsp;&nbsp;<font size=\"1\"><i>sebelumnya <b>'$lokasi_rak'</b></i></font></td></tr>";
											echo "<tr><td>Eksemplar&nbsp;&nbsp;&nbsp;&nbsp;</td><td><input value=\"$status\" size=\"50\" type=\"text\" name=\"status\"></td></tr>";
											echo "<tr><td></td><td>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											&nbsp;&nbsp;&nbsp;
											<input class=\"art-button\" type=\"submit\" name=\"post\" value=\"Simpan\" /></td></tr>
											</table></form></center>";
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
                                                                            <!--
																			<ul>
                                                                             <li><a href="#">Home</a></li>
                                                                             <li><a href="#">Overview</a></li>
                                                                             <li><a href="#">Demo</a></li>
                                                                             <li><a href="#">Download</a></li>
                                                                             <li><a href="#">FAQ</a></li>
                                                                             <li><a href="#">Hyperlink</a></li>
                                                                             <li><a href="#" class="visited">Visited link</a></li>
                                                                             <li><a href="#" class="hover">Hovered link</a></li>
                                                                            </ul>
																			-->
																			
                                                                           
																		
                                          		<div class="cleared"></div>
                                              </div>
                                          </div>
                          		<div class="cleared"></div>
                              </div>
                          </div></div>
						  <div class="art-block">
                              <div class="art-block-body">
                                          <div class="art-blockheader">
                                              <h3 class="t">Polling</h3>
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
                                                          <div><form method="POST">
                                                          <table align="center">
														  <tr><td colspan="3" align="center">Hasil Polling</td></tr>
														  <tr><td colspan="3" align="center" valign="bottom"><img src="poling.png" width="20" height="<?php echo $tampil_jelek; ?>" align="bottom" title="Jelek <?php settype($tampil_jelek, "integer"); echo $tampil_jelek; ?>%"></img>
														  <img src="poling.png" width="20" height="<?php echo $tampil_biasa; ?>" align="bottom" title="Biasa <?php settype($tampil_biasa, "integer"); echo $tampil_biasa; ?>%"></img>
														  <img src="poling.png" width="20" height="<?php echo $tampil_bagus; ?>" align="bottom" title="Bagus <?php settype($tampil_bagus, "integer"); echo $tampil_bagus; ?>%"></img></td>
														  </tr>
														 
                                                          <tr><td colspan="3">Menurut Anda Website ini</td></tr>
														  <tr><td><input type="radio" name="poling" value="jelek">Jelek</td>
														  <td><input type="radio" name="poling" value="biasa">Biasa</td><td><input type="radio" name="poling" value="bagus">Bagus</td>
														  <td><input class="art-button" type="submit" name="vote" value="Vote" /></td>
                                                          </tr></table>
                                                          </form></div>
                                          
                                          		<div class="cleared"></div>
                                              </div>
                                          </div>
                          		<div class="cleared"></div>
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
                          
                <div class="cleared"></div>
                <div class="art-footer">
                    <div class="art-footer-t"></div>
                    <div class="art-footer-l"></div>
                    <div class="art-footer-b"></div>
                    <div class="art-footer-r"></div>
                    <div class="art-footer-body">
                        <div class="art-footer-text">
                            <p><a target="_blank" href="#">TugasBesar</a> | <a target="_blank" href="#">APDP</a> </p><p>Copyright cartoe &copy; 2015. </p>
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
