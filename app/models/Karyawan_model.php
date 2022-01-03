<?php

class Karyawan_model{
	private $table = 'karyawan';
	private $db;

	public function __construct()
	{
		$this->db=new Database;
	}

	public function getAllKaryawan()
	{
		$this->db->query('SELECT * FROM karyawan, bagian WHERE karyawan.kd_bagian=bagian.kd_bagian');
		return $this->db->resultSet();
	}

	public function getKaryawanByKd($kd_karyawan)
	{
		$this->db->query('SELECT * FROM karyawan, bagian WHERE karyawan.kd_bagian=bagian.kd_bagian AND kd_karyawan =:kd_karyawan');
		$this->db->bind('kd_karyawan',$kd_karyawan);
		return $this->db->single();
	}

	public function insKaryawan($kd_karyawan,$nik,$nama_karyawan,$kd_bagian,$kelamin,$agama,$alamat_tinggal,$no_telepon,$tempat_lahir,$tanggal_lahir,$status_kawin,$tanggal_masuk)
	{
		$this->db->query('INSERT INTO '.$this->table. ' (kd_karyawan, nik, nama_karyawan, kd_bagian, kelamin, agama, alamat_tinggal, no_telepon,tempat_lahir, tanggal_lahir, status_kawin, tanggal_masuk) VALUES (:kd_karyawan, :nik, :nama_karyawan, :kd_bagian, :kelamin, :agama, :alamat_tinggal, :no_telepon, :tempat_lahir,  :tanggal_lahir, :status_kawin, :tanggal_masuk)');
		$this->db->bind('kd_karyawan',$kd_karyawan);
		$this->db->bind('nik',$nik);
		$this->db->bind('nama_karyawan',$nama_karyawan);
		$this->db->bind('kd_bagian',$kd_bagian);
		$this->db->bind('kelamin',$kelamin);
		$this->db->bind('agama',$agama);
		$this->db->bind('alamat_tinggal',$alamat_tinggal);
		$this->db->bind('no_telepon',$no_telepon);
		$this->db->bind('tempat_lahir',$tempat_lahir);
		$this->db->bind('tanggal_lahir',$tanggal_lahir);
		$this->db->bind('status_kawin',$status_kawin);
		$this->db->bind('tanggal_masuk',$tanggal_masuk);
		return $this->db->execute();
	}

	public function updtKaryawan($kd_karyawan,$nik,$nama_karyawan,$kd_bagian,$kelamin,$agama,$alamat_tinggal,$no_telepon,$tempat_lahir,$tanggal_lahir,$status_kawin,$tanggal_masuk)
	{
		$this->db->query('UPDATE '.$this->table.' SET nik = :nik, nama_karyawan = :nama_karyawan, kd_bagian = :kd_bagian, kelamin = :kelamin, agama = :agama, alamat_tinggal = :alamat_tinggal, no_telepon = :no_telepon, tempat_lahir = :tempat_lahir, tanggal_lahir = :tanggal_lahir, status_kawin = :status_kawin, tanggal_masuk = :tanggal_masuk WHERE kd_karyawan = :kd_karyawan');
		$this->db->bind('kd_karyawan',$kd_karyawan);
		$this->db->bind('nik',$nik);
		$this->db->bind('nama_karyawan',$nama_karyawan);
		$this->db->bind('kd_bagian',$kd_bagian);
		$this->db->bind('kelamin',$kelamin);
		$this->db->bind('agama',$agama);
		$this->db->bind('alamat_tinggal',$alamat_tinggal);
		$this->db->bind('no_telepon',$no_telepon);
		$this->db->bind('tempat_lahir',$tempat_lahir);
		$this->db->bind('tanggal_lahir',$tanggal_lahir);
		$this->db->bind('status_kawin',$status_kawin);
		$this->db->bind('tanggal_masuk',$tanggal_masuk);
		return $this->db->execute();
	}

	public function delKaryawanByKd($kd_karyawan)
	{
		$this->db->query('DELETE FROM karyawan WHERE kd_karyawan = :kd_karyawan');
		$this->db->bind('kd_karyawan',$kd_karyawan);
		return $this->db->execute();
	}
} 
?>