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
    <title>Home | Digital Library Perpustakaan SMP Megeri 1 Cariu</title>

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


								$tgl_skrg = date("Y-m-d");
								$id1 = $_POST['id1'];
								$id2 = $_POST['id2'];
								$id3 = $_POST['id3'];
								$id4 = $_POST['id4'];
								$id5 = $_POST['id5'];
								$id11 = $_POST['id11'];
								$jml_hari = $_POST['jml_hr'];
								$besok = mktime(0, 0,  date("Y"), date("m"), date("d")+7);
								$tgl_haruskembali = date("Y-m-d",$besok)."<br>";
								$nama = $_SESSION['peminjam'];
								$query = "insert into peminjaman values ('','$nama','$tgl_skrg','$tgl_haruskembali','','','belum_kembali','');";
								mysql_query($query);
								$id_peminjaman = mysql_insert_id();
								
								if(empty($id1))
								{}
								else
								{$query = "insert into peminjaman_buku values ('$id_peminjaman','$id1','belum_kembali');";
								mysql_query($query);}

								if(empty($id2))
								{}
								else
								{$query = "insert into peminjaman_buku values ('$id_peminjaman','$id2','belum_kembali');";
								mysql_query($query);}

								if(empty($id3))
								{}
								else
								{$query = "insert into peminjaman_buku values ('$id_peminjaman','$id3','belum_kembali');";
								mysql_query($query);}
								if(empty($id4))
								{}
								else
								{$query = "insert into peminjaman_buku values ('$id_peminjaman','$id4','belum_kembali');";
								mysql_query($query);}

								if(empty($id5))
								{}
								else
								{$query = "insert into peminjaman_buku values ('$id_peminjaman','$id5','belum_kembali');";
								mysql_query($query);}
								

								echo "<form name='print' method='POST' action='print.php'>";
								echo "<label>Id Peminjaman : </label><input type='hidden' name='id_peminjaman' value='".$id_peminjaman."'> ".$id_peminjaman.'<br/>';
								echo "<label>Nama : </label><input type='hidden' name='nama' value='".$nama."'> ".$nama.'<br/>';
								echo "<label>Tanggal Peminjaman : </label><input type='hidden' name='tgl_skrg' value='".$tgl_skrg."'> ".$tgl_skrg.'<br/>';
								echo "<label>Tanggal Harus Kembali : </label><input type='hidden' name='tgl_haruskembali' value='".$tgl_haruskembali."'> ".$tgl_haruskembali.'<br/>';
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
                                          
                                          
                <div class="art-footer">
                    <div class="art-footer-t"></div>
                    <div class="art-footer-l"></div>
                    <div class="art-footer-b"></div>
                    <div class="art-footer-r"></div>
                    <div class="art-footer-body">
                        <div class="art-footer-text">
                            <p><a target="_blank" href="#">TugasBesar</a> | <a target="_blank" href="#">APDP</a> | <a target="_blank" href="#">1137050076</a> </p><p>Copyright IFUIN &copy; 2015.</p>
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
