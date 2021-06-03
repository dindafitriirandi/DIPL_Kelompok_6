<?php
class Settings extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('model_settings');
        $this->load->library('form_validation');
    }

    function index(){
        $this->load->view('profile');
    }

    function do_settings(){
        #$cek = $this->model_regis->cek_idUser()->num_rows();
        $idUser = $this->Profile_model->idUser();
        $insert = $this->Profile_model->update_data_pasien($idUser);
        redirect("login");
    }
}
?>