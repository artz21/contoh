<div class="container mt-5">
  <h1>Tambah Data Bagian</h1> 
  <br>
  <form action="<?=BASEURL;?>/bagian/simpanDataBagian" method="post">
<table class="table table-striped table-middle">
  <tr>
    <th width="20%">Kode Bagian</th>
    <td width="1%">:</td>
    <td><input type="text" class="form-control" name="kd_bagian" required></td>
  </tr>
  <tr>
    <th>Nama Bagian</th>
    <td>:</td>
    <td><input type="text" class="form-control" name="nama_bagian" required></td>
  </tr>
  <tr>
    <th>Gaji Pokok</th>
    <td>:</td>
    <td><input type="text" class="form-control" name="gaji_pokok" required></td>
  </tr>
  <tr>
    <th>Uang Jamsostek</th>
    <td>:</td>
    <td><input type="text" class="form-control" name="uang_jamsostek" required></td>
  </tr>
  <tr>
  <th>Uang Lembur</th>
    <td>:</td>
    <td><input type="text" class="form-control" name="uang_lembur" required></td>
  </tr>
</table>
<a href="<?=BASEURL;?>/bagian" class="btn btn-primary btn-lg">
        <i class="glyphicon glyphicon-floppy-save"></i> Kembali
    </a>
<button type="submit" class="btn btn-primary btn-lg">
  <i class="glyphicon glyphicon-floppy-save"></i> Simpan
</button>
</form>
</div>