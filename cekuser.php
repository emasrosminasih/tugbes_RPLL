<?php
	include "koneksi.php";
	session_start();
	
// jangan lupa untuk memasukkan fungsi session_start setiap akan
// meregistrasi atau mengakses session
	$username = $_POST['username'];
	$password = $_POST['password'];

	$select = "select nama from member where username='$username' and passwoord='$password';";
	$select_query = mysql_query($select);
	while($hasil2 = mysql_fetch_array($select_query))
		{
			$nama = $hasil2['nama'];
		}
	$hasil = mysql_num_rows($select_query);
	if($hasil==1)
		{
			
				$_SESSION['user']="terhubung";
				$_SESSION['nama']=$nama;
				?><script language = "Javascript">alert('Selamat Datang di Perpustakaan SMP Negeri 1 Cariu <?php echo $nama; ?>');
				document.location='home.php'</script><?php
				}
	else
		{	
			?><script language = "Javascript">alert('Account tidak ditemukan');
			document.location = 'home.php'</script><?php
		}
?>