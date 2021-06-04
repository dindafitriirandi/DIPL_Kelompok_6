<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class App_model extends CI_Model {

	public function proseslogin($username,$password){
		$this->db->where('username',$username);
		$this->db->where('username',$password);
		return $this->db->get('user')->row();
	}
	
}
