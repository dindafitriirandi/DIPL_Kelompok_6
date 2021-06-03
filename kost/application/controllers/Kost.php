<?php

class Kost extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Kost_model');
		$this->load->library('form_validation');
	}

	public function listkost()
	{
		if (!$this->session->has_userdata('user')){			
			redirect('login');
			exit;
		}else{

			$data['judul'] = 'Daftar Kost';
			$data['sesi'] = $this->session->all_userdata();
			$data['datakost'] = $this->Kost_model->getAllKost();
			if($this->input->post('keyword')){
				$data['datakost'] = $this->Kost_model->cariDataKost();
			}
			// $this->load->view('templates/header', $data);
			$this->load->view('kost/listkost', $data);
			// $this->load->view('templates/footer');
		}
	}

	public function listkostowner()
	{
		if (!$this->session->has_userdata('user')){			
			redirect('login');
			exit;
		}else{

			$data['judul'] = 'Daftar Kost';
			$data['sesi'] = $this->session->all_userdata();
			$data['datakost'] = $this->Kost_model->getAllKost();
			if($this->input->post('keyword')){
				$data['datakost'] = $this->Kost_model->cariDataKost();
			}
			// $this->load->view('templates/header', $data);
			$this->load->view('kost/listkostowner', $data);
			// $this->load->view('templates/footer');
		}
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

	public function detailkost($idKost)
	{
		if (!$this->session->has_userdata('user')){			
			redirect('login');
			exit;
		}
		$data['judul'] = 'Detail Data Kost';
		$data['sesi'] = $this->session->all_userdata();
		$data['kost'] = $this->Kost_model->getKostById($idKost);
		// $this->load->view('templates/header', $data);
		$this->load->view('kost/detailkost', $data);
		// $this->load->view('templates/footer');
			
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
	
}