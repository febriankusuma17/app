<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pasien_model extends CI_Model {

	function pendaftaran_save($data){
		$this->db->insert('pasien',$data);
	}


	

	
}
