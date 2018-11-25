<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pasien_model extends CI_Model {

	function pendaftaran_save($data){
		$this->db->insert('pasien',$data);
	}
	
	function pasien_progress_info($perawatan_id){
	$this->db->select('*');
	$this->db->from('pasien');
	$this->db->where('perawatan_id',$perawatan_id);
	$query = $this->db->get();
	$result = $query->row();
	return $result;
	}
	
	function pasien_total_info($perawatan_id){
	$this->db->select('*');
	$this->db->from('perawatan');
	$this->db->where('perawatan_id',$perawatan_id);
	$query = $this->db->get();
	$result = $query->row();
	return $result;
	}
		

	

	
}
