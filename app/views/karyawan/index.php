<div class="container mt-5">
	<h1>Data Karyawan</h1>
	<br>
	<a href="<?=BASEURL;?>/karyawan/create" class="btn btn-primary btn-lg">
  		<i class="glyphicon glyphicon-floppy-save"></i> Tambah Data
	</a>
	
	<table class="table table-striped table-condensed table-hover" id="datatable">
  		<thead>
    		<tr>
    			<th>No</th>
    			<th>Nik</th>
     			<th>Nama Karyawan</th>
     			<th>Bagian</th>
     			<th>Tools</th>
    		</tr>
 		</thead>
  		<tbody>
    		<?php $nomor = 1; ?>
    		<?php foreach ($data['kry'] as $kry) : ?>
    		<tr>
      			<td><?php echo $nomor++ ?>.</td>
      			<td><?php echo $kry['nik'] ?></td>
      			<td><?php echo $kry['nama_karyawan'] ?></td>
      			<td><?php echo $kry['nama_bagian'] ?></td>
      			<td>
        			<a href="<?=BASEURL;?>/karyawan/detail/<?=$kry['kd_karyawan'];?>" class="badge bg-primary">Detail</a>
        			<a href="<?=BASEURL;?>/karyawan/delete/<?=$kry['kd_karyawan'];?>" class="badge bg-primary" onclick="return confirm('Yakin hapus data ini?')">Delete</a>
      			</td>
    		</tr>
    		<?php endforeach ?>
  		</tbody>
	</table>
</div>