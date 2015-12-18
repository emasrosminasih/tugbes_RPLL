<?php
	$host = "localhost";
	$username = "root";
	$password = "";
	$db = "perpustakaan";
	$koneksi = mysql_connect($host,$username,$password);
	$database = mysql_select_db($db,$koneksi);
?>