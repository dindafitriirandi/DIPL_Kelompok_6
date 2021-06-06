<?php
    class Register extends CI_Controller {
        public function __construct(){
            parent::__construct();
            $this->load->library('form_validation');
            $this->load->library('session');
        }
        public function index()
        {
            $this->load->view('register');
        }
        public function proses_regis()
        {
			date_default_timezone_set("Asia/Jakarta");
            $this->form_validation->set_rules('nama','Nama','required|trim');
            $this->form_validation->set_rules('username','Username','required|trim|is_unique[user.username]',[
                'is_unique' => "Username is already registered !"
            ]);
            $this->form_validation->set_rules('password','Password','required|trim|min_length[6]|matches[repassword]',[
                'matches' => "password doesn't match !!!"
            ]);
            $this->form_validation->set_rules('repassword','Repassword','required|trim|min_length[6]|matches[password]',[
                'matches' => "password doesn't match !!!"
            ]);
            $this->form_validation->set_rules('birth_date','Birth_date','required|trim');
            // $this->form_validation->set_rules('level','Level','required|trim');
            if ($this->form_validation->run() == true){
                $this->load->view('register');
            }else{
                $nama = $this->input->post('nama');
                $nohp = $this->input->post('nohp');
                $alamat = $this->input->post('alamat');
                $email = $this->input->post('email');
                $birth_date = $this->input->post('birth_date');
                $username = $this->input->post('username');
                $password = $this->input->post('password');
                $level = $this->input->post('level');
                $data = [
                    'nama'=>$nama,
                    'nohp'=>$nohp,
                    'alamat'=>$alamat,
                    'email'=>$email,
                    'birth_date'=>date('Y-m-d',strtotime($birth_date)),
                    'username'=>$username,
                    'password'=>$password,
					'level' => $level,
					'usercreated_at' => date('Y-m-d')
                ];
				$this->db->insert('user',$data);
				// var_dump($data);
                redirect('login');
            }
        }
    }
?>
