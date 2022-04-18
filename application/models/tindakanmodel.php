<?php

class tindakanmodel extends CI_Model {

    function __construct()
    {
        $this->load->database();
    } 
    function get_tindakan()
    {
        $query = $this->db->query("SELECT * FROM tindakan");
        return $query->result_array();
    }
    function get_detail($a)
    {
        $this->db->where('id', $a);
        return $this->db->get('tindakan')->row_array();
    }

    function insert($a)
    {
        $data = [
            'id' => $a['id'],
            'nama' => $a['nama'],
            'biaya' => $a['biaya'],
        ];
        return $this->db->insert('tindakan', $data);
    }

    function update($a, $id)
    {
        $data = [
            'id' => $a['id'],
            'nama' => $a['nama'],
            'biaya' => $a['biaya'],
        ];
        $this->db->where('id', $id);
        return $this->db->update('tindakan', $data);
    }

    function delete($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('tindakan');
    }

    function get_keyword($keyword=null)
    {
        $this->db->select('*');
        $this->db->from('tindakan');
        if(!empty($keyword)){
            $this->db->like('nama', $keyword);
        }
        return $this->db->get()->result_array();
    }
}