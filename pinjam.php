<?php
session_start();
	
			include "koneksi.php";
			include "vote.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US" xml:lang="en">
<head>
<link rel="shortcut icon" href="./icon.png" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="development-bundle/themes/ui-lightness/ui.all.css">
    <script type="text/javascript" src="development-bundle/jquery-1.3.2.js"></script>
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
    <script type="text/javascript" src="search.js"></script>

	<!--
    Created by Artisteer v3.0.0.32906
    Base template (without user's data) checked by http://validator.w3.org : "This page is valid XHTML 1.0 Transitional"
    -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Online Public Access Catalogue</title>

    <link rel="stylesheet" href="style.css" type="text/css" media="screen" />
    <!--[if IE 6]><link rel="stylesheet" href="style.ie6.css" type="text/css" media="screen" /><![endif]-->
    <!--[if IE 7]><link rel="stylesheet" href="style.ie7.css" type="text/css" media="screen" /><![endif]-->
<style type="text/css">
/*---------- balon tips -----------*/
a.bt{
position:relative;
z-index:24;
color:#3CA3FF;
font-weight:bold;
text-decoration:none;
}
a.bt:hover span.balontips{
display:block;
position:absolute;
top:0px; left:0;
padding: 15px 0 0 0;
width:200px;
color: #993300;
text-align: center;
filter: alpha(opacity:90);
KHTMLOpacity: 0.70;
MozOpacity: 0.70;
opacity: 0.70;
}
a.bt:hover span.atas{
display: block;
padding: 190px 8px 0;
background: url(a1b.gif) no-repeat top;
}


a.bt2{
position:relative;
z-index:24;
color:#3CA3FF;
font-weight:bold;
text-decoration:none;
}
a.bt2:hover span.balontips{
display:block;
position:absolute;
top:0px; left:0;
padding: 15px 0 0 0;
width:200px;
color: #993300;
text-align: center;
filter: alpha(opacity:90);
KHTMLOpacity: 0.70;
MozOpacity: 0.70;
opacity: 0.70;
}
a.bt2:hover span.atas{
display: block;
padding: 190px 8px 0;
background: url(b2a.gif) no-repeat top;
}

a.bt3{
position:relative;
z-index:24;
color:#3CA3FF;
font-weight:bold;
text-decoration:none;
}
a.bt3:hover span.balontips{
display:block;
position:absolute;
top:0px; left:0;
padding: 15px 0 0 0;
width:200px;
color: #993300;
text-align: center;
filter: alpha(opacity:90);
KHTMLOpacity: 0.70;
MozOpacity: 0.70;
opacity: 0.70;
}
a.bt3:hover span.atas{
display: block;
padding: 190px 8px 0;
background: url(d2s.gif) no-repeat top;
}

a.bt4{
position:relative;
z-index:24;
color:#3CA3FF;
font-weight:bold;
text-decoration:none;
}
a.bt4:hover span.balontips{
display:block;
position:absolute;
top:0px; left:0;
padding: 15px 0 0 0;
width:200px;
color: #993300;
text-align: center;
filter: alpha(opacity:90);
KHTMLOpacity: 0.70;
MozOpacity: 0.70;
opacity: 0.70;
}
a.bt4:hover span.atas{
display: block;
padding: 190px 8px 0;
background: url(e7d.gif) no-repeat top;
}

a.bt5{
position:relative;
z-index:24;
color:#3CA3FF;
font-weight:bold;
text-decoration:none;
}
a.bt5:hover span.balontips{
display:block;
position:absolute;
top:0px; left:0;
padding: 15px 0 0 0;
width:200px;
color: #993300;
text-align: center;
filter: alpha(opacity:90);
KHTMLOpacity: 0.70;
MozOpacity: 0.70;
opacity: 0.70;
}
a.bt5:hover span.atas{
display: block;
padding: 190px 8px 0;
background: url(s1a.gif) no-repeat top;
}

/*---------- balon tips END-----------*/
</style>

</head>
<body onload='proses()'>
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
                			<a class="active" title="Online Public Access Catalogue" href="index.php"><span class="l"></span><span class="r"></span><span class="t">OPAC</span></a>
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
									echo "<a href=\"#\"><span class=\"l\"></span><span class=\"r\"></span><span class=\"t\">Admin</span></a>";
									echo "<ul>";
									echo "<li><a href=\"catalogue.admin.php\">Catalogue</a>";
									echo "<li><a href=\"member.php\">Members</a>";
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
                            <div class="art-post">
                            <div class="art-post-body">
                              <div class="art-post-inner art-article">
                                <div class="art-post">
                                  <div class="art-post-body">
                                    <div class="art-post-inner art-article">
                                      <center>
                                        <img title="#" src="opac.png" />
                                        <form name="form1">
                                          Keyword
                                          <input type="text" id="keyword" size="80" title="Masukan Keyword Pencarian" />
                                          <select name="pilih" id="database" onchange='proses()' title="Pilih Database">
                                            <option value="id_buku">ID</option>
                                            <option value="judul_buku">Judul Buku</option>
                                            <option value="pengarang">Pengarang</option>
                                            <option value="penerbit">Penerbit</option>
                                          </select>
                                        </form>
                                      </center>
                                      <div id="hasil">
                                        <center>
                                        </center>
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
                                      
                                  </div>
                                  <div class="cleared"></div>
                                </div>
                              </div>
                            </div>
                            </div>
                          </div>
                         
                          		<div class="cleared"></div>
                            </div>
                          </div>
	
			  
			<?php
			 if($_SESSION['satu']=='terhubung')
			{
				
			echo "<div class=\"art-block\">
                              <div class=\"art-block-body\">
                                          <div class=\"art-blockheader\">
                                              <h3 class=\"t\">Form peminjaman buku</h3>
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
					      
					      Masukan ID buku yang ingin di pinjam( Maksimal 5 buku )
					      <br/>
					      <form method=\"POST\" action=\"peminjaman.php\">
					      <table>
						<tr>
							<td><label for=\"name\">ID Member</label></td>	
							<td><input type=\"text\" name=\"id11\" id=\"#\" /></td>
						</tr>
						
						<tr>
							<td><label for=\"name\">ID Buku</label></td>	
							<td><input type=\"text\" name=\"id1\" id=\"#\" /></td>
						</tr>
						
						<tr>
							<td><label for=\"name\">ID Buku</label></td>	
							<td><input type=\"text\" name=\"id2\" id=\"#\" /></td>
						</tr>
						<tr>
							<td><label for=\"name\">ID Buku</label></td>	
							<td><input type=\"text\" name=\"id3\" id=\"#\" /></td>
						</tr>
						<tr>
							<td><label for=\"name\">ID Buku</label></td>	
							<td><input type=\"text\" name=\"id4\" id=\"#\" /></td>
						</tr>
						<tr>
							<td><label for=\"name\">ID Buku</label></td>	
							<td><input type=\"text\" name=\"id5\" id=\"#\" /></td>
						</tr>
						<tr>
						    <td><input type=\"submit\" class ='art-button' id=\"submit\" value=\"Pinjam\" /></td>
						</tr>  
						   </table>
						  </table> 
						
                                                         "                                                      
							?>
						
						
						<?php
						
						echo "
		                                       <div class=\"cleared\"></div>
                                              </div>
                                          </div>
                          		<div class=\"cleared\"></div>
                              </div>
                          </div>";
			  }
			  ?>

                      </div>
                    </div>
                </div>

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