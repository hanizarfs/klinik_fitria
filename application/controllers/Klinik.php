<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Klinik extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('adminModel');
	}

	public function index() {
		$this->load->view('klinik/klinik');
	}
}
