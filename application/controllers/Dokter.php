<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dokter extends CI_Controller {

	public function index()
	{
		$data['title']            = 'Dashboard Dokter';

		$data['dokter']           = $this->Administrator_model->getDokter();
		$data['totaldokter']      = $data['dokter']->num_rows();

		$data['pasien0']           = $this->Administrator_model->getPasien0();
		$data['totalpasien0']     = $data['pasien0']->num_rows();

		$data['pasien1']           = $this->Administrator_model->getPasien1();
		$data['totalpasien1']     = $data['pasien1']->num_rows();

		$this->load->view('dokter/head',$data);
		$this->load->view('dokter/dashboard');
	}

	public function pasien()
	{
		$data['title']             = 'Data Pasien';
		$data['pasien']            = $this->Pasien_model->pasien();

		$this->load->view('dokter/head2',$data);
		$this->load->view('dokter/data_pasien');
	}

	function proses_perawatan($perawatan_id)
	{
	$data['title']                ='proses pemeriksaan';
	$data['perawatan_id']         =$perawatan_id;
	$data['dokter_id']            = $this->session->userdata('dokter_id');

	$this->load->view('dokter/head2',$data);
	$this->load->view('dokter/proses_perawatan', $data);
	}




}
