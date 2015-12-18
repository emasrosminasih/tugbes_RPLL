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
											 <h2 class="art-postheader">Update Data Member</h2>
											<?php
											echo "<form action=\"update_member.php\" method=\"POST\">";
											echo "<table>";
											$no = $_REQUEST['no']; 
											echo "<tr><td>ID</td><td><b>$no</b></td></tr>";
																																
																							$select = "select *from member where id_member = $no;";
																							$select_query = mysql_query($select);
																							while ( $hasil=mysql_fetch_array($select_query))
																							{
																									$nama = $hasil['nama'];
																									$alamat = $hasil['alamat'];
																									$jk = $hasil['jk'];
																									$agama = $hasil['agama'];
																									$pekerjaan = $hasil['pekerjaan'];
																									$tlp = $hasil['tlp'];
																							}		
																								
																							
																						
																						
											echo "<tr><td>Nama&nbsp;&nbsp;&nbsp;&nbsp;</td><td><input value=\"$nama\" size=\"50\" type=\"text\" name=\"nama\"></td></tr>";
											echo "<tr><td>Alamat&nbsp;&nbsp;&nbsp;&nbsp;</td><td><input value=\"$alamat\" size=\"50\" type=\"text\" name=\"alamat\"></td></tr>";
											echo "<tr><td>Jenis Kelamin&nbsp;&nbsp;&nbsp;&nbsp;</td><td><select name=\"jk\"><option value=\"L\">P</option>";
																							echo "<option value=\"L\">L</option>";
																						

																				echo "</select></td></tr>";
											
											echo "<tr><td>Agama&nbsp;&nbsp;&nbsp;&nbsp;</td><td><input value=\"$agama\" size=\"50\" type=\"text\" name=\"agama\"></td></tr>";
											echo "<tr><td>Pekerjaan&nbsp;&nbsp;&nbsp;&nbsp;</td><td><input value=\"$pekerjaan\" size=\"50\" type=\"text\" name=\"pekerjaan\"></td></tr>";
											echo "<tr><td>Telephone&nbsp;&nbsp;&nbsp;&nbsp;</td><td><input value=\"$tlp\" size=\"50\" type=\"text\" name=\"tlp\"></td></tr>";
											echo "<tr><td><input type=\"hidden\" name=\"id\" value=\"$no\">";
											
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
                                          <div class="art-blockheader">
                                              <h3 class="t"><a target="_blank" href="news.php">Berita Terbaru</a></h3>
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
																			
                                                                            <?php
																				$terbaru = "select *from berita order by id desc limit 0,1";
																				$terbaru_query = mysql_query($terbaru);
																				while($hasil_terbaru = mysql_fetch_array($terbaru_query))
																					{
																						$id = $hasil_terbaru['id'];
																						$tgl = $hasil_terbaru['tanggal'];
																						$isi = $hasil_terbaru['isi'];
																					}
																				$explode_isi = explode(" ", $isi);
																			
                                                                            echo "<p><b>$tgl</b><br />";
																				for($j=0; $j<30; $j++)
																					{
																						echo $explode_isi[$j]." ";
																					}
																				echo " ";
																			
                                                                            echo ". . . <a target=\"_blank\" href=\"news.php?id=$id\">Selengkapnya</a>";
																			?>
																		<?php
																			$terbaru2 = "select *from berita order by id desc limit 1,1";
																			$terbaru_query2 = mysql_query($terbaru2);
																			while($hasil_terbaru2 = mysql_fetch_array($terbaru_query2))
																				{	
																					$id2 = $hasil_terbaru2['id'];
																					$tgl2 = $hasil_terbaru2['tanggal'];
																					$isi2 = $hasil_terbaru2['isi'];
																				}
																			$explode_isi2 = explode(" ", $isi2);
																			
																			echo "<p><b>$tgl2</b><br />";
																			for($l=0; $l<30; $l++)
																					{
																						echo $explode_isi2[$l]." ";
																					}
																				echo " ";
																			
                                                                            echo ". . . <a target=\"_blank\" href=\"news.php?id=$id2\">Selengkapnya</a>";
																		?>
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
