<?php

class tindakanmodel extends CI_Model {

    function __construct()
    {
        $this->load->database();
    } 
    function get_tindakan()
    {
        $query = $this->db->query("SELECT * FROM tindakans");
        return $query->result_array();
    }
    function get_detail($a)
    {
        $this->db->where('id_tindakan', $a);
        return $this->db->get('tindakans')->row_array();
    }

    function insert($a)
    {
        $data = [
            'id_tindakan' => $a['id_tindakan'],
            'nama_tindakan' => $a['nama_tindakan'],
            'biaya' => $a['biaya'],
        ];
        return $this->db->insert('tindakans', $data);
    }

    function update($a, $id_tindakan)
    {
        $data = [
            'id_tindakan' => $a['id_tindakan'],
            'nama_tindakan' => $a['nama_tindakan'],
            'biaya' => $a['biaya'],
        ];
        $this->db->where('id_tindakan', $id_tindakan);
        return $this->db->update('tindakans', $data);
    }

    function delete($id_tindakan)
    {
        $this->db->where('id_tindakan', $id_tindakan);
        return $this->db->delete('tindakans');
    }

    function get_keyword($keyword=null)
    {
        $this->db->select('*');
        $this->db->from('tindakans');
        if(!empty($keyword)){
            $this->db->like('nama_tindakan', $keyword);
        }
        return $this->db->get()->result_array();
    }
}