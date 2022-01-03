<?php

class Bagian extends Controller{
	public function index(){
		$data['judul']='Data Bagian';
		$data['bag']= $this->model('Bagian_model')->getAllBagian();
		$this->view('templates/header',$data);
		$this->view('bagian/index',$data);
		$this->view('templates/footer');
	}

	public function create()
	{
		$data['judul']='Tambah Bagian';
		$this->view('templates/header',$data);
		$this->view('bagian/create',$data);
		$this->view('templates/footer');
	}

	public function detail($kd_bagian)
	{
		$data['judul']='Detail Bagian';
		$data['bag']=$this->model('Bagian_model')->getBagianByKd($kd_bagian);
		$this->view('templates/header',$data);
		$this->view('bagian/detail',$data);
		$this->view('templates/footer');
	}

	public function simpanDataBagian()
	{
		$kd_bagian = $_POST['kd_bagian'];
		$nama_bagian = $_POST['nama_bagian'];
		$gaji_pokok = $_POST['gaji_pokok'];
		$uang_jamsostek = $_POST['uang_jamsostek'];
		$uang_lembur = $_POST['uang_lembur'];
		$data['bag']=$this->model('Bagian_model')->insBagian($kd_bagian, $nama_bagian, $gaji_pokok, $uang_jamsostek, $uang_lembur);
		echo "<script>window.alert('Data Berhasil Ditambah!!!'); window.location.href='../bagian/create'</script>";
	}

	public function updateDataBagian()
	{
		$kd_bagian = $_POST['kd_bagian'];
		$nama_bagian = $_POST['nama_bagian'];
		$gaji_pokok = $_POST['gaji_pokok'];
		$uang_jamsostek = $_POST['uang_jamsostek'];
		$uang_lembur = $_POST['uang_lembur'];
		$data['bag']=$this->model('Bagian_model')->updtBagian($kd_bagian, $nama_bagian, $gaji_pokok, $uang_jamsostek, $uang_lembur);
		echo "<script>window.alert('Data Berhasil Diubah!!!'); window.location.href='../bagian'</script>";
	}

	public function delete($kd_bagian)
	{
		$data['bag']=$this->model('Bagian_model')->delBagian($kd_bagian);
		echo "<script>window.alert('Data Berhasil Dihapus!!!'); window.location.href='../'</script>";
	}
}
?>