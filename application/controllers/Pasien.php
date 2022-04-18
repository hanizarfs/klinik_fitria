<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pasien extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('adminModel');
	}

	public function index() {
		$data['data'] = $this->adminModel->get_data_pasien();
		$this->load->view('pasien/pasien',$data);
	}

	public function search() {
		$keyword = $this->input->post('keyword');
		$data = $this->adminModel->get_data_pasien($keyword);
		$data = array(
			'keyword'	=> $keyword,
			'data'		=> $data
		);
		$this->load->view('pasien/pasien',$data);
	}

	public function addPasien() {
		$this->load->view('pasien/addPasien');
	}

	public function insertPasien() {
		$id_pasien = $this->input->post('id_pasien');
		$nama_pasien = $this->input->post('nama_pasien');
		$alamat = $this->input->post('alamat');
		$tgl_lahir = $this->input->post('tgl_lahir');  
		$no_telp = $this->input->post('no_telp');  

		$data = array(
			'id_pasien' => $id_pasien,
			'nama_pasien' => $nama_pasien,
			'alamat' => $alamat,
			'tgl_lahir' => $tgl_lahir,
			'no_telp' => $no_telp,
		);
		$this->adminModel->insert_pasien($data, 'pasiens');
		redirect(base_url('pasien'));
	}

	public function addPenerbit() {
		$this->load->view('admin/addPenerbit');
	}

	public function insertPenerbit() {
		$id_penerbit = $this->input->post('id_penerbit');
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');  
		$kota = $this->input->post('kota');  
		$telepon = $this->input->post('telepon');  

		$data = array(
			'id_penerbit' => $id_penerbit,
			'nama' => $nama,
			'alamat' => $alamat,
			'kota' => $kota,
			'telepon' => $telepon
		);
		$this->adminModel->insertPenerbit($data, 'penerbit');
		redirect(base_url('admin'));
	}

	public function editBuku($a) {
		$data['detail'] = $this->adminModel->get_detail_buku($a);
		$data['penerbit'] = $this->adminModel->get_data_buku();
		$this->load->view('admin/editBuku', $data);
	}
	
	public function editPenerbit($a) {
		$data['detail'] = $this->adminModel->get_detail_penerbit($a);
		$this->load->view('admin/editPenerbit', $data);
	}

	public function updateBuku($id_buku) {
		$kategori = $this->input->post('kategori');
		$nama_buku = $this->input->post('nama_buku');
		$harga = $this->input->post('harga');  
		$stok = $this->input->post('stok');  
		$penerbit = $this->input->post('penerbit');

		$data = array(
			'kategori' => $kategori,
			'nama_buku' => $nama_buku,
			'harga' => $harga,
			'stok' => $stok,
			'penerbit' => $penerbit
		);
		$this->adminModel->update_buku($data, $id_buku);
		redirect(base_url('admin'));
	}

	public function updatePenerbit($id_penerbit) {
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');  
		$kota = $this->input->post('kota');  
		$telepon = $this->input->post('telepon');  

		$data = array(
			'nama' => $nama,
			'alamat' => $alamat,
			'kota' => $kota,
			'telepon' => $telepon
		);
		$this->adminModel->update_penerbit($data, $id_penerbit);
		redirect(base_url('admin'));
	}

	public function deleteBuku($id_buku) {
		$this->adminModel->delete_buku($id_buku);
		redirect(base_url('admin'));
	}

	public function deletePenerbit($id_penerbit) {
		$this->adminModel->delete_penerbit($id_penerbit);
		redirect(base_url('admin'));
	}
}
