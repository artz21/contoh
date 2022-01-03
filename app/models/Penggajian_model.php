<?php

class Penggajian_model{
		private $db;
 
	public function __construct()
	{
		$this->db=new Database;
	}
 
	public function getAllPenggajian()
	{
		$this->db->query('SELECT*FROM penggajian, karyawan, bagian WHERE penggajian.kd_karyawan=karyawan.kd_karyawan AND karyawan.kd_bagian=bagian.kd_bagian ORDER BY periode_gaji DESC');
		return $this->db->resultSet();
	}

	public function getKaryawanByKd($kd_karyawan)
	{
		$this->db->query('SELECT*FROM karyawan, bagian WHERE karyawan.kd_bagian=bagian.kd_bagian AND kd_karyawan =:kd_karyawan');
		$this->db->bind('kd_karyawan',$kd_karyawan);
		return $this->db->single();
	}

	public function getDetailgaji($no_penggajian){
		$this->db->query('SELECT*FROM penggajian, karyawan, bagian WHERE no_penggajian = :no_penggajian AND penggajian.kd_karyawan=karyawan.kd_karyawan AND karyawan.kd_bagian=bagian.kd_bagian');
		$this->db->bind('no_penggajian', $no_penggajian);
		return $this->db->single();
	}

	public function cetakLap($bulan, $tahun){
		$this->db->query('SELECT * FROM penggajian, karyawan, bagian WHERE penggajian.kd_karyawan=karyawan.kd_karyawan AND karyawan.kd_bagian=bagian.kd_bagian AND YEAR(penggajian.tanggal) = :tahun AND MONTH(penggajian.tanggal) = :bulan');
		$this->db->bind('tahun',$tahun);
		$this->db->bind('bulan',$bulan);
		return $this->db->resultSet();

	}

//CETAK LANGSUNG 1 BULAN
	public function cekData($periode_gaji)
	{
		$this->db->query('SELECT COUNT(no_penggajian) as banyak FROM penggajian WHERE periode_gaji = :periode_gaji');
		$this->db->bind('periode_gaji', $periode_gaji);
		return $this->db->single();
	}
	public function ctkStep1()
	{
		$this->db->query('SELECT*FROM karyawan, bagian WHERE karyawan.kd_bagian=bagian.kd_bagian');
		return $this->db->resultSet();
	}
	public function countLembur($kd_karyawan, $numBulan, $sk0)
	{
		$this->db->query('SELECT COUNT(id)as banyak FROM absensi WHERE kd_karyawan= :kd_karyawan AND MONTH(tanggal) = :numBulan AND status_kehadiran= :status_kehadiran');
		$this->db->bind('kd_karyawan',$kd_karyawan);
		$this->db->bind('numBulan', $numBulan);
		$this->db->bind('status_kehadiran', $sk0);
		return $this->db->single();
	}

	//STATUS KEHADIRAN
		public function countSk1($kd_karyawan, $numBulan, $sk1)
		{
			$this->db->query('SELECT COUNT(id) as banyak FROM absensi WHERE kd_karyawan= :kd_karyawan AND MONTH(tanggal)= :numBulan AND status_kehadiran= :status_kehadiran');
			$this->db->bind('kd_karyawan',$kd_karyawan);
			$this->db->bind('numBulan', $numBulan);
			$this->db->bind('status_kehadiran', $sk1);
			return $this->db->single();
		}
		public function countSk2($kd_karyawan, $numBulan, $sk2)
		{
			$this->db->query('SELECT COUNT(id) as banyak FROM absensi WHERE kd_karyawan= :kd_karyawan AND MONTH(tanggal)= :numBulan AND status_kehadiran= :status_kehadiran');
			$this->db->bind('kd_karyawan',$kd_karyawan);
			$this->db->bind('numBulan', $numBulan);
			$this->db->bind('status_kehadiran', $sk2);
			return $this->db->single();
		}
		public function countSk3($kd_karyawan, $numBulan, $sk3)
		{
			$this->db->query('SELECT COUNT(id) as banyak FROM absensi WHERE kd_karyawan= :kd_karyawan AND MONTH(tanggal)= :numBulan AND status_kehadiran= :status_kehadiran');
			$this->db->bind('kd_karyawan',$kd_karyawan);
			$this->db->bind('numBulan', $numBulan);
			$this->db->bind('status_kehadiran', $sk3);
			return $this->db->single();
		}
		public function countSk4($kd_karyawan, $numBulan, $sk4)
		{
			$this->db->query('SELECT COUNT(id) as banyak FROM absensi WHERE kd_karyawan= :kd_karyawan AND MONTH(tanggal)= :numBulan AND status_kehadiran= :status_kehadiran');
			$this->db->bind('kd_karyawan',$kd_karyawan);
			$this->db->bind('numBulan', $numBulan);
			$this->db->bind('status_kehadiran', $sk4);
			return $this->db->single();
		}
	//END SK

	public function simpData($periode_gaji,$tanggal,$kd_karyawan,$gaji_pokok,$tunj_jamsos,$potongan,$total_lembur,$kd_user){
		$this->db->query('INSERT INTO penggajian (periode_gaji, tanggal, kd_karyawan, gaji_pokok,  tunj_jamsos, potongan,total_lembur, kd_user) VALUES (:periode_gaji, :tanggal, :kd_karyawan, :gaji_pokok, :tunj_jamsos,  :potongan, :total_lembur,:kd_user)');
		$this->db->bind('periode_gaji',$periode_gaji);
		$this->db->bind('tanggal',$tanggal);
		$this->db->bind('kd_karyawan',$kd_karyawan);
		$this->db->bind('gaji_pokok', $gaji_pokok);
		$this->db->bind('tunj_jamsos',$tunj_jamsos);
		$this->db->bind('total_lembur',$total_lembur);
		$this->db->bind('potongan', $potongan);
		$this->db->bind('kd_user', $kd_user);
		return $this->db->execute();
	}
//END CETAK LANGSUNG 1 BULAN

	public function delAllby($periode_gaji)
	{
		$this->db->query('DELETE FROM penggajian WHERE periode_gaji=:periode_gaji');
		$this->db->bind('periode_gaji',$periode_gaji);
		return $this->db->execute();
	}
 
}
?>