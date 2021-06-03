<?php

class Model_settings extends CI_Model{
    
    function nik(){
        $data = $this->input->post('idUser', true);
        return $data;
    }

    function get_pasien_by($idUser){
        $this->db->select('idUser, nama, no hp, alamat, email, birth_date, username, password');
        $this->db->from('user');
        $this->db->where('idUser',$idUser);
        return $this->db->get();
    }

    function update_data_pasien($nik){
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