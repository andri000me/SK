<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_SK extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function insert($data)
	{
		$query=$this->db->insert('tb_sk_syarat',$data);
		return $query;
	}

	public function get_data_sk($data=FALSE)
	{
		if($data==FALSE){
			$this->db->order_by("tb_sk_syarat.sk_id_syarat","asc");
			return $this->db->get("tb_sk_syarat")->result_array();
		}else{
			$this->db->order_by("sk_id_syarat", "desc");
			$this->db->where("sk_nama_opd", $data);
			return $this->db->get("tb_sk_syarat")->result_array();
			
		}
	}

	public function hapus_data($id)
    {
        $this->db->where('sk_id_syarat',$id);
        return $this->db->delete('tb_sk_syarat');
    }

    public function link_file($id){
 
        $this->db->where('sk_id_syarat',$id);
        $getData = $this->db->get('tb_sk_syarat');
 
        if($getData->num_rows() > 0)
            return $getData;
        else
            return null;
    }

    public function data_sebelumnya ($id=FALSE)
	{
		if($id==FALSE){
			$this->db->order_by("tb_sk_syarat.sk_id_syarat","desc");
			return $this->db->get("tb_sk_syarat")->result_array();
		}else{
			$query = $this->db->get_where('tb_sk_syarat', array('sk_id_syarat' => $id));
			return $query->row_array();
		}
	}

	public function update_sk($data)
	{
		$this->db->where('sk_id_syarat',$data['sk_id_syarat']);
		return $this->db->update('tb_sk_syarat',$data);
	}
}

/* End of file M_SK.php */
/* Location: ./application/models/M_SK.php */