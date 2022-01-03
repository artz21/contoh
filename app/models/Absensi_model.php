<?php

class Absensi_model{
	private $table = 'absensi';
	private $db;

	public function __construct()
	{
		$this->db=new Database;
	}

	public function getAllAbsensi()
	{
		$this->db->query('SELECT*FROM absensi, karyawan WHERE karyawan.kd_karyawan = absensi.kd_karyawan ORDER BY absensi.tanggal DESC');
		return $this->db->resultSet();
	}

	public function getAbsensiById($id)
	{
		$this->db->query('SELECT*FROM absensi, karyawan WHERE karyawan.kd_karyawan=absensi.kd_karyawan AND id = :id ');
		$this->db->bind('id',$id);
		return $this->db->single();
	}

	public function cetakLap($bulan,$tahun)
	{
		$this->db->query('SELECT * FROM absensi, karyawan WHERE YEAR(absensi.tanggal) = :tahun AND MONTH(absensi.tanggal) = :bulan AND absensi.kd_karyawan=karyawan.kd_karyawan');
		$this->db->bind('bulan',$bulan);
		$this->db->bind('tahun',$tahun);
		return $this->db->resultSet();
	}

	public function insAbsensi($id, $kd_karyawan, $tanggal, $jam_masuk, $jam_keluar, $status_kehadiran, $keterangan)
	{
		$this->db->query('INSERT INTO '.$this->table.' (id, kd_karyawan, tanggal, jam_masuk, jam_keluar, status_kehadiran, keterangan) VALUES (:id, :kd_karyawan, :tanggal, :jam_masuk, :jam_keluar, :status_kehadiran, :keterangan)');
		$this->db->bind('id',$id);
		$this->db->bind('kd_karyawan',$kd_karyawan);
		$this->db->bind('tanggal',$tanggal);
		$this->db->bind('jam_masuk',$jam_masuk);
		$this->db->bind('jam_keluar',$jam_keluar);
		$this->db->bind('status_kehadiran',$status_kehadiran);
		$this->db->bind('keterangan',$keterangan);
		return $this->db->execute();
	}

	public function updtAbsensi($id, $kd_karyawan, $tanggal, $jam_masuk, $jam_keluar, $status_kehadiran, $keterangan)
	{
		$this->db->query('UPDATE '.$this->table.' SET kd_karyawan = :kd_karyawan, tanggal = :tanggal, jam_masuk = :jam_masuk, jam_keluar = :jam_keluar, status_kehadiran = :status_kehadiran, keterangan = :keterangan WHERE id = :id');
		$this->db->bind('id',$id);
		$this->db->bind('kd_karyawan',$kd_karyawan);
		$this->db->bind('tanggal',$tanggal);
		$this->db->bind('jam_masuk',$jam_masuk);
		$this->db->bind('jam_keluar',$jam_keluar);
		$this->db->bind('status_kehadiran',$status_kehadiran);
		$this->db->bind('keterangan',$keterangan);
		return $this->db->execute();
	}
	public function delAbsensi($id)
	{
		$this->db->query('DELETE FROM '.$this->table.' WHERE id = :id');
		$this->db->bind('id',$id);
		return $this->db->execute();
	}
}
?>