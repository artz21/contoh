<?php

class Penggajian extends Controller{
	public function index(){
		$data['judul']='Data Penggajian';
		$data['pgj']= $this->model('Penggajian_model')->getAllPenggajian();
		$this->view('templates/header',$data);
		$this->view('penggajian/index',$data);
		$this->view('templates/footer');
	}

	public function detail($no_penggajian)
	{
		$data['judul']='Detail Gaji';
		$data['pgj']=$this->model('Penggajian_model')->getDetailgaji($no_penggajian);
		$this->view('templates/header',$data);
		$this->view('penggajian/detail',$data);
		$this->view('templates/footer');
	}

	public function cetakLaporan(){
		$bulan=$_POST['bulan'];
		$tahun=$_POST['tahun'];
		$data['pjg']=$this->model('Penggajian_model')->cetakLap($bulan, $tahun);
		return $this->view('penggajian/cetak', $data);
	}

	public function simpanPenggajian(){
		$periode_gaji= date('Y-m');
		$tanggal = date('Y-m-d');
		$numBulan = date('m', strtotime('-1 month', strtotime( $tanggal )));
		$data['s0']= $this->model('Penggajian_model')->cekData($periode_gaji);
		if ($data['s0']['banyak']>0) {
			echo "<script>window.alert('Data Penggajian Sudah Ada !!!'); window.location.href='../penggajian'</script>";
		}else{
		$data['s1']= $this->model('Penggajian_model')->ctkStep1();
		$kd_user='U1';
		$sk0='Lembur';
		$sk1='Pulang Cepat';
		$sk2='Izin Tidak Masuk';
		$sk3='Tanpa Keterangan';
		$sk4='Cuti';

		foreach ($data['s1'] as $step1) :
			$kd_karyawan=$step1['kd_karyawan'];
			$gaji_pokok=$step1['gaji_pokok'];
			$tunj_jamsos=$step1['uang_jamsostek'];
			$uang_lembur=$step1['uang_lembur'];
			
			$data['s2']=$this->model('Penggajian_model')->countLembur($kd_karyawan, $numBulan, $sk0);
			$data['s3']=$this->model('Penggajian_model')->countSk1($kd_karyawan, $numBulan, $sk1);
			$data['s4']=$this->model('Penggajian_model')->countSk2($kd_karyawan, $numBulan, $sk2);
			$data['s5']=$this->model('Penggajian_model')->countSk3($kd_karyawan, $numBulan, $sk3);
			$data['s6']=$this->model('Penggajian_model')->countSk4($kd_karyawan, $numBulan, $sk4);

			$tbh=$data['s2']['banyak'];
			$krg0=$data['s3']['banyak'];
			$krg1=$data['s4']['banyak'];
			$krg2=$data['s5']['banyak'];
			$krg3=$data['s6']['banyak'];

			$total_lembur=$tbh*$uang_lembur;

			//sk1
			$potongan0=(0.04 * $gaji_pokok) * $krg0;
			//sk2
			$potongan1=(0.015 * $gaji_pokok) * $krg1;
			//sk3
			$potongan2=(0.1 * $gaji_pokok) * $krg2;
			//sk4
			$potongan3=(0.01 * $gaji_pokok) * $krg3;

			//total potongan
			$potongan=$potongan0+$potongan1+$potongan2+$potongan3;

			$data['gj']=$this->model('Penggajian_model')->simpData($periode_gaji,$tanggal,$kd_karyawan,$gaji_pokok,$tunj_jamsos,$potongan,$total_lembur,$kd_user);

		endforeach;
		echo "<script>window.alert('Data Berhasil Ditambahkan!!!'); window.location.href='../penggajian'</script>";	
		}	
	}

	public function delPenggajian(){
		$periode_gaji=date('Y-m');
		$data['del']=$this->model('Penggajian_model')->delAllby($periode_gaji);
		echo "<script>window.alert('Data Berhasil Dihapus!!!'); window.location.href='../penggajian'</script>";	
	}


}


?>

