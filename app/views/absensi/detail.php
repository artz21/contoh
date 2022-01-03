<div class="container mt-5">
  <form action="<?=BASEURL;?>/absensi/updateDataAbsensi" method="post">
    <h3>Ubah Data Absensi</h3>
    <table class="table table-striped table-middle">
      <tr>
        <tr>
          <th width="20%">Kode Karyawan</th>
          <td width="1%">:</td>
          <td><select class="form-control selectlive" name="kd_karyawan" required>
            <option value="<?=$data['abs']['kd_karyawan'] ?>" selected ><?=$data['abs']['kd_karyawan'] ?> | <?=$data['abs']['nama_karyawan'] ?></option>
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
        <td><input type="date" class="form-control datepicker" name="tanggal" value="<?=$data['abs']['tanggal'] ?>"required></td>
      </tr>
      <tr>
         <th>Jam Masuk</th>
         <td>:</td>
         <td><input type="time" name="jam_masuk"  class="form-control" value="<?=$data['abs']['jam_masuk'] ?>"></td>
      </tr>
      <tr>
         <th>Jam Keluar</th>
         <td>:</td>
         <td><input type="time" name="jam_keluar"  class="form-control" value="<?=$data['abs']['jam_keluar'] ?>"></td>
      </tr>
      <tr>
        <th>Status Kehadiran</th>
        <td>:</td>
        <td><select class="form-control selectlive" name="status_kehadiran" required>
            <option value="<?=$data['abs']['status_kehadiran'] ?>" selected ><?=$data['abs']['status_kehadiran'] ?></option>
            <option value="Hadir">Hadir</option>
            <option value="Pulang Cepat">Pulang Cepat</option>
            <option value="Izin Tidak Masuk">Izin Tidak Masuk</option>
            <option value="Tanpa keterangan">Tanpa keterangan</option>
          </select>
        </td>
      </tr>
      <tr>
    	   <th>Keterangan</th>
    	   <td>:</td>
    	   <td><input type="text" class="form-control" name="keterangan" value="<?=$data['abs']['keterangan'] ?>"></td>
      </tr>
      <input type="hidden" class="form-control" name="id" value="<?=$data['abs']['id'] ?>">
    </table>

    <a href="<?=BASEURL;?>/absensi" class="btn btn-primary btn-lg">
      <i class="glyphicon glyphicon-floppy-save"></i> Kembali
    </a>
    <button type="submit" class="btn btn-primary btn-lg">
      <i class="glyphicon glyphicon-floppy-save"></i> Simpan
    </button>
  </form>	
</div>