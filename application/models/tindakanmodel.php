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
            'id_rawat' => $a['id_rawat'],
            'tgl_rawat' => $a['tgl_rawat'],
            'total_tindakan' => $a[ 'total_tindakan'],
            'total_obat' => $a[ 'total_obat'],
            'total_harga' => $a[ 'total_harga'],
            'uang_muka' => $a['uang_muka'],
            'kurang' => $a['kurang'],
            'id_pasien' => $a[ 'id_pasien'],
        ];
        return $this->db->insert('tindakans', $data);
    }
    function update($a, $id_tindakan)
    {
        $data = [
            'id_rawat' => $a['id_rawat'],
            'tgl_rawat' => $a['tgl_rawat'],
            'total_tindakan' => $a[ 'total_tindakan'],
            'total_obat' => $a[ 'total_obat'],
            'total_harga' => $a[ 'total_harga'],
            'uang_muka' => $a['uang_muka'],
            'kurang' => $a['kurang'],
            'id_pasien' => $a[ 'id_pasien'],
        ];
        $this->db->where('id_tindakan', $id_tindakan);
        return $this->db->update('tindakans', $data);
    }

    function delete($id_tindakan)
    {
        $this->db->where('id_tindakan', $id);
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
// class tindakanmodel extends CI_Model {

//     function __construct()
//     {
//         $this->load->database();
//     } 
//     function get_tindakan()
//     {
//         $query = $this->db->query("SELECT * FROM tindakans");
//         return $query->result_array();
//     }
//     function get_detail($a)
//     {
//         $this->db->where('id_tindakan', $a);
//         return $this->db->get('tindakans')->row_array();
//     }

//     function insert($a)
//     {
//         $data = [
//             'id_tindakan' => $a['id_tindakan'],
//             'nama_tindakan' => $a['nama_tindakan'],
//             'biaya' => $a['biaya'],
//         ];
//         return $this->db->insert('tindakans', $data);
//     }

//     function update($a, $id_tindakan)
//     {
//         $data = [
//             'id_tindakan' => $a['id_tindakan'],
//             'nama_tindakan' => $a['nama_tindakan'],
//             'biaya' => $a['biaya'],
//         ];
//         $this->db->where('id_tindakan', $id_tindakan);
//         return $this->db->update('tindakans', $data);
//     }

//     function delete($id_tindakan)
//     {
//         $this->db->where('id_tindakan', $id_tindakan);
//         return $this->db->delete('tindakans');
//     }

//     function get_keyword($keyword=null)
//     {
//         $this->db->select('*');
//         $this->db->from('tindakans');
//         if(!empty($keyword)){
//             $this->db->like('nama_tindakan', $keyword);
//         }
//         return $this->db->get()->result_array();
//     }
