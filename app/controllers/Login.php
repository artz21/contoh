<?php

	class Login extends Controller
	{
		
		
		public function index(){
			$data['judul']='Login';		
			$this->view('login/index');
			
		}

		public function proses(){

			$username = $_POST['username'];
			$password = $_POST['password'];
			$data['usr']=$this->model('Login_model')->getUser($username, $password);
			if ($data['usr'] != null) {
  				// jika user dan password cocok
  				$_SESSION['user'] = $data['usr']['level'];
  				header('Location: ../home');
			} else {
				$_SESSION['user'] = null;
  			// jika user dan password tidak cocok
  				echo "<script>window.alert('Username atau Password Salah!!!'); window.location.href='../login'</script>";
			}
			
		}

		public function logOut(){
			session_destroy();
			echo "<script> window.location.href='../login'</script>";
		}
	}

?>