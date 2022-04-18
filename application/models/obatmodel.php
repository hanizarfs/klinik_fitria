<?php

class obatmodel extends CI_Model {

    function __construct()
    {
        $this->load->database();
    } 
    function get_obat()
    {
        $query = $this->db->query("SELECT * FROM obats");
        return $query->result_array();
    }
    function get_detail($a)
    {
        $this->db->where('id_obat', $a);
        return $this->db->get('obats')->row_array();
    }

    function insert($a)
    {
        $data = [
            'id_obat' => $a['id_obat'],
            'nama_obat' => $a['nama_obat'],
            'harga' => $a['harga'],
        ];
        return $this->db->insert('obats', $data);
    }

    function update($a, $id_obat)
    {
        $data = [
            'id_obat' => $a['id_obat'],
            'nama_obat' => $a['nama_obat'],
            'harga' => $a['harga'],
        ];
        $this->db->where('id_obat', $id_obat);
        return $this->db->update('obats', $data);
    }

    function delete($id_obat)
    {
        $this->db->where('id_obat', $id);
        return $this->db->delete('obats');
    }

    function get_keyword($keyword=null)
    {
        $this->db->select('*');
        $this->db->from('obats');
        if(!empty($keyword)){
            $this->db->like('nama_obat', $keyword);
        }
        return $this->db->get()->result_array();
    }
}