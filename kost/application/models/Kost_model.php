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
				"fasilitasKost" => $this->input->post('fasilitas',true),
				"hargaKost" => $this->input->post('harga',true),
				"imageKost" => $this->input->post('imageKost',true),
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

		public function ubahDataKost($id)
		{
			$data = [
				"idKost" => $this->input->post('id', true),
				"namaKost" => $this->input->post('nama', true),
				"totalKost" => $this->input->post('total', true),
				"alamatKost" => $this->input->post('alamat',true),
				"fasilitasKost" => $this->input->post('fasilitas',true),
				"hargaKost" => $this->input->post('harga',true),
				"imageKost" => $this->input->post('imageKost',true),
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
		
		public function getKostById($idKost)
		{
			$this->db->select('idKost, namaKost, totalKost, alamatKost, fasilitasKost, hargaKost, imageKost');
			$this->db->from('datakost');
			$this->db->where('idKost',$idKost);
			return $this->db->get();
			// return $this->db->get_where('datakost', ['idKost' => $idKost])->row_array();		
		}

		// public function detailKost($idKost)
		// {
		// 	$data = array(
		// 		"idKost" => $this->input->post('idKost', true),
		// 		"namaKost" => $this->input->post('namaKost', true),
		// 		"totalKost" => $this->input->post('totalKost', true),
		// 		"alamatKost" => $this->input->post('alamatKost', true),
		// 		"fasilitasKost" => $this->input->post('fasilitasKost', true),
		// 		"hargaKost" => $this->input->post('hargaKost', true),
		// 		"imageKost" => $this->input->post('imageKost', true)
		// 	);
		// 	$this->db->where('idKost',$idKost);
		// 	$this->db->update('dataKost',$data);
		// }
	}

?>