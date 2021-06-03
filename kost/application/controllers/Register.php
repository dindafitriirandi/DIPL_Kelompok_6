<?php

class Register extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->library('session');
	}
	public function index()
	{
        $this->form_validation->set_rules('nama','Nama','required|trim');
        $this->form_validation->set_rules('username','Username','required|trim|is_unique[user.username]',[
            'is_unique' => "Username is already registered !"
        ]);
        $this->form_validation->set_rules('password','Password','required|trim|min_length[6]|matches[repassword_user]',[
            'matches' => "password doesn't match !!!"
        ]);
        $this->form_validation->set_rules('email','Email','required|trim');
        $this->form_validation->set_rules('nohp','Nohp','required|trim');
		$this->form_validation->set_rules('birth_date','Birth_date','required|trim');
        if ($this->form_validation->run() == false){
            $this->load->view('register');
        }else{
            $nama = $this->input->post('nama');
            $nohp = $this->input->post('nohp');
            $alamat = $this->input->post('alamat');
            $email = $this->input->post('email');
            $birth_date = $this->input->post('birth_date');
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $data = [
				'nama'=>$nama,
                'nohp'=>$nohp,
                'alamat'=>$alamat,
                'email'=>$email,
				'birth_date'=>$birth_date,
				'username'=>$username,
				'password_user'=>$password,
			];
			$this->db->insert('user',$data);
            redirect('login');
        }
	}
}