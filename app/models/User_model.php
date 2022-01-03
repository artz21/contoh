<?php

	class User_model{
		private $nama='Ainun Arliandito';
		private $nim='201851034';
		private $kls='B';

		public function getUser()
		{
			return $this->nama;
		}

		public function getUsern()
		{
			return $this->nim;
		}

		public function getUserk()
		{
			return $this->kls;
		}
	}
?>