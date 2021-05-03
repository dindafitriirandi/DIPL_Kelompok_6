<?php

class Register extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->library('session');
	}
	public function index()
	{
        $this->form_validation->set_rules('nama_user','Nama_user','required|trim');
        $this->form_validation->set_rules('username','Username','required|trim|is_unique[user.username]',[
            'is_unique' => "Username is already registered !"
        ]);
        $this->form_validation->set_rules('password_user','Password_user','required|trim|min_length[6]|matches[repassword_user]',[
            'matches' => "password doesn't match !!!"
        ]);
        $this->form_validation->set_rules('email_user','Email_user','required|trim');
        $this->form_validation->set_rules('no_user','No_user','required|trim');
		$this->form_validation->set_rules('birth_date','Birth_date','required|trim');
        if ($this->form_validation->run() == false){
            $this->load->view('register/index');
        }else{
            $nama_user = $this->input->post('nama_user');
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $email = $this->input->post('email');
            $nouser = $this->input->post('nouser');
            $birth_date = $this->input->post('birth_date');
            $data = [
				'nama_user'=>$nama_user,
				'username'=>$username,
				'password_user'=>$password,
                'email'=>$email,
                'nouser'=>$nouser,
				'birth_date'=>$birth_date
			];
			$this->db->insert('user',$data);
            redirect('login/');
        }
	}
}