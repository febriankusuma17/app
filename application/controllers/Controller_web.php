<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_web extends CI_Controller {

	public function index()
	{
		$data=array();
		$data['title']                  = 'Beranda';
		$data['kontak']                 = $this->Config_model->kontak();
		$data['email']                  = $this->Config_model->email();
		$data['alamat']                 = $this->Config_model->alamat();
		$data['footer']                 = $this->Config_model->footer();

		$data['spesialis2']              = $this->Administrator_model->spesialis();
		$data['pasien']			     	= $this->Administrator_model->getPasien();
		$data['pasien_total']		    = $data['pasien']->num_rows();
		
		$data['spesialis']				= $this->Administrator_model->getSpesialis();
		$data['spesialis_total']		= $data['spesialis']->num_rows();
				
		$data['dokter']				    = $this->Administrator_model->getDokter();
		$data['dokter_total']		    = $data['dokter']->num_rows();
		
		



		$this->load->view('web/head',$data);
		$this->load->view('web/menu');
		$this->load->view('web/slider');
		$this->load->view('web/home',$data);
		$this->load->view('web/footer');
	}


	public function pendaftaran()
	{
		$data=array();
		$data['title']                  = 'Pendaftaran Online Pasien';
		$data['kontak']                 = $this->Config_model->kontak();
		$data['email']                  = $this->Config_model->email();
		$data['alamat']                 = $this->Config_model->alamat();
		$data['footer']                 = $this->Config_model->footer();

		$data['spesialis']              = $this->Administrator_model->spesialis();
		$data['spesialis2']             = $this->Administrator_model->spesialis();



		$this->load->view('web/head',$data);
		$this->load->view('web/menu');
		$this->load->view('web/pendaftaran',$data);
		$this->load->view('web/footer');
	}

	function pendaftaran_save (){
		$data['spesialis_id']          = $this->input->post('spesialis_id',true);
		$data['perawatan_id']          = $this->input->post('perawatan_id',true);
		$data['nama_pasien']           = $this->input->post('nama_pasien',true);
		$data['umur']                  = $this->input->post('umur',true);
		$data['kontak']                = $this->input->post('kontak',true);
		$data['sex']                  = $this->input->post('sex',true);
		$data['email_pasien']          = $this->input->post('email_pasien',true);
		$data['keluhan_penyakit']       = $this->input->post('keluhan_penyakit',true);
		$data['nama_pasien']           = $this->input->post('nama_pasien',true);
		
		$this->Pasien_model->pendaftaran_save($data);

		$xdata['message']   ='Data Pendaftaran Anda Telah Tersimpan...!';
		$xdata['token']     = $data['perawatan_id'];
		$this->session->set_userdata($xdata);
		redirect('Controller_web/pendaftaran');
		

	}




}
