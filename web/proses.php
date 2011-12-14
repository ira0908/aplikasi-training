<?php
include ('configuration/configuration.php');

$no_pendaftaran = $_POST['no_pendaftaran'];
$nama_peserta = $_POST['nama_peserta'];
$paket_training = $_POST['paket_training'];
$tanggal_pembayaran = $_POST['tanggal_pembayaran'];
$nominal = $_POST['nominal'];
$pembayaran = $_POST['pembayaran'];
$dari_rekening = $_POST['dari_rekening'];
$keterangan = $_POST['keterangan'];
$input=mysql_query("insert into Konfirmasi_Pembayaran values('','$no_pendaftaran','$nama_peserta','$paket_training','$tanggal_pendaftaran','$nominal','$pembayaran','$dari_rekening','$keterangan')")or die("salah bego");
if($input){
	echo"<script>alert('Data berhasil di simpan');location='listKonfirmasiPembayaran.php';</script>";
	}else{
	echo"<script>location:javascript.history.go(-1);</script>";	
		}
?>
