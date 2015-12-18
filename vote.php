<?php
	include "koneksi.php";
	$hasil_vote = $_POST['poling'];
	if($hasil_vote!=null)
		{
			if($hasil_vote=="bagus")
				{
					$awal = "select *from poling";
					$awal_query = mysql_query($awal);
					while($hasil = mysql_fetch_array($awal_query))
						{
							$hasil2 = $hasil['bagus'];
						}
					$hasil2 = $hasil2+1;
					$insert_vote = "update poling set bagus = '$hasil2';";
				}
				
			else if($hasil_vote=="biasa")
				{
					$awal = "select *from poling";
					$awal_query = mysql_query($awal);
					while($hasil = mysql_fetch_array($awal_query))
						{
							$hasil2 = $hasil['biasa'];
						}
					$hasil2 = $hasil2+1;
					$insert_vote = "update poling set biasa = '$hasil2';";
				}
			else if($hasil_vote=="jelek")
				{
					$awal = "select *from poling";
					$awal_query = mysql_query($awal);
					while($hasil = mysql_fetch_array($awal_query))
						{
							$hasil2 = $hasil['jelek'];
						}
					$hasil2 = $hasil2+1;
					$insert_vote = "update poling set jelek = '$hasil2';";
				}
			$vote_query = mysql_query($insert_vote);
		}
	else
		{}
				
	$akhir = "select *from poling;";
	$akhir_query = mysql_query($akhir);
	while($hasil3 = mysql_fetch_array($akhir_query))
		{
			$tampil_1 = $hasil3['bagus'];
			$tampil_2 = $hasil3['biasa'];
			$tampil_3 = $hasil3['jelek'];
		}
	$tampil_4 = $tampil_1+$tampil_2+$tampil_3;
	$tampil_bagus = (($tampil_1*100)/$tampil_4);
	$tampil_biasa = (($tampil_2*100)/$tampil_4);
	$tampil_jelek = (($tampil_3*100)/$tampil_4);
?>