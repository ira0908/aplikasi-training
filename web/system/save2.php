<?php
	include ("../configuration/configuration.php");
	
	$kode	=$_POST["kode_paket_training"];
	$nama	=$_POST["nama_paket_training"];
	
	$save	= mysql_query("insert into Paket_Training (kode_paket_training,nama_paket_training)values($kode,'$nama')");
?>
