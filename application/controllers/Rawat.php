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
}
