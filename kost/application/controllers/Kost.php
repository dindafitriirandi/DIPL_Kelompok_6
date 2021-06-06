<?php

class Kost extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Kost_model');
		$this->load->model('Profile_model');
		// $this->load->model('DetailKost_model');
		$this->load->library('form_validation');
		$this->load->library('upload');
		$this->load->helper('date');
		
	}

	public function listkost()
	{
		if (!$this->session->has_userdata('user')){			
			redirect('login');
			exit;
		}else{
			$data['judul'] = 'Daftar Kost';
			$data['sesi'] = $this->session->all_userdata();
			if($data['sesi']['user']['level'] === "pemilik"){
				$data['datakost'] = $this->Kost_model->getAllKostOwner($data['sesi']['user']['idUser']);
				if($this->input->get('keyword')){
					$data['datakost'] = $this->Kost_model->cariDataKostOwner($this->input->get('keyword'),$data['sesi']['user']['idUser']);
				}
				return $this->load->view('kost/listkostowner',$data);
			}else{
				$data['datakost'] = $this->Kost_model->getAllKost();
				if($this->input->get('keyword')){
				$data['datakost'] = $this->Kost_model->cariDataKost($this->input->get('keyword'));
			}
				return $this->load->view('kost/listkost',$data);
			}
		}
	}

	public function tambahkostowner()
	{
		date_default_timezone_set("Asia/Jakarta");
		if (!$this->session->has_userdata('user')){			
			redirect('login');
			exit;
		}else{
			$sesiUser = $this->session->userdata('user');
			$this->form_validation->set_rules('namaKost','NamaKost','required|trim');
			$this->form_validation->set_rules('alamatKost','AlamatKost','required|trim');
			$this->form_validation->set_rules('facility','Facility','required|trim');
			$this->form_validation->set_rules('totalKost','TotalKost','required|trim');
			$this->form_validation->set_rules('hargaKost','HargaKost','required|trim');
			// $this->form_validation->set_rules('imageKost','ImageKost','required|trim');
		
			if($this->form_validation->run() == false){
				redirect('kost/listkost');
			}
			$files = $_FILES['imageKost'];
				$config['upload_path']          = './uploads/kost_image/';
				$config['allowed_types']        = 'jpg|png|jpeg';
				$config['max_size']             = 5000;
				$_FILES['files']['name'] = $files['name'];
				$config['file_name']=$files['name'];
				$_FILES['files']['type'] = $files['type'];
				$_FILES['files']['tmp_name'] = $files['tmp_name'];
				$_FILES['files']['error'] = $files['error'];
				$_FILES['files']['size'] = $files['size'];
				$this->upload->initialize($config);
				if(!$this->upload->do_upload('imageKost')){
					$imageKost = "default.jpg";
			}else{
					$imageKost = $this->upload->data('file_name');
			}
			$namaKost = $this->input->post('namaKost');
			$alamatKost = $this->input->post('alamatKost');
			$facility = $this->input->post('facility');
			$totalKost = $this->input->post('totalKost');
			$hargaKost = $this->input->post('hargaKost');
			$data = [
				'namaKost' => $namaKost,
				'totalKost' => $totalKost,
				'alamatKost' => $alamatKost,
				'fasilitasKost' => $facility,
				'hargaKost' => $hargaKost,
				'imageKost' => $imageKost,
				'user_id' => $sesiUser['idUser'],
				"created_at" => date('Y-m-d')
			];
			$this->db->insert('datakost',$data);
			redirect('kost/listkost');
		}
	}
	public function editKostOwner($id)
	{
		date_default_timezone_set("Asia/Jakarta");
		if (!$this->session->has_userdata('user')){			
			redirect('login');
			exit;
		}else{
			$this->form_validation->set_rules('namaKost','NamaKost','required|trim');
			$this->form_validation->set_rules('alamatKost','AlamatKost','required|trim');
			$this->form_validation->set_rules('facility','Facility','required|trim');
			$this->form_validation->set_rules('totalKost','TotalKost','required|trim');
			$this->form_validation->set_rules('hargaKost','HargaKost','required|trim');
			if($this->form_validation->run() == false){
				redirect('kost/listkost');
			}
			$namaKost = $this->input->post('namaKost');
			$alamatKost = $this->input->post('alamatKost');
			$facility = $this->input->post('facility');
			$totalKost = $this->input->post('totalKost');
			$hargaKost = $this->input->post('hargaKost');
			$data = [
				'namaKost' => $namaKost,
				'totalKost' => $totalKost,
				'alamatKost' => $alamatKost,
				'fasilitasKost' => $facility,
				'hargaKost' => $hargaKost,
				"created_at" => date('Y-m-d')
			];
				$files = $_FILES['imageKost'];
				if($files['name']){
					$config['upload_path']          = './uploads/kost_image/';
					$config['allowed_types']        = 'jpg|png|jpeg';
				$config['max_size']             = 5000;
				$_FILES['files']['name'] = $files['name'];
				$config['file_name']=$files['name'];
				$_FILES['files']['type'] = $files['type'];
				$_FILES['files']['tmp_name'] = $files['tmp_name'];
				$_FILES['files']['error'] = $files['error'];
				$_FILES['files']['size'] = $files['size'];
				$this->upload->initialize($config);
				if(!$this->upload->do_upload('imageKost')){
					$data['imageKost'] = "default.jpg";
					// var_dump($this->upload->display_errors());
				}else{
					$data['imageKost'] = $this->upload->data('file_name');
			}
				}
			$this->db->where('idKost',$id);
			$this->db->update('datakost',$data);
			return redirect("kost/detailkost/$id");
		}
	}
	public function detailkost($idKost)
	{
		if (!$this->session->has_userdata('user')){			
			redirect('login');
			exit;
		}else{
			$data['judul'] = 'Detail Kost';
			$data['sesi'] = $this->session->all_userdata();
			$data['datakost'] = $this->Kost_model->getDataKost($idKost);
			if($data['sesi']['user']['level'] === "pemilik"){
				return $this->load->view('kost/detailkostowner', $data);
			}
			return $this->load->view('kost/detailkost',$data);
		}
	}
	public function orderPage($idPemesanan)
	{
		$data['sesi'] = $this->session->all_userdata();
		$data['pemesananKost'] = $this->Kost_model->getDataOrder($idPemesanan);
		return $this->load->view('order',$data);
	}
	public function order($idKost)
	{
		$this->form_validation->set_rules('startDate','StartDate','required|trim');
		$this->form_validation->set_rules('duration','Duration','required|trim');
		if($this->form_validation->run() == false){
				return redirect("kost/detailkost/$idKost");
		}
		$data['judul'] = "Order Kost";
		$data['sesi'] = $this->session->userdata('user');
		$datakost =  $this->Kost_model->getDataKost($idKost);
		$startDate = $this->input->post('startDate');
		$duration = $this->input->post('duration');
		$endDate = date("Y-m-d",strtotime($startDate. " + $duration months"));
		$calcPrice = $datakost['hargaKost'] * $duration;
		$idPemesanan = "ORDER".mt_rand(0,99).mt_rand(100,999);
		$data['dataOrder'] = [
			"idPemesanan" => $idPemesanan,
			"user_id" => $data['sesi']['idUser'],
			"kost_id" => $idKost,
			"startDate" => date("Y-m-d",strtotime($startDate)),
			"duration" =>(int)$duration,
			"endDate" => $endDate,
			"totalHargaKost" => $calcPrice,
			"statusPemesanan" => "Booked",
			"created_at" => date("Y-m-d")
		];
		$this->db->insert('pemesanankost',$data['dataOrder']);
		// var_dump($data['dataOrder']);
		return redirect('kost/orderpage/'.$idPemesanan);
		// var_dump($data);
	}

	public function transactionPage($idpemesanan)
	{
		$data['sesi'] = $this->session->all_userdata();
		$data['pemesananKost'] = $this->Kost_model->getDataOrder($idpemesanan);
		return $this->load->view('transaction',$data);
		// var_dump($data['pemesananKost']);
	}
	public function transaction($idpemesanan)
	{
		$this->form_validation->set_rules('reason','Reason','required|trim');
		$this->form_validation->set_rules('duration','Duration','required|trim');
		$this->form_validation->set_rules('totalHargaKost','TotalHargaKost','required|trim');

		
		if($this->form_validation->run() == false){
				return redirect("kost/orderpage/$idpemesanan");
				// var_dump($data['updateDataOrder']);
			}
			$reason = $this->input->post('reason');
		$duration = $this->input->post('duration');
		$totalHargaKost = $this->input->post('totalHargaKost');
		$data['updateDataOrder'] = [
			'reason' => $reason,
			'duration' => (int)$duration,
			'totalHargaKost' => (int)$totalHargaKost,

		];
		$this->db->where('idPemesanan',$idpemesanan);
		$this->db->update('pemesanankost',$data['updateDataOrder']);
		return redirect('kost/transactionpage/'.$idpemesanan);
	}

	public function finalize($idpemesanan)
	{
		$this->form_validation->set_rules('payment','Payment','required|trim');
		if($this->form_validation->run() == false){
			return redirect("kost/listkost");
		}
		$payment = $this->input->post('payment');
		$data = [
			'paymentMethod' => $payment
		];
		$this->db->where('idPemesanan',$idpemesanan);
		$this->db->update('pemesanankost',$data);
		return redirect('kost/listkost');
	}
	public function tambah()
	{
		if (!$this->session->has_userdata('user')){			
			redirect('login');
			exit;
		}
		$data['judul'] = 'Form Tambah Data Kost';
		$data['sesi'] = $this->session->all_userdata();
		$this->form_validation->set_rules('idKost','id','required');
		$this->form_validation->set_rules('namaKost','nama','required');
		$this->form_validation->set_rules('totalKost','total','required');
		$this->form_validation->set_rules('alamatKost','alamat','required');
		$this->form_validation->set_rules('deskripsiKost','deskripsi','required');
		$this->form_validation->set_rules('hargaKost','harga','required');
		$this->form_validation->set_rules('noPemilikKost','nopemilik','required');
		

		if($this->form_validation->run() == FALSE){	
			// $this->load->view('templates/header', $data);
			$this->load->view('kost/tambah', $data);
			// $this->load->view('templates/footer');
		}else {
			$this->Kost_model->tambahDataKost();
			$this->session->set_flashdata('flash','Ditambahkan');
			redirect('kost');
		}
	}

	public function hapus($idKost)
	{
		if (!$this->session->has_userdata('user')){			
			redirect('login');
			exit;
		}
		$this->Kost_model->hapusDataKost($idKost);
		$this->session->set_flashdata('flash','Dihapus');
		redirect('kost/listkost');
	}

	public function ubah($idKost)
	{
		if (!$this->session->has_userdata('user')){			
			redirect('login');
			exit;
		}
		$data['judul'] = 'Form Ubah Data Kost';
		$data['sesi'] = $this->session->all_userdata();
		$data['kost'] = $this->Kost_model->getKostById($idKost);

		$this->form_validation->set_rules('idKost','id','required');
		$this->form_validation->set_rules('namaKost','nama','required');
		$this->form_validation->set_rules('totalKost','total','required');
		$this->form_validation->set_rules('alamatKost','alamat','required');
		$this->form_validation->set_rules('fasilitasKost','fasilitas','required');
		$this->form_validation->set_rules('hargaKost','harga','required');
		$this->form_validation->set_rules('imageKost','imageKost','required');

		if($this->form_validation->run() == FALSE){	
			// $this->load->view('templates/header', $data);
			$this->load->view('kost/ubah', $data);
			// $this->load->view('templates/footer');	
		} else {
			$id = $this->input->post('idKost');
			$this->Kost_model->ubahDataKost($idKost);
			$this->session->set_flashdata('flash','Diubah');
			redirect('kost');
			
		}
	}
	
	

	// public function editUser()
	// {
	// 	if (!$this->session->has_userdata('user')){			
	// 		redirect('login');
	// 		exit;
	// 	}else{
	// 		$data['judul'] = 'Edit User';
	// 		$data['sesi'] = $this->session->all_userdata();
	// 		// $data['user'] = $this->Profile_model->getUserby($idUser);
	// 		$data['item']['entries'] = $this->Profile_model->getUserby($idUser);
	// 		$this->load->view('profile', $data);
	// 	}
    // }
}
