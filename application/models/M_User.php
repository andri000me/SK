<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_User extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function tamab_data($data)
	{
		return $this->db->insert('tb_sk_user', $data);
	}
	public function tampil_opd($id=FALSE)
	{
		if($id==FALSE){
			$this->db->order_by("tb_sk_user.sk_id_user","desc");
			return $this->db->get("tb_sk_user")->result_array();
		}else{
			$query = $this->db->get_where('tb_sk_user', array('sk_id_user' => $id));
			return $query->row_array();
		}
	}
	public function update_data_opd($data)
	{
		$this->db->where('sk_id_user', $data['sk_id_user']);
		return $this->db->update('tb_sk_user', $data);
	}
	
	public function hapus_data_opd($id)
	{
		$this->db->where('sk_id_user',$id);
		return $this->db->delete('tb_sk_user');
	}
	

}

/* End of file M_User.php */
/* Location: ./application/models/M_User.php */