<div class="container mt-5">
	<h1>Data Penggajian</h1>
	<br>

<?php $bulaxn = date('F')?>
 
        <form action="<?=BASEURL;?>/penggajian/cetakLaporan" method="post">
          <select name="bulan" required>
            <option selected disabled>Bulan</option>
              <?php
                $bulansql=array('01','02','03','04','05','06','07','08','09','10','11','12');
                $bulan=array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
                $jlh_bln=count($bulan);
                for($c=0; $c<$jlh_bln; $c+=1){
                  echo"<option value=$bulansql[$c]> $bulan[$c] </option>";
                }
              ?>
          </select>

          <select name="tahun" required>
            <option selected disabled>Tahun</option>
              <?php
                for($i=date('Y'); $i>=date('Y')-32; $i-=1){
                  echo"<option value='$i'> $i </option>";
                }
              ?>
          </select>

          <button type="submit" class="btn btn-primary btn-lg">
              Export Data Penggajian Bulan <?= $bulaxn?>
          </button>
        </form>
        <form action="<?=BASEURL;?>/penggajian/simpanPenggajian" method="post">
          <button type="submit" class="btn btn-secondary btn-lg">
            <i class="glyphicon"></i> Insert penggajian Bulan <?= $bulaxn?>
          </button>
        </form>
        <form action="<?=BASEURL;?>/penggajian/delPenggajian" method="post">
          <button type="submit" class="btn btn-secondary btn-lg">
            Delete penggajian Bulan <?= $bulaxn?>
          </button>
        </form>
<div class="panel panel-default">
  
<table class="table table-striped table-condensed table-hover" id="datatable">
  <thead>
    <tr>
      <th>No</th>
      <th>Periode</th>
      <th>Tanggal</th>
      <th>NIK</th>
      <th>Nama Karyawan</th>
      <th>Gaji Bersih</th>
      <th>Tools</th>
    </tr>
  </thead> 
  <tbody>
    <?php $nomor = 1; ?>
    <?php foreach ($data['pgj'] as $gaji) : 
      $gb= $gaji['gaji_pokok'] + $gaji['total_lembur'] -  $gaji['tunj_jamsos'] - $gaji['potongan'];?>

    <tr>
      <td><?php echo $nomor++ ?>.</td>
      <td><?php echo $gaji['periode_gaji']?></td>
      <td><?php echo $gaji['tanggal']?></td>
      <td><?php echo $gaji['nik'] ?></td>
      <td><?php echo $gaji['nama_karyawan'] ?></td>
      <td><?php echo $gb ?></td>
      <td>
          <a href="<?=BASEURL;?>/penggajian/detail/<?=$gaji['no_penggajian'];?>" class="badge bg-primary">Detail</a>
      </td>
    </tr>
    <?php endforeach ?>
  </tbody>
</table>

<br><br>
</div>