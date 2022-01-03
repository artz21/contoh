<div class="container mt-5">
  <h1>Tambah Data Karyawan</h1> <br>
  <form action="<?=BASEURL;?>/karyawan/simpanDataKaryawan" method="post">
    <table class="table table-striped table-middle">
      <tr>
        <th width="20%">Kode Karyawan</th>
        <td width="1%">:</td>
        <td><input type="text" class="form-control" name="kd_karyawan" required></td>
      </tr>
      <tr>
        <th>NIK</th>
        <td>:</td>
        <td><input type="text" class="form-control" name="nik" required></td>
      <tr>
        <th>Nama</th>
        <td>:</td>
        <td><input type="text" class="form-control" name="nama_karyawan" required></td>
      </tr>
      <tr>
        <th>Kode Bagian</th>
        <td>:</td>
        <td>
          <select class="form-control selectlive" name="kd_bagian" required>
            <option value="" selected disabled>- pilih -</option>
            <?php foreach ($data['bag'] as $bagian) : ?>
            <option value="<?php echo $bagian['kd_bagian'] ?>">
              <?php echo $bagian['nama_bagian'] ?>
            </option>
              <?php endforeach ?>
          </select>
        </td>
      </tr>
      <tr>
        <th>Kelamin</th>
        <td>:</td>
        <td>
          <select class="form-control selectlive" name="kelamin" required>
            <option value="" selected disabled>- pilih -</option>
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
          </select>
        </td>
      </tr>
      <tr>
      <th>Agama</th>
        <td>:</td>
        <td>
          <select class="form-control selectlive" name="agama" required>
            <option value="" selected disabled>- pilih -</option>
            <option value="Islam">Islam</option>
            <option value="Kristen">Kristen</option>
            <option value="Katholik">Katholik</option>
            <option value="Hindu">Hindu</option>
            <option value="Budha">Budha</option>
            <option value="Konghuchu">Konghuchu</option>
            <option value="Lain-lain">Lain-lain</option>
          </select>
        </td>
      </tr>
      <tr>
      <th>Alamat Tinggal</th>
        <td>:</td>
        <td><input type="text" class="form-control" name="alamat_tinggal" required></td>
      </tr>
      <tr>
      <th>No Telepon</th>
        <td>:</td>
        <td><input type="text" class="form-control" name="no_telepon" required></td>
      </tr>
      <tr>
      <th>Tempat Lahir</th>
        <td>:</td>
        <td><input type="text" class="form-control" name="tempat_lahir" required></td>
      </tr>
      <tr>
      <th>Tanggal Lahir</th>
        <td>:</td>
        <td><input type="date" class="form-control" name="tanggal_lahir" required></td>
      </tr>
      <tr>
      <th>Status Kawin</th>
        <td>:</td>
        <td>
          <select class="form-control selectlive" name="status_kawin" required>
            <option value="" selected disabled>- pilih -</option>
            <option value="Sudah">Sudah</option>
            <option value="Belum">Belum</option>
          </select>
        </td>
      </tr>
      <tr>
      <th>Tanggal masuk</th>
        <td>:</td>
        <td><input type="date" class="form-control" name="tanggal_masuk" required></td>
      </tr>
    </table>

    <a href="<?=BASEURL;?>/karyawan" class="btn btn-primary btn-lg">
      <i class="glyphicon glyphicon-floppy-save"></i> Kembali
    </a>
    <button type="submit" class="btn btn-primary btn-lg">
      <i class="glyphicon glyphicon-floppy-save"></i> Simpan
    </button>
  </form>
</div>