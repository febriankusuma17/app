<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Administrator_model extends CI_Model {

	function getPasien($where = ''){
		return $this->db->query("select * from pasien $where; ");
	}


	function getSpesialis($where = ''){
		return $this->db->query("select * from spesialis $where; ");
	}

	function getDokter($where = ''){
		return $this->db->query("select * from dokter $where; ");
	}
	
	function spesialis(){
		$this->db->select('*');
		$this->db->from('spesialis');
		$this->db->where('aktif',1);
		$query 	= $this->db->get();
		$result	= $query->result();
		return $result;
	}
	
	function dokter(){
		$this->db->select('*');
		$this->db->from('dokter');
		$query 	= $this->db->get();
		$result	= $query->result();
		return $result;

	}

	function kontak_kirim($data){
		$this->db->insert('kontak',$data);
		}



	
}
