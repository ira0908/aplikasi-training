<?php
	include ("../configuration/configuration.php");
	
	$nama				=$_POST["nama"];
	$alamat				=$_POST["alamat"];
	$TanggalLahir		=$_POST["TanggalLahir"];
	$pekerjaan			=$_POST["pekerjaan"];
	$email				=$_POST["email"];
	$telp				=$_POST["telp"];
	$status				=$_POST["status"];
	$Perguruan_Tinggi	=$_POST["Perguruan_Tinggi"];
	$jurusan			=$_POST["jurusan"];
	$semester			=$_POST["semester"];
	$PaketTraining		=$_POST["PaketTraining"];
	$TanggalTraining	=$_POST["TanggalTraining"];
	$pembayaran			=$_POST["pembayaran"];
	$keterangan			=$_POST["keterangan"];
	
	if($status=="mahasiswa")
	{
		if($Perguruan_Tinggi!=null && $jurusan!=null && $semester!=null)
		{
			$query1 = mysql_query("INSERT INTO Pendaftaran_Training (nama,alamat,tanggal_lahir,pekerjaan,email,no_telpon,status,Perguruan_Tinggi,jurusan,semester,paket_training,id_jadwal,pembayaran_dp,keterangan)VALUES ('$nama','$alamat','$TanggalLahir','$pekerjaan','$email','$telp','$status','$Perguruan_Tinggi','$jurusan','$semester','$PaketTraining','$TanggalTraining','$pembayaran','$keterangan')");
		}
		else
		{
			echo
				"
					<script>
						alert('Perguruan Tinggi, Jurusan Dan Semester Harus Diisi');
						location='../entryPendaftaranTraining.php';
					</script>
				";
		}
	}
	else
	{
		$query2 = mysql_query("INSERT INTO Pendaftaran_Training (nama,alamat,tanggal_lahir,pekerjaan,email,no_telpon,status,Perguruan_Tinggi,jurusan,semester,paket_training,id_jadwal,pembayaran_dp,keterangan)VALUES ('$nama','$alamat','$TanggalLahir','$pekerjaan','$email','$telp','$status','$Perguruan_Tinggi','$jurusan','$semester','$PaketTraining','$TanggalTraining','$pembayaran','$keterangan')");
			Echo
				"
					<script>
						alert('Thanks');
						location='../enrtyPendaftaraTraining.php';
					</script>
				";
	}
?>
