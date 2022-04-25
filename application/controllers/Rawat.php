<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rawat extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('adminModel');
	}

	public function index() {
		$keyword = $this->input->post('keyword');
		$data = $this->adminModel->get_data_rawat($keyword);
		$data = array(
			'keyword'	=> $keyword,
			'data'		=> $data
		);
		$this->load->view('rawat/rawat',$data);
	}

	public function search() {
		$keyword = $this->input->post('keyword');
		$data = $this->adminModel->get_data_rawat($keyword);
		$data = array(
			'keyword'	=> $keyword,
			'data'		=> $data
		);
		$this->load->view('rawat/rawat',$data);
	}
	public function addRawat() {
		$this->load->view('rawat/addRawat');
	}
	public function insertRawat() {
		$id = $this->input->post('id');
        $id_rawat = "R00";
		$tgl_rawat = $this->input->post('tgl_rawat');
		$total_tindakan = $this->input->post('total_tindakan');  
		$total_obat = $this->input->post('total_obat');  
		$total_harga = $this->input->post('total_harga');  
		$uang_muka = $this->input->post('uang_muka');  
		$kurang = $this->input->post('kurang');  
		$id_pasien = $this->input->post('id_pasien');  

		$data = array(
			'id' => $id,
			'id_rawat'=>$id_rawat,
			'tgl_rawat'=>$tgl_rawat,
			'total_tindakan'=>$total_tindakan,
			'total_obat'=>$total_obat,
			'total_harga'=>$total_harga,
			'uang_muka'=>$uang_muka,
			'kurang'=>$kurang,
			'id_pasien'=>$id_pasien,
		);
		$this->adminModel->insert_rawat($data, 'rawats');
		redirect(base_url('rawat'));
	}
	public function edit($a)
    {
        $data['detail']=$this->rawatmodel->get_detail($a);
        $this->load->view('rawat/edit', $data);
    }

    public function update($id)
    {
        $this->load->library('upload');
        if ($this->rawatmodel->update($this->input->post(), $id)) {
            $this->session->set_flashdata('pesan', 'Data berhasil diubah');
            redirect(base_url('rawat'));
        }
    }
}
