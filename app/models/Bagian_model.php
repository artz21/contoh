<?php

class Bagian_model{
	private $table = 'bagian';
	private $db;

	public function __construct()
	{
		$this->db=new Database;
	}

	public function getAllBagian()
	{
		$this->db->query('SELECT*FROM '.$this->table);
		return $this->db->resultSet();
	}

	public function getBagianByKd($kd_bagian)
	{
		$this->db->query('SELECT*FROM '.$this->table.' WHERE kd_bagian =:kd_bagian');
		$this->db->bind('kd_bagian',$kd_bagian);
		return $this->db->single();
	}

	public function insBagian($kd_bagian, $nama_bagian, $gaji_pokok, $uang_jamsostek, $uang_lembur)
	{
		$this->db->query('INSERT INTO '.$this->table.'(kd_bagian, nama_bagian, gaji_pokok, uang_jamsostek, uang_lembur) 
		VALUES (:kd_bagian, :nama_bagian, :gaji_pokok, :uang_jamsostek, :uang_lembur)');
		$this->db->bind('kd_bagian', $kd_bagian);
		$this->db->bind('nama_bagian', $nama_bagian) ;
		$this->db->bind('gaji_pokok', $gaji_pokok);
		$this->db->bind('uang_jamsostek', $uang_jamsostek); 
		$this->db->bind('uang_lembur', $uang_lembur);
		return $this->db->execute();
	}

	public function updtBagian($kd_bagian, $nama_bagian, $gaji_pokok, $uang_jamsostek, $uang_lembur)
	{
		$this->db->query('UPDATE '.$this->table.' SET nama_bagian = :nama_bagian, gaji_pokok = :gaji_pokok, uang_jamsostek = :uang_jamsostek, uang_lembur = :uang_lembur WHERE kd_bagian = :kd_bagian');
		$this->db->bind('kd_bagian', $kd_bagian);
		$this->db->bind('nama_bagian', $nama_bagian) ;
		$this->db->bind('gaji_pokok', $gaji_pokok);
		$this->db->bind('uang_jamsostek', $uang_jamsostek); 
		$this->db->bind('uang_lembur', $uang_lembur);
		return $this->db->execute();
	}
	
	public function delBagian($kd_bagian)
	{
		$this->db->query('DELETE FROM bagian WHERE kd_bagian = :kd_bagian');
		$this->db->bind('kd_bagian',$kd_bagian);
		return $this->db->execute();
		echo "<script>window.location.href='../bagian'</script>";
	}
}
?>