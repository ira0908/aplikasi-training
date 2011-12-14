<?php
	include ("../configuration/configuration.php");
	
	$nama			=$_POST["nama"];
	$alamat			=$_POST["alamat"];
	$TanggalLahir	=$_POST["TanggalLahir"];
	$pekerjaan		=$_POST["pekerjaan"];
	$email			=$_POST["email"];
	$telp			=$_POST["telp"];
	$PaketTraining	=$_POST["PaketTraining"];
	$TanggalTraining=$_POST["TanggalTraining"];
	$pembayaran		=$_POST["pembayaran"];
	$keterangan		=$_POST["keterangan"];
	
	$query = mysql_query("INSERT INTO Pendaftaran_Training (nama,alamat,tanggal_lahir,pekerjaan,email,no_telpon,paket_training,id_jadwal,pembayaran_dp,keterangan)VALUES ('$nama','$alamat','$TanggalLahir','$pekerjaan','$email','$telp','$PaketTraining','$TanggalTraining','$pembayaran','$keterangan')");
?>
