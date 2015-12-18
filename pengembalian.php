<?php
	session_start();
	include "koneksi.php";
	include "vote.php";


 // Set timezone
  date_default_timezone_set("UTC");

  // Time format is UNIX timestamp or
  // PHP strtotime compatible strings
  function dateDiff($time1, $time2, $precision = 6) {
    // If not numeric then convert texts to unix timestamps
    if (!is_int($time1)) {
      $time1 = strtotime($time1);
    }
    if (!is_int($time2)) {
      $time2 = strtotime($time2);
    }

    // If time1 is bigger than time2
    // Then swap time1 and time2
    if ($time1 > $time2) {
      $ttime = $time1;
      $time1 = $time2;
      $time2 = $ttime;
    }

    // Set up intervals and diffs arrays
    $intervals = array('year','month','day','hour','minute','second');
    $diffs = array();

    // Loop thru all intervals
    foreach ($intervals as $interval) {
      // Set default diff to 0
      $diffs[$interval] = 0;
      // Create temp time from time1 and interval
      $ttime = strtotime("+1 " . $interval, $time1);
      // Loop until temp time is smaller than time2
      while ($time2 >= $ttime) {
 $time1 = $ttime;
 $diffs[$interval]++;
 // Create new temp time from time1 and interval
 $ttime = strtotime("+1 " . $interval, $time1);
      }
    }

    $count = 0;
    $times = array();
    // Loop thru all diffs
    foreach ($diffs as $interval => $value) {
      // Break if we have needed precission
      if ($count >= $precision) {
 break;
      }
      // Add value and interval 
      // if value is bigger than 0
      if ($value > 0) {
 // Add s if value is not 1
 if ($value != 1) {
   $interval .= "s";
 }
 // Add value and interval to times array
 $times[] = $value . " " . $interval;
 $count++;
      }
    }

    // Return string with times
    return implode(", ", $times);
  }
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
                    
                </div>
                <div class="art-nav">
                	<div class="l"></div>
                	<div class="r"></div>
                	<ul class="art-menu">
                		
						<li>
                			<a href="home.php" class="active"><span class="l"></span><span class="r"></span><span class="t">Home</span></a>
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
                                          <h2 class="art-postheader">Peminjaman Buku</h2>
                                          <div class="art-postcontent">
					  <form name="#" method="POST" action="yoyo.php">
					  <?php
					$id1=$_POST['id1'];
					$id2=$_POST['id2'];
					$id3=$_POST['id3'];		
					$id4=$_POST['id4'];
					$id5=$_POST['id5'];	
					$id11=$_POST['id11'];	
					echo "<input type='hidden' name='id1' value='$id1'>";
					echo "<input type='hidden' name='id2' value='$id2'>";
					echo "<input type='hidden' name='id3' value='$id3'>";
					echo "<input type='hidden' name='id4' value='$id4'>";
					echo "<input type='hidden' name='id5' value='$id5'>";
					echo "<input type='hidden' name='id11' value='$id11'>";
					$query="select *from buku where id_buku ='$id1' or id_buku ='$id2' or id_buku ='$id3' or id_buku ='$id4' or id_buku ='$id5';";
					$query_jalan = mysql_query($query);
					
					echo "<table border=\"0\" align=\"center\"><tr><th>ID</th><th>Kategori</th><th>Pengarang</th><th>Judul Buku</th><th>Penerbit</th><th>Kota Terbit</th><th>Tahun Terbit</th><th>Lokasi Rak</th><th>Eksemplar</th></tr>";
					while($hasil = mysql_fetch_array($query_jalan))
{
		$id = $hasil['id_buku'];
		$id_kategori = $hasil['id_kategori'];
		$pengarang = $hasil['pengarang'];
		$judul_buku = $hasil['judul_buku'];
		$penerbit = $hasil['penerbit'];
		$kota_terbit = $hasil['kota_terbit'];
		$tahun_terbit = $hasil['tahun_terbit'];
		$lokasi_rak = $hasil['lokasi_rak'];
		$status = $hasil['status'];
		
			echo "<tr><td>$id</td><td>";
			$select_kategori = "select kategori from kategori where id_kategori = '$id_kategori';";
			$select_kategori_jalan = mysql_query($select_kategori);
			while($hasil = mysql_fetch_array($select_kategori_jalan))
			{
				$nama_kategori = $hasil['kategori'];
			}
			echo "$nama_kategori</td><td>$pengarang</td><td>$judul_buku</td><td>$penerbit</td><td>$kota_terbit</td><td>$tahun_terbit</td><td>$lokasi_rak</td><td>";
			if($status<1)
		{
			echo "habis</td>";
		}
	else
		{
			echo "$status buku</td>";
		}
	

}
							echo "</table>";  
					  
					  
					  
					  ?>
					 <br/><br/><br/>
					Nama Peminjam : 
					<?php
					$query="select nama_peminjam, tgl_pinjam, tgl_hrskembali from peminjaman where id_peminjaman = '$id11';";
					$query_jalan=mysql_query($query);
					while($hasil=mysql_fetch_array($query_jalan))
					{
					$nama=$hasil['nama_peminjam'];
					$tgl=$hasil['tgl_pinjam'];
					$tgl_kembali=$hasil['tgl_hrskembali'];
					}
					$tgl_sekarang=date("Y-m-d");
					echo "<input type='hidden' name='tgl_pengembalian' value='$tgl_sekarang'>";
					echo $nama."<br>";
					echo "Tanggal Peminjaman :". $tgl."<br>";
					echo "Tanggal Harus Kembali :".$tgl_kembali."<br>";
					$status= (int)dateDiff($tgl_sekarang, $tgl_kembali);
					echo "keterlambatan : ".($status)." hari<br>";
					echo "denda : ".($status*1000);
					$denda=$status*1000;
					echo "<input type='hidden' name='denda' value='$denda'>";
					?>
					
						<tr><br><br>
						    <td><input type="submit" class ='art-button' id="submit" value="Kembali" /></td>	
						</tr></br></br> 
						</form>



					  
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
						  
						  
						  
	   
                          <div class="art-block">
                              
                          </div>
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
