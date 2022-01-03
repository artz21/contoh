<?php
class Home extends Controller{
	public function index()
	{
		$data['judul']='Home';
		$data['nama']=$this->model('User_model')->getUser();
		$data['nim']=$this->model('User_model')->getUsern();
		$data['kls']=$this->model('User_model')->getUserk();
		$this->view('templates/header', $data);
		$this->view('home/index', $data);
		$this->view('templates/footer');
	}
	
}
?>