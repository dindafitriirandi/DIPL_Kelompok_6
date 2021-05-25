<?php

class Home extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->library('session');
	}
	public function index($nama = "")
	{
		if (!$this->session->has_userdata('user')){			
			redirect('login');
			exit;
		}else{
			$data['judul'] = 'Kost Hunter';
			$data['nama'] = $nama;
			$data['sesi'] = $this->session->all_userdata();
			$this->load->view('templates/header', $data);
			$this->load->view('home/index', $data);
			$this->load->view('templates/footer');
		}

	}
	public function logout(){
		$array_items = array('user');
		$this->session->unset_userdata($array_items);
		redirect('login');
	}
	
}