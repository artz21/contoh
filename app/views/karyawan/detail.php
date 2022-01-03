<div class="container mt-5">
	<form action="<?=BASEURL;?>/karyawan/updateDataKaryawan" method="post">
		<h3>Ubah Data Karyawan</h3>
		<table class="table table-striped table-middle">
  			<tr>
    			<th width="20%">Kode Karyawan</th>
    			<td width="1%">:</td>
    			<td>
    				<input readonly type="text" class="form-control" name="kd_karyawan" value="<?=$data['kry']['kd_karyawan'] ?>" required>
    			</td>
  			</tr>
  			<tr>
    			<th>NIK</th>
    			<td>:</td>
    			<td>
    				<input type="text" class="form-control" name="nik" value="<?=$data['kry']['nik'] ?>" required>
    			</td>
  			</tr>
  			<tr>
    			<th>Nama</th>
    			<td>:</td>
    			<td>
    				<input type="text" class="form-control" name="nama_karyawan" value="<?=$data['kry']['nama_karyawan'] ?>" required>
    			</td>
  			</tr>
  			<tr>
  				<th>Kode Bagian</th>
  				<td>:</td>
				<td>
				    <select class="form-control selectlive" name="kd_bagian" required>
				        <option value="<?=$data['kry']['kd_bagian'] ?>" selected>
				        	<?=$data['kry']['nama_bagian'] ?>
				        </option>
				    	<?php foreach ($data['bag'] as $bag) : ?>
				        <option value="<?=$bag['kd_bagian'] ?>">
				        	<?=$bag['nama_bagian'] ?>
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
			        	<option value="<?=$data['kry']['kelamin'] ?>" selected><?=$data['kry']['kelamin'] ?></option>
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
				    	<option value="<?=$data['kry']['agama'] ?>" selected><?=$data['kry']['agama'] ?></option>
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
			    <td><input type="text" class="form-control" name="alamat_tinggal" value="<?=$data['kry']['alamat_tinggal'] ?>"required></td>
			</tr>
			<tr>
				<th>No Telepon</th>
			    <td>:</td>
			    <td>
			    	<input type="text" class="form-control" name="no_telepon" value="<?=$data['kry']['no_telepon'] ?>"required>
			    </td>
			</tr>
		  	<tr>
		  		<th>Tempat Lahir</th>
		    	<td>:</td>
		    	<td>
		    		<input type="text" class="form-control" name="tempat_lahir" value="<?=$data['kry']['tempat_lahir'] ?>"required>
		    	</td>
		  	</tr>
		  	<tr>
		  		<th>Tanggal Lahir</th>
		    	<td>:</td>
		    	<td>
		    		<input type="date" class="form-control" name="tanggal_lahir" value="<?=$data['kry']['tanggal_lahir'] ?>"required>
		    	</td>
		  	</tr>
		  	<tr>
		  		<th>Status Kawin</th>
		    	<td>:</td>
		    	<td>
			      	<select class="form-control selectlive" name="status_kawin" required>
			        	<option value="<?=$data['kry']['status_kawin'] ?>" selected ><?=$data['kry']['status_kawin'] ?></option>
			        	<option value="Sudah">Sudah</option>
			        	<option value="Belum">Belum</option>
			      	</select>
		    	</td>
		  	</tr>
		  	<tr>
		  		<th>Tanggal masuk</th>
		    	<td>:</td>
		    	<td><input type="date" class="form-control" name="tanggal_masuk" value="<?=$data['kry']['tanggal_masuk'] ?>"required></td>
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