<?php

class adminModel extends CI_Model {
	function __construct() {
		$this->load->database();
	}

	public function get_data_pasien($keyword=null){
		$this->db->select('*');
		$this->db->from('pasiens');
		if(!empty($keyword)){
			$this->db->like('nama_pasien',$keyword);
		}
		return $this->db->get()->result_array();
	}

	public function get_data_tindakan($keyword=null){
		$this->db->select('*');
		$this->db->from('tindakans');
		if(!empty($keyword)){
			$this->db->like('nama_pasien',$keyword);
		}
		return $this->db->get()->result_array();
	}

	public function get_data_rawat($keyword=null){
		$this->db->select('*');
		$this->db->from('rawats');
		if(!empty($keyword)){
			$this->db->like('nama_pasien',$keyword);
		}
		return $this->db->get()->result_array();
	}

	public function get_data_obat($keyword=null){
		$this->db->select('*');
		$this->db->from('obats');
		if(!empty($keyword)){
			$this->db->like('nama_pasien',$keyword);
		}
		return $this->db->get()->result_array();
	}

	function insertPasien($a) {
        $data = [
			'nama_pasien' => $a['nama_pasien'],
			'alamat' => $a['alamat'],
			'tgl_lahir' => $a['tgl_lahir'],
			'no_telp' => $a['no_telp'],
		];
        return $this->db->insert('pasiens', $data);
    }
}
