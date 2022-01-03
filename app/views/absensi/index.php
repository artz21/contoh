<div class="container mt-5">
  <h1>Data Absensi</h1>
  <form action="<?=BASEURL;?>/absensi/cetakLaporan" method="post">
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
              Export Laporan Absensi
          </button>
        </form>
  <br>
  <a href="<?=BASEURL;?>/absensi/create" class="btn btn-primary btn-lg">Tambah Data</a>

  <table class="table table-striped table-condensed table-hover" id="datatable">
    <thead>
      <tr>
        <th>No</th>
        <th>Tanggal</th>
        <th>NIK</th>
        <th>Nama Karyawan</th>
        <th>Status</th>
        <th>Keterangan</th>
        <th>Tools</th>
      </tr>
    </thead>
    <tbody>
      <?php $nomor = 1; ?>
      <?php foreach ($data['abs'] as $abs) : ?>
      <tr>
        <td><?php echo $nomor++ ?>.</td>
        <td><?php echo $abs['tanggal']?></td>
        <td><?php echo $abs['nik'] ?></td>
        <td><?php echo $abs['nama_karyawan'] ?></td>
        <td><?php echo $abs['status_kehadiran'] ?></td>
        <td><?php echo $abs['keterangan'] ?></td>
        <td>
        	<a href="<?=BASEURL;?>/absensi/detail/<?=$abs['id'];?>" class="badge bg-primary">Detail</a>
          <a href="<?=BASEURL;?>/absensi/delete/<?=$abs['id'];?>" class="badge bg-primary" onclick="return confirm('Yakin hapus data ini?')">Delete</a>
        </td>
      </tr>
      <?php endforeach ?>
    </tbody>
  </table>
</div>