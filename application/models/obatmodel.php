<?php

class obatmodel extends CI_Model {

    function __construct()
    {
        $this->load->database();
    } 
    function get_obat()
    {
        $query = $this->db->query("SELECT * FROM obat");
        return $query->result_array();
    }
    function get_detail($a)
    {
        $this->db->where('id', $a);
        return $this->db->get('obat')->row_array();
    }

    function insert($a)
    {
        $data = [
            'id' => $a['id'],
            'nama' => $a['nama'],
            'harga' => $a['harga'],
        ];
        return $this->db->insert('obat', $data);
    }

    function update($a, $id)
    {
        $data = [
            'id' => $a['id'],
            'nama' => $a['nama'],
            'harga' => $a['harga'],
        ];
        $this->db->where('id', $id);
        return $this->db->update('obat', $data);
    }

    function delete($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('obat');
    }

    function get_keyword($keyword=null)
    {
        $this->db->select('*');
        $this->db->from('obat');
        if(!empty($keyword)){
            $this->db->like('nama', $keyword);
        }
        return $this->db->get()->result_array();
    }
}