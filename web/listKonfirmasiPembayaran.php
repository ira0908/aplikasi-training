<html>
<head>
<title>Konfirmasi Pembayaran</title>
</head>

<body>
<center><h1>Konfirmasi Pembayaran</h1>
<table border='1'>
<tr> 
<td>ID</td>
<td>No Pendaftaran</td>
<td>Nama Peserta</td>
<td>Paket Training</td>
<td>Tgl Pembayaran</td>
<td>Nominal</td>
<td>Pembayaran</td>
<td>Dari Rekening</td>
<td>Keterangan</td>
</tr>
<?php

include ('configuration/configuration.php');

$q=mysql_query("select * from Konfirmasi_Pembayaran");
while($a=mysql_fetch_array($q))
{
?>
<tr> 
<td><?=$a['id']?></td></td>
<td><?=$a['no_pendaftaran']?></td>
<td><?=$a['nama_peserta']?></td>
<td><?=$a['paket_training']?></td>
<td><?=$a['tanggal_pembayaran']?></td></td>
<td><?=$a['nominal']?></td>
<td><?=$a['pembayaran']?></td>
<td><?=$a['dari_rekening']?></td>
<td><?=$a['keterangan']?></td>

</tr>
<?php } ?>
</center>
</table>
</body>
</html>
