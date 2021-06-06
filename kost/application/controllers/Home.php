<?php

class Home extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->library('session');
		$this->load->model('Profile_model');
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
			$this->load->view('home', $data);
		}
	}
	public function profile(){
        $sesi = $this->session->userdata('user');
        $data= $this->Profile_model->get_user_by($sesi['idUser']);
				var_dump($data);
      }
	public function logout(){
		$array_items = array('user');
		$this->session->unset_userdata($array_items);
		redirect('login');
	}
	
}
