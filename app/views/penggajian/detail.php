<div class="container mt-5">
	<div class="card" style="width:23rem;">
		<div class="card-body">
			<?php
	$gb= $data['pgj']['gaji_pokok'] + $data['pgj']['total_lembur'] -  $data['pgj']['tunj_jamsos'] - $data['pgj']['potongan'];
	?>
  <font style="font-family: Times New Roman; font-size: 14pt">
  <div class="page" style="line-height:2em">


<table style="width:20em;" border="0" >
  <tr>
    <th style="border-bottom: solid;" colspan="3">SLIP GAJI</th>
  </tr>
  <tr>
    <td>Tanggal</td>
    <td style="width: 10em;">: <?php echo $data['pgj']['tanggal']?></td>
  </tr>
  <tr>
    <td>Periode Gaji</td>
    <td colspan="2">: <?php echo $data['pgj']['periode_gaji']?></td>
  </tr>
  <tr>
    <td>Nama</td>
    <td colspan="2">: <?php echo $data['pgj']['nama_karyawan']?></td>
  </tr>
  <tr>
    <td>Bagian</td>
    <td colspan="2">: <?php echo $data['pgj']['nama_bagian']?></td>
  </tr>
  <tr>
    <td style="border-top: solid;" colspan="2" align="right">Gaji Pokok (Rp)+</td>
    <td style="border-top: solid;">: <?php echo $data['pgj']['gaji_pokok']?></td>
  </tr>
  <tr>
    <td colspan="2" align="right">Jamsostek (Rp)-</td>
    <td>: <?php echo $data['pgj']['tunj_jamsos']?></td>
  </tr>
  <tr>
    <td colspan="2" align="right">Potongan (Rp)-</td>
    <td>: <?php echo $data['pgj']['potongan']?></td>
  </tr>
  <tr>
    <td colspan="2" align="right">Uang Lembur (Rp)+</td>
    <td>: <?php echo $data['pgj']['total_lembur']?></td>
  </tr>
  <tr>
    <td colspan="2" align="right">Total Gaji (Rp) </td>
    <td>: <?php echo $gb?></td>
  </tr>

</table>
			<a href="<?=BASEURL;?>/penggajian" class="card-link">Kembali</a>
		</div>
	</div>
</div>