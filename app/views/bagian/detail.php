<div class="container mt-5">
	<form action="<?=BASEURL;?>/bagian/updateDataBagian" method="post">
		<h3>Ubah Data Bagian</h3>
		<table class="table table-striped table-middle">
		  	<tr>
		    	<th width="20%">Kode</th>
		    	<td>:</td>
		    	<td>
		    		<input readonly=1 type="text" class="form-control" name="kd_bagian" value="<?=$data['bag']['kd_bagian'] ?>">
		    	</td>
		  	</tr>
			<tr>
		    	<th>Nama Bagian</th>
		    	<td>:</td>
		    	<td>
		    		<input type="text" class="form-control" name="nama_bagian" value="<?=$data['bag']['nama_bagian'] ?>">
		    	</td>
		  	</tr>
		  	<tr>
		    	<th>Gaji Pokok</th>
		    	<td>:</td>
		    	<td>
		    		<input type="text" class="form-control" name="gaji_pokok" value="<?=$data['bag']['gaji_pokok'] ?>">
		    	</td>
		  	</tr>
		  	<tr>
			    <th>Uang Jamsostek</th>
			    <td>:</td>
			    <td>
			    	<input type="text" class="form-control" name="uang_jamsostek" value="<?=$data['bag']['uang_jamsostek'] ?>">
			    </td>
		  	</tr>
		  	<tr>
		    	<th>Uang Lembur</th>
		    	<td>:</td>
		    	<td>
		    		<input type="text" class="form-control" name="uang_lembur" value="<?=$data['bag']['uang_lembur'] ?>">
		    	</td>
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