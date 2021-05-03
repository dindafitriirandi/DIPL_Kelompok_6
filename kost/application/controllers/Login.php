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
        $this->form_validation->set_rules('password_user','Password_user','required|trim');
        if($this->form_validation->run() == false){
            $this->load->view('login/index');
        }else{
            $username = $this->input->post('username');
			$password = $this->input->post('password_user');
			$user = $this->db->get_where('user',['username'=> $username])->row_array();
            if ($user){
                if($password === $user['password_user']){
                    $sesi['user'] = [
                        "idPencariKost" => $user['idPencariKost'],
                        "namaPencari" => $user['namaPencari'],
                        "noPencari" => $user['noPencari'],
                        "alamatPencari" => $user['alamatPencari'],
                        "emailPencari" => $user['emailPencari'],
                        "username" => $user['username'],
                        "password_user" => $user['password_user']
                    ];
                    $this->session->set_userdata($sesi);
                    redirect('home/');
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