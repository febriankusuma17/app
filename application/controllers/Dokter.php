<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dokter extends CI_Controller {

	public function index()
	{
		$this->load->view('dokter/head');
		$this->load->view('dokter/dashboard');
	}
}
