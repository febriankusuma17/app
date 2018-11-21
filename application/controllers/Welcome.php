<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$data=array(
					'nama'     => 'Febrian Kusuma',
					'alamat'   => 'Malang',
					'keahlian' => 'jaringan',

					);
		$this->load->view('welcome_message',$data);
	}

	public function about()
	{
		$this->load->view('about.php');
	}

	public function contact()
	{
		$this->load->view('contact.php');
	}
}
