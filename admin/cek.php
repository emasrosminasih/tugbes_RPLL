<?php
	include "../koneksi.php";
	session_start();
// jangan lupa untuk memasukkan fungsi session_start setiap akan
// meregistrasi atau mengakses session
	if(empty($_POST['username']))
		{
			$username = "0";
		}
	else if(empty($_POST['password']))
		{
			$password = "0";
		}
	else
		{
			$username = $_POST['username'];
			$password = $_POST['password'];
			$validasi = $_POST['validasi'];
		}

	$select = "select *from admin where username='$username' and password='$password';";
	$select_query = mysql_query($select);
	while($hasil2 = mysql_fetch_array($select_query))
		{
			$nama = $hasil2['nama'];
		}
	$hasil = mysql_num_rows($select_query);
	if(($hasil==1)&&($validasi==$_SESSION['security_code']))
		{
			$cek_status = "select id from admin where username='$username' and password='$password';";
			$cek_query = mysql_query($cek_status);
			while($hasil3 = mysql_fetch_array($cek_query))
				{
					$status = $hasil3['status'];
				}
			if($status=="aktif")
				{
					?><script language = "Javascript">alert('Account ini sedang aktif');
					document.location='index.php'</script><?php
				}
			else
				{
					$status_ganti = mysql_query($query_status);
					$_SESSION['satu']="terhubung";
					$_SESSION['nama']=$nama;
					?><script language = "Javascript">alert('Selamat Datang di Website Perpustakaan SMP Negeri 1 Cariu <?php echo $nama; ?>');
					document.location='../home.php'</script><?php
				}
		}
	else if(($hasil==1)&&($validasi!=$_SESSION['security_code']))
		{
			?><script language = "Javascript">alert('Validasi Gagal');
			document.location='index.php'</script><?php
		}
	else
		{	
			?><script language = "Javascript">alert('Account tidak ditemukan');
			document.location = 'index.php'</script><?php
		}
?>