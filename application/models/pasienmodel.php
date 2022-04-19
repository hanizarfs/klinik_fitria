<?php

class pasienmodel extends CI_Model {

    function __construct()
    {
        $this->load->database();
    } 
    function get_pasien()
    {
        $query = $this->db->query("SELECT * FROM pasiens");
        return $query->result_array();
    }
    function get_detail_pasien($a)
    {
        $this->db->where('id_pasien', $a);
        return $this->db->get('pasiens')->row_array();
    }
    function insert_pasien($a) {
        $data = [
			'id_pasien' => $a['id_pasien'],
			'nama_pasien' => $a['nama_pasien'],
			'alamat' => $a['alamat'],
			'tgl_lahir' => $a['tgl_lahir'],
			'no_telp' => $a['no_telp'],
		];
        return $this->db->insert('pasiens', $data);
    }
    public function get_data_pasien($keyword=null){
		$this->db->select('*');
		$this->db->from('pasiens');
		if(!empty($keyword)){
			$this->db->like('nama_pasien',$keyword);
		}
		return $this->db->get()->result_array();
	}
	function update_pasien($a, $id_pasien)
    {
        $data = [
            'id_pasien' => $a['id_pasien'],
            'nama_pasien' => $a['nama_pasien'],
            'alamat' => $a['alamat'],
            'tgl_lahir' => $a['tgl_lahir'],
            'no_telp' => $a['no_telp'],
        ];
        $this->db->where('id_pasien', $id_obat);
        return $this->db->update('pasiens', $data);
    }
}