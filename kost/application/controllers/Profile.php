<?php
    class Profile extends CI_Controller {

        public function __construct()
        {
            parent::__construct();
            $this->load->model('Profile_model');
            $this->load->library('form_validation');
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
                $this->load->view('profile', $data);
            }
        }

        public function editUser()
        {
            #$cek = $this->model_regis->cek_idUser()->num_rows();
            $data['sesi'] = $this->session->all_userdata();
            $idUser = $this->Profile_model->idUser();
            $insert = $this->Profile_model->editUser($idUser);
            redirect("login");
        }
    }
?>