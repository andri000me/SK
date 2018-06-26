<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Login extends CI_Model {

	public function cek_user($data){

		$query = $this->db->get_where('tb_sk_user', $data);
		return $query;
	}	
	public function cek_level($data1)
	{
		$query = $this->db->get_where('tb_sk_user', array('username' => $data1));
		return $query->row_array();
	}

}

/* End of file M_Login.php */
/* Location: ./application/models/M_Login.php */