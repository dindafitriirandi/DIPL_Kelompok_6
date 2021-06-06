<?php
    class Profile extends CI_Controller {

        public function __construct()
        {
            parent::__construct();
            $this->load->model('Profile_model');
            $this->load->library('form_validation');
        }

        public function index()
        {
            if (!$this->session->has_userdata('user')){			
                redirect('login');
                exit;
            }else{
                $data['sesi'] = $this->session->all_userdata();
				$data['user'] = $this->Profile_model->getUserby($data['sesi']['user']['idUser']);
				// var_dump($data);
                $this->load->view('profile', $data);
            }
        }

        public function editUser($idUser)
        {
			$this->form_validation->set_rules('nama','Nama','required|trim');
			$this->form_validation->set_rules('nohp','Nohp','required|trim');
			$this->form_validation->set_rules('email','Email','required|trim');
			$this->form_validation->set_rules('alamat','Alamat','required|trim');
            $this->form_validation->set_rules('username','Username','required|trim');
            $this->form_validation->set_rules('birth_date','Birth_date','required|trim');
			$this->form_validation->set_rules('newpassword','Newpassword','trim|min_length[6]|matches[renewpassword]',[
                'matches' => "password doesn't match !!!"
            ]);
            $this->form_validation->set_rules('renewpassword','Renewpassword','trim|min_length[6]|matches[newpassword]',[
                'matches' => "password doesn't match !!!"
            ]);
			if($this->form_validation->run() == false){
				$this->session->set_flashdata('error',validation_errors());
				redirect('profile');
				// var_dump($data['user']);
			}
			$nama = $this->input->post('nama');
			$birth_date = $this->input->post('birth_date');
			$email = $this->input->post('email');
			$nohp = $this->input->post('nohp');
			$username = $this->input->post('username');
			$alamat = $this->input->post('alamat');
			$oldpassword = $this->input->post('oldpassword');
			$newpassword = $this->input->post('newpassword');
            $data['sesi'] = $this->session->all_userdata();
			$data['user'] = [
				'nama' => $nama,
				'birth_date' => date('Y-m-d',strtotime($birth_date)),
				'email' => $email,
				'nohp' => $nohp,
				'alamat' => $alamat,
				'username' => $username,
			];
			if($oldpassword)
			{
				$oldpass = $this->db->get_where('user',['idUser'=>$idUser])->row_array();
				if($oldpassword === $oldpass['password']){
					$data['user']['password'] = $newpassword;
				}else{
					$this->session->set_flashdata('error',"old password error");
					redirect('profile');
				}
			}
			// var_dump($data['user']);
			$this->db->where('idUser',$idUser);
			$this->db->update('user',$data['user']);
			$this->session->set_flashdata('success',"Update account success");
			return redirect('profile');
            // $insert = $this->Profile_model->editUser($idUser);
            // redirect("login");
        }
    }
?>
