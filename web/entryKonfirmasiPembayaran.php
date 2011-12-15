<html>
 <head>
   <title>
     Konfirmasi Pembayaran

   </title>
   <link type="text/css" href="style.css" rel="stylesheet" />   

    <script type="text/javascript" src="development-bundle/jquery-1.3.2.js"></script>
    <script type="text/javascript" src="development-bundle/ui/ui.core.js"></script>
    <script type="text/javascript" src="development-bundle/ui/ui.datepicker.js"></script>   
    <script type="text/javascript" src="development-bundle/ui/i18n/ui.datepicker-id.js"></script>

    <script type="text/javascript" src="development-bundle/ui/effects.core.js"></script>
    <script type="text/javascript" src="development-bundle/ui/effects.drop.js"></script>

    <script type="text/javascript"> 
  $(document).ready(function(){
        $("#tanggal").datepicker({
          showAnim    : "drop",
          showOptions : { direction: "up" }
        });
      });
    </script>
 </head>
 
 <body>
   <form method="POST" name="" action="proses.php">
   <center><h2>
	   Konfirmasi Pembayaran
   </h2>

   <table>
   <tr>
      <td>
        No.Pendaftaran
      </td>
      <td>
         <input type="text" name="no_pendaftaran" class="">
         &nbsp;
      </td>
   </tr>
   <tr>
      <td>
       Nama Peserta
      </td>
      <td>
         <input type="text" name="nama_peserta" class="">
         &nbsp;
      </td>
   </tr>
   <tr>
      <td>
       Paket Training
      </td>
      <td>
         <input type="text" name="paket_training" class="">
         &nbsp;
      </td>
   </tr>
   <tr>
      <td>
        Tgl.Pembayaran
      </td>
      <td>
         <input type="text" name="tanggal_pembayaran" id="tanggal">
         &nbsp;
      </td>
   </tr>
   <tr>
      <td>
        Nominal
      </td>
      <td>
         <input type="text" name="nominal" class="">
         &nbsp;
      </td>
    </tr>
    <tr>  
    <td>
		Pembayaran
    </td>
      <td>
		  <input type="radio" name="pembayaran" value="cash">Cash
		  <input type="radio" name="pembayaran" value="transfer">Transfer
		  &nbsp;
	  </td>
   </tr>
   <tr>
      <td>
       Dari Rekening
      </td>
      <td>
         <input type="text" name="dari_rekening" class="">
         &nbsp;
      </td>
   </tr>
   <tr>
      <td>
        Keterangan
      </td>
      <td>
         <textarea name="keterangan" class="">
         </textarea>
      </td>
   </tr>
   </center>
   </table>
        <input type="submit" name="save" value="save">
        </form>
 </body>
</html>



