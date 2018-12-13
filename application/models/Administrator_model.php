<?php   
defined('BASEPATH') OR exit('No direct script access allowed');

class Administrator_model extends CI_Model {

	function admin_signin($admin_email, $admin_password)
	{
		$password_admin	= hash("MD5", $admin_password);
		$sql	= "SELECT * FROM admin
					WHERE
						admin_email = '$admin_email'
					AND
						admin_password = '$admin_password'";
		$query 	= $this->db->query($sql);
		$result	= $query->row();
		return $result;
	}
	



	function getPasien($where = ''){
		return $this->db->query("select * from pasien $where; ");
	}

	function getPasien0(){
		return $this->db->query("select * from pasien where progress = '0'; ");
	}

	function getPasien1(){
		return $this->db->query("select * from pasien where progress = '1'; ");
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
