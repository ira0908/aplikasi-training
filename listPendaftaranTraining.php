<?php
	include("configuration/configuration.php");
	$tanggal = date("Y-m-d");
?>
<html>
 <head>
    <title></title>
 </head>
<body>
  	 Search by paket training 
		<select>
			<?php
				$que=	mysql_query("SELECT * FROM Paket_Training");
					
				while($a	=	mysql_fetch_array($que))
				{
			?>
				<option>
					<?php
						$b=$a['nama_paket_training'];
						$c=$a['id'];
						echo $b;
					?>
				</option>
			<?php
				}
			?>
		</select>
<table border='1'>
    <tr>
	     <td>No Pendaftaran</td>
		<td>Tanggal Pendaftaran</td>
		<td>Nama</td>
		<td>Alamat</td>	
		<td>Tanggal Lahir</td>
		<td>Pekerjaan</td>
		<td>Email</td>
		<td>No Telephone</td>
		<td>Paket Training</td>
		<td>Tanggal Training</td>
		<td>Pembayaran OP</td>
		<td>Keterangan</td>
	</tr>
	<?php
		$que2	=	mysql_query("SELECT * FROM Pendaftaran_Training, Paket_Training, Jadwal_Training WHERE Pendaftaran_Training.paket_training=Paket_Training.id and Pendaftaran_Training.id_jadwal=Jadwal_Training.id");
		while($arr2	=	mysql_fetch_array($que2))
		{
	?>
		<tr>
			<td>
				<?=$arr2['id']?>
			</td>
			<td>
				<?=$tanggal?>
			</td>
			<td>
				<?=$arr2['nama']?>
			</td>
			<td>
				<?=$arr2['alamat']?>
			</td>
			<td>
				<?=$arr2['tanggal_lahir']?>
			</td>
			<td>
				<?=$arr2['pekerjaan']?>
			</td>
			<td>
				<?=$arr2['email']?>
			</td>
			<td>
				<?=$arr2['no_telpon']?>
			</td>
			<td>
				<?=$arr2['paket_training']?>
			</td>
			<td>
				<?=$arr2['tanggal_mulai']?>
			</td>
			<td>
				<?=$arr2['pembayaran_dp']?>
			</td>
			<td>
				<?=$arr2['keterangan']?>
			</td>	
		</tr>
	<?php
		}
	?>
</table>
</body>
</html>
