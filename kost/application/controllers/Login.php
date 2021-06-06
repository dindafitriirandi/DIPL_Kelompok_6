<?php

class Login extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->library('session');
        $this->load->library('form_validation');
        if ($this->session->has_userdata('user')){
            redirect('home');
        }
	}
	public function index()
	{
        $this->form_validation->set_rules('username','Username','required|trim');
        $this->form_validation->set_rules('password','Password','required|trim');
        if($this->form_validation->run() == false){
            $this->load->view('login');
        }else{
            $username = $this->input->post('username');
			$password = $this->input->post('password');
			$user = $this->db->get_where('user',['username'=> $username])->row_array();
            if ($user){
                if($password === $user['password']){
                    $sesi['user'] = [
                        "idUser" => $user['idUser'],
                        "nama" => $user['nama'],
                        "nohp" => $user['nohp'],
                        "alamat" => $user['alamat'],
                        "email" => $user['email'],
                        "birth_date" => $user['birth_date'],
                        "username" => $user['username'],
                        "password" => $user['password'],
						"level" => $user['level'],
						"usercreated_at" => $user['created_at']
                    ];
                    $this->session->set_userdata($sesi);
                    redirect('home');
                }else{
                    $this->session->set_flashdata('flash','Wrong Password !');
                    redirect('login');
                }
            }else{
                $this->session->set_flashdata('flash','Unregistered user !');
                redirect('login');
			}
		}

	}
	
}
