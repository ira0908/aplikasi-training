<?php
	include ("configuration/configuration.php");
	$query=mysql_query("select* from Jadwal_Training");

?>

<html>
	<head>
	</head>

	<body>
		<table bgcolor='' width='62%' border='1' cellpadding='0'>
			<tr>
				<td rowspan='2' align='center'>Kode Training</td>
				<td colspan='2' align='center'>Tanggal</td>
				<td colspan='2' align='center'>Durasi</td>
				<td rowspan='2' align='center'>Waktu Training</td>
				<td rowspan='2' align='center'>Maksimal Peserta</td>
				<td rowspan='2' align='center'>Harga Training</td>
				<td rowspan='2' align='center'>Lokasi Training</td>
			</tr>
			<tr align='center'>
				<td>mulai</td>
				<td>selesai</td>
				<td>jam</td>
				<td>hari</td>
			</tr>
			<tr>
				<?php
					while($array=mysql_fetch_array($query))
					{
				?>
					<tr>
						<td>
							<?php echo $array['kode_paket_training'];?>
						</td>
						<td>
							<?php echo $array['tanggal_mulai'];?>
						</td>
						<td>
							<?php echo $array['tanggal_selesai'];?>
						</td>
						<td>
							<?php echo $array['durasi_jam'];?>
						</td>
						<td>
							<?php echo $array['durasi_hari'];?>
						</td>
						<td>
							<?php echo $array['waktu_training'];?>
						</td>
						<td>
							<?php echo $array['maksimal_peserta'];?>
						</td>
						<td>
							<?php echo $array['harga_training'];?>
						</td>
						<td>
							<?php echo $array['lokasi_training'];?>
						</td>
					</tr>
				<?php	
					}
				?>
			</tr>
		</table>
	</body>
</html>
