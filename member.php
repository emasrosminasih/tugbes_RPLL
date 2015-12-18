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
                				<li><a href="#">Sejarah Terbentuk</a>
                				</li>
                				<li><a href="#">Visi</a></li>
                				<li><a href="#">Misi</a></li>
							</ul>
                		</li>
						<?php
							if($_SESSION['satu']=="terhubung")
								{
									echo "<li>";
									echo "<a href=\"#\" class=\"active\" ><span class=\"l\"></span><span class=\"r\"></span><span class=\"t\">Admin</span></a>";
									echo "<ul>";
									echo "<li><a href=\"catalogue.admin.php\">Catalogue</a>";
									echo "<li><a href=\"member.php\">Members</a></li>";
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
												
												
												$judul_buku = $_POST['judul_buku'];
												$pengarang = $_POST['pengarang'];
												$lokasi_rak = $_POST['lokasi_rak'];
												$kota_terbit = $_POST['kota_terbit'];
												$tahun_terbit = $_POST['tahun_terbit'];
												$status = $_POST['status'];
												
												if($judul_buku!=null&&$pengarang!=null&&$lokasi_rak!=null&&$kota_terbit!=null&&$tahun_terbit!=null&&$status!=null)
													{
														$insert = "insert into member values
																	('','$judul_buku','$pengarang','$lokasi_rak','$kota_terbit','$tahun_terbit','$status');";
														$insert_query = mysql_query($insert);
														$_SESSION['action']="Tambah data $judul_buku";
													}
											?>
		    
											
	   </div>
	   <div id="kotakdialog" title="Tambah Data Member">
	   <form action="member.php" method="POST">
											<table>
											<tr><td>Nama&nbsp;&nbsp;&nbsp;&nbsp;</td><td><input size="30" title="Nama" type="text" name="judul_buku"></td></tr>
											<tr><td>Alamat&nbsp;&nbsp;&nbsp;&nbsp;</td><td><input size="30" title="Alamat" type="text" name="pengarang"></td></tr>
											<tr><td>JK&nbsp;&nbsp;&nbsp;&nbsp;</td><td><select title="Jenis Kelamin" name="lokasi_rak">
																							<option value="L">L</option>
																							<option value="P">P</option>
																				</select></td></tr>
											
											<tr><td>Agama&nbsp;&nbsp;&nbsp;&nbsp;</td><td><input size="30" title="Agama" type="text" name="kota_terbit"></td></tr>
											<tr><td>Pekerjaan&nbsp;&nbsp;&nbsp;&nbsp;</td><td><input size="30" title="Pekerjaan" type="text" name="tahun_terbit"></td></tr>
											<tr><td>Telephone&nbsp;&nbsp;&nbsp;&nbsp;</td><td><input title="Telephone" type="text" name="status"></td></tr>
											
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
																	  							
											
												<h3>Daftar Members</h3>
												<form action="member.php" method="POST">
												<table align="center">
												<br>
												<tr>
													Sort by <select name="sort">
											
														<option value="id_member">ID</option>
														<option value="nama">Nama</option>
														<option value="alamat">Alamat</option>
														<option value="jk">Jenis Kelamin</option>
														<option value="agama">Agama</option>
														<option value="pekerjaan">Pekerjaan</option>
														<option value="tlp">Telephone</option>
														
														</select>
													<select name="mode">
														<option value="asc">A - Z</option>
														<option value="desc">Z - A</option></select>
													<input type="submit" name="show" value="Tampil"></td>
												
												</tr>
												
												</table></form>
											    <br></br>
												<tr>
													<td>
											                                        
												<?php
													echo "<div align=\"center\"><table border=\"0\" align=\"center\">";
													echo "<tr><th>ID</th><th>Nama</th><th>Alamat</th><th>Jenis Kelamin</th><th>Agama</th><th>Pekerjaan</th><th>Telephone</th><th>Delete</th></tr>";
													$sort = $_POST['sort'];
													$mode = $_POST['mode'];
													
													if($_SESSION['tampil_member']==null)
														{
															$_SESSION['tampil_member'] = "select *from member;";
														}
													else if($sort==null&&$mode==null)
														{
															$_SESSION['tampil_member'];
														}
													else
														{
															$_SESSION['tampil_member'] =  "select *from member order by $sort $mode;";
														}
														
															$select = $_SESSION['tampil_member'];
															$select_query = mysql_query($select);
															while($hasil = mysql_fetch_array($select_query))
																{
																		$id_member = $hasil['id_member'];
																		$nama = $hasil['nama'];
																		$alamat = $hasil['alamat'];
																		$jk = $hasil['jk'];
																		$agama = $hasil['agama'];
																		$pekerjaan = $hasil['pekerjaan'];
																		$tlp = $hasil['tlp'];
																	echo "<tr><td><a title=\"edit $nama\" href=\"edit.member.php?no=$id_member\">$id_member</a></td>";
																																			
																	echo "<td>$nama</td><td>$alamat</td><td>$jk</td><td>$agama</td><td>$pekerjaan</td><td>$tlp</td>";
																																		
																	echo "<form action=\"delete_member.php\" method=\"POST\">";
																	echo "<td><center><input title =\"Hapus $nama\" type=\"image\" src=\"delete.ico\" alt=\"Submit button\"><input type=\"hidden\" name=\"no\" value=\"$id_member\"</center></td>";							
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
                                              <h3 class="t">TAMBAH DATA MEMBER</h3>
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
