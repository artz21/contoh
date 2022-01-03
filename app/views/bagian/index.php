<div class="container mt-5">
	<h1>Data Bagian</h1>
  <br>
  <a href="<?=BASEURL;?>/bagian/create" class="btn btn-primary btn-lg">
      <i class="glyphicon glyphicon-floppy-save"></i> Tambah Data
  </a>
  <table class="table table-striped table-condensed table-hover" id="datatable">
    <thead>
      <tr>
        <th>No</th>
        <th>Kode</th>
        <th>Nama Bagian</th>
        <th>Gaji Pokok</th>
        <th>Uang Lembur</th>
        <th>tools</th>
      </tr>
    </thead>
    <tbody>
      <?php $nomor = 1; ?>
      <?php foreach ($data['bag'] as $bag) : ?>
      <tr>
        <td><?php echo $nomor++ ?>.</td>
        <td><?php echo $bag['kd_bagian'] ?></td>
        <td><?php echo $bag['nama_bagian'] ?></td>
        <td><?php echo $bag['gaji_pokok'] ?></td>
        <td><?php echo $bag['uang_lembur'] ?></td>
        <td>
        	<a href="<?=BASEURL;?>/bagian/detail/<?=$bag['kd_bagian'];?>" class="badge bg-primary">Detail</a>
          <a href="<?=BASEURL;?>/bagian/delete/<?=$bag['kd_bagian'];?>" class="badge bg-primary" onclick="return confirm('Yakin hapus data ini?')">Delete</a>
  	  </td>
      </tr>
      <?php endforeach ?>
    </tbody>
  </table>
</div>
