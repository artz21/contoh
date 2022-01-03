<?php
session_start();
class Karyawan extends Controller{
	public function index(){
		$data['judul']='Data Karyawan';
		$data['kry']= $this->model('Karyawan_model')->getAllKaryawan();
		$this->view('templates/header',$data);
		$this->view('karyawan/index',$data);
		$this->view('templates/footer');
	}

	public function create()
	{
		$data['judul']='Tambah Data Karyawan';
		$data['bag']=$this->model('Bagian_model')->getAllBagian();
		$this->view('templates/header',$data);
		$this->view('karyawan/create',$data);
		$this->view('templates/footer');
	}

	public function detail($kd_karyawan)
	{
		$data['judul']='Detail Karyawan';
		$data['bag']=$this->model('Bagian_model')->getAllBagian();
		$data['kry']=$this->model('Karyawan_model')->getKaryawanByKd($kd_karyawan);
		$this->view('templates/header',$data);
		$this->view('karyawan/detail',$data);
		$this->view('templates/footer');
	}

	public function simpanDataKaryawan()
	{
		$kd_karyawan = $_POST['kd_karyawan'];
		$nik = $_POST['nik'];
		$nama_karyawan = $_POST['nama_karyawan'];
		$kd_bagian = $_POST['kd_bagian'];
		$kelamin = $_POST['kelamin'];
		$alamat_tinggal = $_POST['alamat_tinggal'];
		$no_telepon = $_POST['no_telepon'];
		$tempat_lahir = $_POST['tempat_lahir'];
		$agama = $_POST['agama'];
		$tanggal_lahir = $_POST['tanggal_lahir'];
		$status_kawin = $_POST['status_kawin'];
		$tanggal_masuk = $_POST['tanggal_masuk'];
		$data['kry']=$this->model('Karyawan_model')->insKaryawan($kd_karyawan, $nik, $nama_karyawan, $kd_bagian, $kelamin, $agama, $alamat_tinggal, $no_telepon, $tempat_lahir, $tanggal_lahir, $status_kawin, $tanggal_masuk);
		echo "<script>window.alert('Data Berhasil Ditambahkan!!!'); window.location.href='../karyawan/create'</script>";
	}

	public function updateDataKaryawan()
	{
		$kd_karyawan = $_POST['kd_karyawan'];
		$nik = $_POST['nik'];
		$nama_karyawan = $_POST['nama_karyawan'];
		$kd_bagian = $_POST['kd_bagian'];
		$kelamin = $_POST['kelamin'];
		$alamat_tinggal = $_POST['alamat_tinggal'];
		$no_telepon = $_POST['no_telepon'];
		$tempat_lahir = $_POST['tempat_lahir'];
		$agama = $_POST['agama'];
		$tanggal_lahir = $_POST['tanggal_lahir'];
		$status_kawin = $_POST['status_kawin'];
		$tanggal_masuk = $_POST['tanggal_masuk'];
		$data['kry']=$this->model('Karyawan_model')->updtKaryawan($kd_karyawan,$nik,$nama_karyawan,$kd_bagian,$kelamin,$agama,$alamat_tinggal,$no_telepon,$tempat_lahir,$tanggal_lahir,$status_kawin,$tanggal_masuk);
		echo "<script>window.alert('Data Berhasil Diubah!!!'); window.location.href='../karyawan'</script>";
	}

	public function delete($kd_karyawan)
	{
		$data['kry']=$this->model('Karyawan_model')->delKaryawanByKd($kd_karyawan);
		echo "<script>window.alert('Data Berhasil Dihapus!!!'); window.location.href='../'</script>";

	}
}
?> 