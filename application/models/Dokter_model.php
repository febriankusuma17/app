<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dokter_model extends CI_Model {

	function dokter_signin($email_dokter, $password_dokter)
	{
		$password_dokter	= hash("MD5", $password_dokter);
		$sql	= "SELECT * FROM dokter
					WHERE
						email_dokter = '$email_dokter'
					AND
						password_dokter = '$password_dokter'";
		$query 	= $this->db->query($sql);
		$result	= $query->row();
		return $result;
	}
	
	function simpan_proses_pemeriksaan($data)
	{
		$this->db->insert('perawatan',$data);	
	}


	function update_proses_pemeriksaan($perawatan_id)
	{
		$this->db->set('progress',1);	
		$this->db->where('perawatan_id',$perawatan_id);
		$this->db->update('pasien');
	}
	
	function dokter()
	{
	$this->db->select('*');
	$this->db->from('dokter');
	$query = $this->db->get();
	$result = $query->result();
	return $result;
	}
	
	function spesialis()
	{
	$this->db->select('*');
	$this->db->from('spesialis');
	$query = $this->db->get();
	$result = $query->result();
	return $result;
	}
	



}


