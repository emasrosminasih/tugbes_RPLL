<?php
session_start();
include "koneksi.php";

 
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
    <title>Home | Digital Library Perpustakaan Disnakertrans Jawa Barat</title>

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
                    
                </div>
                <div class="art-nav">
                	<div class="l"></div>
                	<div class="r"></div>
                	<ul class="art-menu">
                		
						<?php
							if($_SESSION['satu']=="terhubung")
								{
									echo "<li>";
									echo "<a href=\"#\"><span class=\"l\"></span><span class=\"r\"></span><span class=\"t\">Admin</span></a>";
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
                                          <h2 class="art-postheader">Terima kasih</h2>
                                          <div class="art-postcontent">
					      
					      
					       <div class="art-block">
                              <div class="art-block-body">
                                          <div class="art-blockheader">
                                              <h3 class="t">Data Peminjam</h3>
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
								session_start();
								include "koneksi.php";
								$tgl_skrg = date("Y-n-d");
								$id1 = $_POST['id1'];
								$id2 = $_POST['id2'];
								$id3 = $_POST['id3'];
								$jml_hari = $_POST['jml_hr'];
								$nama = $_SESSION['nama'];
								$query = "insert into peminjaman values ('','$nama','$tgl_skrg','','','');";
								mysql_query($query);
								$id_peminjaman = 0;
								$query_select = "select id from peminjaman where nama_peminjam='$nama' and tgl_pinjam='$tgl_skrg';";
								$query_select_jalan = mysql_query($query_select);
								while($data=mysql_fetch_array($query_select_jalan))
									{
										$id_peminjaman = $data['id'];
									}
								if(empty($id1))
								{}
								else
								{$query = "insert into peminjaman_buku values ('$id_peminjaman','$id1');";
								mysql_query($query);}

								if(empty($id2))
								{}
								else
								{$query = "insert into peminjaman_buku values ('$id_peminjaman','$id2');";
								mysql_query($query);}

								if(empty($id3))
								{}
								else
								{$query = "insert into peminjaman_buku values ('$id_peminjaman','$id3');";
								mysql_query($query);}

								echo "<form name='print' method='POST' action='print.php'>";
								echo "<label>Id Peminjaman : </label><input type='hidden' name='id_peminjaman' value='".$id_peminjaman."'> ".$id_peminjaman.'<br/>';
								echo "<label>Nama : </label><input type='hidden' name='nama' value='".$nama."'> ".$nama.'<br/>';
								echo "<label>Tanggal Pemijaman : </label><input type='hidden' name='tgl_skrng' value='".$tgl_skrng."'> ".$tgl_skrg.'<br/>';
								echo "<input type='submit' class='art-button' value='Print'>";
								echo "</form>" 
								
								
								?>
							
                                                         
								</div>
                                          
                                          		<div class="cleared"></div>
                                              </div>
                                          </div>
                          		<div class="cleared"></div>
                              </div>
                          </div>
					      
					      
					      
                                              
                                              <div class="cleared"></div>
                                              <div class="art-content-layout overview-table">
                                              	<div class="art-content-layout-row">
                                              		<div class="art-layout-cell">
                                                   
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
				
				
				
				
				
                        <div class="art-layout-cell art-sidebar1">
			<div class="art-block">
						  
                               <div class="art-block-body">
                                          <div class="art-blockheader">
										  
                                              <h3 class="t">System Date</h3>
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
																echo date("j/m/Y");
																echo "<div id=\"maclock\"></div>";
																?>
						       
                                          		<div class="cleared"></div>
                                              </div>
                                          </div>
                          		<div class="cleared"></div>
                              </div></div></div>
			      
			      
			      <div class="art-layout-cell art-sidebar1">
			
			<?php
			if($_SESSION['user']!='terhubung')
			{
				echo "<div class=\"art-block\">
						  
                               <div class=\"art-block-body\">
                                          <div class=\"art-blockheader\">
										  
                                              <h3 class=\"t\">Login Member</h3>
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
					<form method=\"POST\" action=\"cekuser.php\">
						<div>
						<table>
						<tr>
							<td><label for=\"name\">Username</label></td>	
							<td><input type=\"text\" name=\"username\" id=\"name\" /></td>
						</tr>
						<tr>
							<td><label for=\"email\">Password</label></td>
							<td><input type=\"password\" name=\"password\" id=\"email\" /></td>
						</tr>
						<tr>
						    <td><input type=\"submit\" class ='art-button' id=\"submit\" value=\"Login\" /></td>
						    <td><input type=\"button\" class ='art-button' id=\"buka\" value=\"registrasi\"/></td>
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
														  <tr><td colspan="3" align="center" valign="bottom"><img src="poling.png" width="20" height="<?php echo $tampil_jelek; ?>" align="bottom" title="Tidak <?php settype($tampil_jelek, "integer"); echo $tampil_jelek; ?>%"></img>
														  <img src="poling.png" width="20" height="<?php echo $tampil_biasa; ?>" align="bottom" title="Membantu <?php settype($tampil_biasa, "integer"); echo $tampil_biasa; ?>%"></img>
														  <img src="poling.png" width="20" height="<?php echo $tampil_bagus; ?>" align="bottom" title="Sangat Membantu <?php settype($tampil_bagus, "integer"); echo $tampil_bagus; ?>%"></img></td>
														  </tr>
														 
                                                          <tr><td colspan="3">Apakah web ini membantu anda dalam mencari data buku</td></tr>
														  <tr><td><input type="radio" name="poling" value="jelek">Tidak</td>
														  <td><input type="radio" name="poling" value="biasa">Membantu</td><td><input type="radio" name="poling" value="bagus">Sangat</td>
														  <td><input class="art-button" type="submit" name="vote" value="Vote" /></td>
                                                          </tr></table>
                                                          </form></div>
                                          
                                          		<div class="cleared"></div>
                                              </div>
                                          </div>
                          		<div class="cleared"></div>
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
