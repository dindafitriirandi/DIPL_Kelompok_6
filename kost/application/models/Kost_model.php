<?php

class Kost_model extends CI_model {
	public function getAllKost()
	{
		return $this->db->get('datakost')->result_array();
	}

	public function tambahDataKost()
	{
		$data = [
			"idKost" => $this->input->post('id', true),
			"namaKost" => $this->input->post('nama', true),
			"totalKost" => $this->input->post('total', true),
			"alamatKost" => $this->input->post('alamat',true),
			"deskripsiKost" => $this->input->post('deskripsi',true),
			"hargaKost" => $this->input->post('harga',true),
			"noPemilikKost" => $this->input->post('nopemilik',true),
		];

		$this->db->insert('datakost', $data);
		$insert_id = $this->db->insert_id();

		return $insert_id;
	}

	public function hapusDataKost($idKost)
	{
		$this->db->where('idKost', $idKost);
		$this->db->delete('datakost');
	}

	public function getKostById($idKost)
	{
		return $this->db->get_where('datakost', ['idKost' => $idKost])->row_array();		
	}

	public function ubahDataKost($id)
	{

		$data = [
			"idKost" => $this->input->post('id', true),
			"namaKost" => $this->input->post('nama', true),
			"totalKost" => $this->input->post('total', true),
			"alamatKost" => $this->input->post('alamat',true),
			"deskripsiKost" => $this->input->post('deskripsi',true),
			"hargaKost" => $this->input->post('harga',true),
			"noPemilikKost" => $this->input->post('nopemilik',true),
		];

		$this->db->where('idKost',$id);
		$this->db->update('datakost', $data);
	} 

	public function cariDataKost()
	{
		$keyword = $this->input->post('keyword', true);
		$this->db->like('namaKost', $keyword);
		$this->db->or_like('alamatKost', $keyword);
		$this->db->or_like('noPemilikKost', $keyword);
		return $this->db->get('datakost')->result_array();
	}

}