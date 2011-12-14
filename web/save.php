<?php
	include "config.php";
	
	$nama			=$_POST["nama"];
	$alamat			=$_POST["alamat"];
	$TanggalLahir	=$_POST["TanggalLahir"];
	$email			=$_POST["email"];
	$telp			=$_POST["telp"];
	$PaketTraining	=$_POST["PaketTraining"];
	$TanggalTraining=$_POST["TanggalTraining"];
	$pembayaran		=$_POST["pembayaran"];
	$keterangan		=$_POST["keterangan"];
	
	$query = @mysql_query("INSERT INTO Pendaftaran_Training VALUES '$nama','$alamat','$TanggalLahir','$email','$telp','$PaketTraining','$TanggalTraining','$pembayaran','$keterangan'")
?>
