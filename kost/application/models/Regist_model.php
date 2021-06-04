<?php
    class Regist_model extends CI_Model{
        // public function cek_idUser(){
        //     $data = array('idKost' => $this->input->post('idKost', true));
        //     return $this->db->get_where('user',$data);
        // }
        // public function inputUser(){
        //     $data = array(
        //         'idUser' => $this->input->post('idUser', true),
        //         'nama' => $this->input->post('nama', true),
        //         'alamat' => $this->input->post('alamat', true),
        //         'email' => $this->input->post('email', true),
        //         'birth_date' => $this->input->post('birth_date', true),
        //         'username' => $this->input->post('username', true),
        //         'password' => $this->input->post('password', true),
        //     );
        //     return $this->db->insert('user',$data);
        // }
        public function __construct()
        {
            parent::__construct();
        }
    
        function register($nama,$alamat,$nohp,$email,$birth_date,$username,$password)
        {
            $data_user = array(
                'nama'=>$nama,
                'alamat'=>$alamat,
                'nohp'=>$nohp,
                'email'=>$email,
                'birth_date'=>$birth_date,
                'username'=>$username,
                'password'=>$password,
            );
            $this->db->insert('user',$data);
        }
    }
?>