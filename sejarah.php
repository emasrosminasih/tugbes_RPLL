<?php
	session_start();
	include "koneksi.php";
	include "vote.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US" xml:lang="en">
<head>
<link rel="shortcut icon" href="./icon.png" type="image/x-icon" />
    <!--
    Created by Artisteer v3.0.0.32906
    Base template (without user's data) checked by http://validator.w3.org : "This page is valid XHTML 1.0 Transitional"
    -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Home | Digital Library Perpustakaan SMP Negeri 1 Cariu</title>

    <link rel="stylesheet" href="style.css" type="text/css" media="screen" />
    <!--[if IE 6]><link rel="stylesheet" href="style.ie6.css" type="text/css" media="screen" /><![endif]-->
    <!--[if IE 7]><link rel="stylesheet" href="style.ie7.css" type="text/css" media="screen" /><![endif]-->
<link rel="stylesheet" type="text/css" href="development-bundle/themes/ui-lightness/ui.all.css">
    <script type="text/javascript" src="development-bundle/jquery-1.3.2.js"></script>
	<script type="text/javascript" src="maclock.js"></script>
    <script type="text/javascript" src="development-bundle/ui/ui.core.js"></script>
    <script type="text/javascript" src="development-bundle/ui/ui.dialog2.js"></script>
    <script type="text/javascript" src="development-bundle/ui/ui.draggable.js"></script>

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
    
    <script type="text/javascript" src="script.js"></script>
</head>
<body onload="startTime()">
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
                			<a href="about.php" class="active"><span class="l"></span><span class="r"></span><span class="t">About</span></a>
							<ul>
                				<li><a href="sejarah.php">Sejarah Terbentuk</a>
                				</li>
                				<li><a href="visi.php">Visi</a></li>
                				<li><a href="#">Misi</a></li>
							</ul>
                		</li>
						<?php
							if($_SESSION['satu']=="terhubung")
								{
									echo "<li>";
									echo "<a href=\"#\"><span class=\"l\"></span><span class=\"r\"></span><span class=\"t\">Admin</span></a>";
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
                                          
                                          <div class="art-postcontent">
                                            <p><span class="art-postheader"><a href="admin"></a></span><h1>SEJARAH SMP NEGERI 1 CARIU</h1></p>
										  
										  <p align ="justify">Sejarah ini didirikan pada tahun 1982 oleh Bapak Hamzah dan yang menjabat kepala SMP Negeri 1 Cariu Kabupaten Bogor yang pertama adalah Soma Al Ardisoma. Pada saat pendirian menempati SD Cariu III yang memiliki 6 ruang belajar Sehingga SMP Negeri 1 Cariu untuk belajar mengajar pada siang hari. Pada tahun 1983 sekolah pindah ke lokasi jalan Babakanraden Desa Babakanraden Kec.Cariu Kab.Bogor hingga sekarang.
</p>
                                              
                                              <div class="cleared"></div>
                                              <div class="art-content-layout overview-table">
                                              	<div class="art-content-layout-row">
                                              		<div class="art-layout-cell">
                                                    <div class="overview-table-inner">
                                              	      
                                                     </div>
                                              		</div><!-- end cell -->
                                              		<div class="art-layout-cell">
                                                  <div class="overview-table-inner">
                                              		  
                                       				  </div>
                                              		</div><!-- end cell -->
                                              		<div class="art-layout-cell">
                                                  <div class="overview-table-inner">
                                              		  
                                                      </div>
                                              		</div><!-- end cell -->
                                              	</div><!-- end row -->
                                              </div><!-- end table -->
                                                  
</div>
                                          <div class="cleared"></div>
                          </div>
                          
                          		<div class="cleared"></div>
                              </div>
                          </div>
                          
                          <div class="cleared"></div>
                        </div>
				
				
				<div id="kotakdialog" title="Registrasi">
	   <form action="tambahuser.php" method="POST">
											<table>
											<tr><td>Username&nbsp;&nbsp;&nbsp;&nbsp;</td><td><input size="30"  type="text" name="username"></td></tr>
											<tr><td>Password&nbsp;&nbsp;&nbsp;&nbsp;</td><td><input size="30"  type="Password" name="password"></td></tr>
											<tr><td>Nama&nbsp;&nbsp;&nbsp;&nbsp;</td><td><input size="30"  type="text" name="nama"></td></tr>
											<tr><td>Email&nbsp;&nbsp;&nbsp;&nbsp;</td><td><input size="30" type="text" name="email"></td></tr>
											<tr><td>Alamat&nbsp;&nbsp;&nbsp;&nbsp;</td><td><input size="30"  type="text" name="alamat"></td></tr>
											<tr><td>Temapt&nbsp;&nbsp;&nbsp;&nbsp;</td><td><input size="30"  type="text" name="tempat"></td></tr>
											<tr><td>Tanggal&nbsp;&nbsp;&nbsp;&nbsp;</td><td><input size="30" type="text" name="tanggal"></td></tr>
											
											<tr><td>Pekerjaan&nbsp;&nbsp;&nbsp;&nbsp;</td><td><input size="30"  type="text" name="pekerjaan"></td></tr>
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
				
				
                        <div class="art-layout-cell art-sidebar1">
			<div class="art-block">
						  
                               <div class="art-block-body">
                                          <div class="art-blockheader">
										  
                                              <h3 class="t"> System Date</h3>
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
                                                            <?php
																echo date("d/m/Y");
																echo "<div id=\"maclock\"></div>";
																?>
						       
                                          		<div class="cleared"></div>
                                              </div>
                                          </div>
                          		<div class="cleared"></div>
                              </div></div></div>
			      
			      
			      <div class="art-layout-cell art-sidebar1">
			
			
			      
			      <?php
			    
			    if($_SESSION['user']=='terhubung')
			{
				echo "<div class=\"art-block\">
						  
                               <div class=\"art-block-body\">
                                          <div class=\"art-blockheader\">
										  
                                              <h3 class=\"t\">Selamat Datang</h3>
                                          </div>
                                          <div class=\"art-blockcontent\">
                                              <div class=\"art-blockcontent-tl\"></div>
                                              <div class=\"art-blockcontent-tr\"></div>
                                              <div class=\"art-blockcontent-bl\"></div>
                                              <div class=\"art-blockcontent-br\"></div>
                                              <div class=\"art-blockcontent-tc\"></div>
                                              <div class=\"art-blockcontent-bc\"></div>
                                              <div class=\"art-blockcontent-cl\"></div>
                                              <div class=\"art-blockcontent-cr\"></div>
                                              <div class=\"art-blockcontent-cc\"></div>
                                              <div class=\"art-blockcontent-body\">
                                                          <div>
					      <div>
					<form method=\"POST\" action=\"keluar.php\">
						<div>
						<table>
						<tr>";
						?>
						
						<?php
						echo $_SESSION['nama'];
						
						?>
						
						<?php
						
						echo "
						</tr>
						<tr>
						    <td><input type=\"submit\" class ='art-button' id=\"submit\" value=\"Logout\" /></td>
						</tr>  
						
						   </table>
						</div>
					 </form>
					 
					      <div class=\"cleared\"></div>
                                              </div>

						       
                                          		<div class=\"cleared\"></div>
                                              </div>
                                          </div>
                          		<div class=\"cleared\"></div>
                              </div></div></div>";
		}
			      ?>
						
                          <div class="art-block"></div>
						 
			
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
														 
                                          
                                          		<div class="cleared"></div>
                                              </div>
                                          </div>
                          		<div class="cleared"></div>
                              </div>
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
                                                                
                                          		
                          <div class="cleared"></div>
                        </div>
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
                            <p><a target="_blank" href="#">TugasBesar</a> | <a target="_blank" href="#">APDP</a> | <a target="_blank" href="#">1137050076</a></p><p>Copyright IFUIN &copy; 2013. All Rights Reserved.</p>
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
