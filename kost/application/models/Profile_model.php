<?php

    class Profile_model extends CI_Model{
        
        public function idUser()
        {
            $data = $this->input->post('idUser', true);
            return $data;
        }

        public function getUserby($idUser)
        {
            $this->db->select('idUser, nama, nohp, alamat, email, birth_date, username, password');
            $this->db->from('user');
            $this->db->where('idUser',$idUser);
            return $this->db->get();
            // return $this->db->get_where('user', ['idUser' => $idUser])->row_array();	
        }

        public function editUser($idUser)
        {
            $data = array(
                "idUser" => $this->input->post('idUser', true),
                "nama" => $this->input->post('nama', true),
                "nohp" => $this->input->post('nohp', true),
                "alamat" => $this->input->post('alamat', true),
                "email" => $this->input->post('email', true),
                "birth_date" => $this->input->post('birth_date', true),
                "username" => $this->input->post('username', true),
                "password" => $this->input->post('password', true),
            );
            $this->db->where('idUser',$idUser);
            $this->db->update('user',$data);
        }
    }

?>