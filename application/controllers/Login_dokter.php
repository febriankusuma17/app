<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_dokter extends CI_Controller {

	public function index()
	{

        $data['footer']                 = $this->Config_model->footer();
        $this->load->view('dokter/login',$data);
    }
    
    function login()
	{
		$email_dokter		= $this->input->post('email_dokter', true);
		$password_dokter	= $this->input->post('password_dokter', true);
		$result				= $this->Dokter_model->dokter_signin($email_dokter, $password_dokter);
		
		if ($result) {
							$sdata = array();
							$sdata['dokter_id']		= $result->dokter_id;
							$sdata['nama_dokter']	= $result->nama_dokter;
							$this->session->set_userdata($sdata);
							redirect('dokter');
					 }
					 
					 else
					 {
							$sdata	= array();
							$sdata['pesan_error'] =	'Email atau Password Salah..!';
							$this->session->set_userdata($sdata);
							redirect('login_dokter');
					 }
	}
	




}
