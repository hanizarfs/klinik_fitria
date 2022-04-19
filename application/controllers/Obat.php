<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Obat extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->library(array('form_validation','email', 'session'));
        $this->load->helper(array('text', 'url', 'cookie', 'string'));
        $this->load->model('obatmodel');
    }

    function index()
    {
        $keyword = $this->input->post('keyword');
        $data = $this->obatmodel->get_keyword($keyword);
        $data = array(
            'keyword' => $keyword,
            'data' => $data
        );
        $this->load->view('obat/obat', $data);
    }

    public function detail($a = null)
    {
        $data['detail'] = $this->obatmodel->get_detail($a);
        $this->load->view('obat/detail', $data);
    }

    public function add()
    {
        $this->load->view('obat/add');
    }

    public function insert()
    {
        $id_obat = $this->input->post('id_obat');
		$nama_obat = $this->input->post('nama_obat');
		$harga = $this->input->post('harga');
		$data = array(
			'id_obat' => $id_obat,
			'nama_obat' => $nama_obat,
			'harga' => $harga,
		);
		$this->obatmodel->insert($data, 'obats');
		redirect(base_url('obat'));
    }
    public function edit($a)
    {
        $data['detail'] = $this->obatmodel->get_detail($a);
        $this->load->view('obat/edit', $data);
    }

    public function update($id)
    {
        $this->load->library('upload');
        if ($this->obatmodel->update($this->input->post(), $id)) {
            $this->session->set_flashdata('pesan', 'Data berhasil diubah');
            redirect(base_url('obat'));
        }
    }

    public function delete($id)
    {
        if ($this->obatmodel->delete($id)) {
            $this->session->set_flashdata('pesan', 'Data berhasil dihapus');
            redirect(base_url('obat'));
        }
    }

    public function search()
    {
        $keyword = $this->input->post('keyword');
        $data['obat'] = $this->obatmodel->get_keyword($keyword);
        $data = array(
            'keyword' => $keyword,
            'data' => $data
        );
        $this->load->view('obat/obat', $data);
    }
}