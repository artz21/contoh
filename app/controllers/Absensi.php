<?php

class Absensi extends Controller{
	public function index(){
		$data['judul']='Data Absensi';
		$data['abs']= $this->model('Absensi_model')->getAllAbsensi();
		$this->view('templates/header',$data);
		$this->view('absensi/index',$data);
		$this->view('templates/footer');
	}

	public function create(){
		$data['judul']='Tambah Data Absensi';
		$data['kry']=$this->model('Karyawan_model')->getAllKaryawan();
		$this->view('templates/header', $data);
		$this->view('absensi/create',$data);
		$this->view('templates/footer');
	}

	public function detail($id)
	{
		$data['judul']='Detail Absensi';
		$data['kry']= $this->model('Karyawan_model')->getAllKaryawan();
		$data['abs']=$this->model('Absensi_model')->getAbsensiById($id);
		$this->view('templates/header',$data);
		$this->view('absensi/detail',$data);
		$this->view('templates/footer');
	}

	public function cetakLaporan()
	{
		$bulan=$_POST['bulan'];
		$tahun=$_POST['tahun'];
		$data['judul']='Laporan Absensi';
		$data['absensi']=$this->model('Absensi_model')->cetakLap($bulan,$tahun);
		return $this->view('absensi/cetak', $data);
	}

	public function simpanDataAbsensi()
	{
		$id = $_POST['id'];
		$kd_karyawan = $_POST['kd_karyawan'];
		$tanggal = $_POST['tanggal'];
		$jam_masuk = $_POST['jam_masuk'];
		$jam_keluar = $_POST['jam_keluar'];
		$status_kehadiran = $_POST['status_kehadiran'];
		$keterangan = $_POST['keterangan'];
		$data['abs']=$this->model('Absensi_model')->insAbsensi($id, $kd_karyawan, $tanggal, $jam_masuk, $jam_keluar, $status_kehadiran, $keterangan);
		echo "<script>window.alert('Data Berhasil Ditambah!!!'); window.location.href='../absensi/create'</script>";
	}

	public function updateDataAbsensi()
	{
		$id = $_POST['id'];
		$kd_karyawan = $_POST['kd_karyawan'];
		$tanggal = $_POST['tanggal'];
		$jam_masuk = $_POST['jam_masuk'];
		$jam_keluar = $_POST['jam_keluar'];
		$status_kehadiran = $_POST['status_kehadiran'];
		$keterangan = $_POST['keterangan'];
		$data['abs']=$this->model('Absensi_model')->updtAbsensi($id, $kd_karyawan, $tanggal, $jam_masuk, $jam_keluar, $status_kehadiran, $keterangan);
		echo "<script>window.alert('Data Berhasil Diubah!!!'); window.location.href='../absensi'</script>";
	}

	public function delete($id)
	{
		$data['abs']=$this->model('Absensi_model')->delAbsensi($id);
		echo "<script>window.alert('Data Berhasil Dihapus!!!'); window.location.href='../'</script>";
	}
}