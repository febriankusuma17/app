<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_admin extends CI_Controller {

	public function index()
	{

        $data['footer']                 = $this->Config_model->footer();
        $this->load->view('admin/login',$data);
    }
    
    function login()
	{
		$admin_email	    = $this->input->post('admin_email', true);
		$admin_password 	= $this->input->post('admin_password', true);
		$result				= $this->Administrator_model->admin_signin($email_dokter, $password_dokter);
		
		if ($result) {
							$sdata = array();
							$sdata['admin_id']		= $result->admin_id;
							$sdata['admin_name']	= $result->admin_name;
							$this->session->set_userdata($sdata);
							redirect('administrator');
					 }
					 
					 else
					 {
							$sdata	= array();
							$sdata['pesan_error'] =	'Email atau Password Salah..!';
							$this->session->set_userdata($sdata);
							redirect('login_admin');
					 }
	}
	




}
