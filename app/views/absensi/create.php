<div class="container mt-5">
<form action="<?=BASEURL;?>/absensi/simpanDataAbsensi" method="post">
<h3>Tambah Data Absensi</h3><br>
<table class="table table-striped table-middle">
  <tr>
    <tr>
      <th width="20%">Kode Karyawan</th>
      <td width="1%">:</td>
      <td><select class="form-control selectlive" name="kd_karyawan" required>
        <option value="" selected disabled >-pilih-</option>
        <?php foreach ($data['kry'] as $kry) : ?>
        <option value="<?=$kry['kd_karyawan'] ?>">
          <?=$kry['kd_karyawan'] ?> | <?=$kry['nama_karyawan'] ?>
        </option>
        <?php endforeach ?>
      </select></td>
  </tr>
  <tr>
    <th>Tanggal </th>
    <td>:</td>
    <td><input type="date" class="form-control" name="tanggal" required></td>
  </tr>
  <tr>
	   <th>Jam Masuk</th>
	   <td>:</td>
	   <td><input type="time" name="jam_masuk"  class="form-control"></td>
  </tr>
  <tr>
     <th>Jam Keluar</th>
     <td>:</td>
     <td><input type="time" name="jam_keluar"  class="form-control"></td>
  </tr>
  <tr>
    <th>Status Kehadiran</th>
    <td>:</td>
    <td><select class="form-control selectlive" name="status_kehadiran" required>
        <option value="" selected disabled>- pilih -</option>
        <option value="Hadir">Hadir</option>
        <option value="Pulang Cepat">Pulang Cepat</option>
        <option value="Izin Tidak Masuk">Izin Tidak Masuk</option>
        <option value="Tanpa keterangan">Tanpa keterangan</option>
        <option value="Cuti">Cuti</option>
        <option value="Lembur">Lembur</option>
      </select>
    </td>
  </tr>
  <tr>
     <th>Keterangan</th>
     <td>:</td>
     <td><input type="text" name="keterangan"  class="form-control"></td>
  </tr>
  <input type="hidden" class="form-control" name="id" value=""></td>
  <input type="hidden" class="form-control" name="kd_user" value="<?php echo $_SESSION['user']['kd_user'] ?>" required>
</table>
<a href="<?=BASEURL;?>/absensi" class="btn btn-primary btn-lg">
  <i class="glyphicon glyphicon-floppy-save"></i> Kembali
</a>
<button type="submit" class="btn btn-primary btn-lg">
  <i class="glyphicon glyphicon-floppy-save"></i> Simpan
</button>
</form>
</div>