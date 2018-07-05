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
	public function insert_history($data1)
	{
		$query=$this->db->insert('tb_briohukum',$data1);
		return $query;
	}
	public function get_id(){
		$getlastdata = $this->db->query('SELECT * FROM tb_sk_syarat ORDER BY sk_id_syarat DESC LIMIT 1');
		return $getlastdata;
	}
	public function get_data_sk($data=FALSE)
	{
		if($data==FALSE){
			$this->db->order_by("tb_sk_syarat.sk_id_syarat","asc");
			$this->db->where("sk_proses_status!=","Y");
			$this->db->where("sk_proses_status!=","N");
			return $this->db->get("tb_sk_syarat")->result_array();
		}else{
			$this->db->order_by("sk_id_syarat", "desc");
			$this->db->where("sk_nama_opd", $data);
			$this->db->where("sk_proses_status!=","Y");
			$this->db->where("sk_proses_status!=","N");
			return $this->db->get("tb_sk_syarat")->result_array();
			
		}
	}
	public function get_laporanopd($data)
	{
		$query = $this->db->query("SELECT tb_sk_syarat.*, tb_sk_user.sk_nama_user, tb_sk_user.username FROM tb_sk_syarat JOIN tb_sk_user on tb_sk_syarat.sk_nama_opd=tb_sk_user.username WHERE tb_sk_syarat.sk_nama_opd='$data' ORDER BY tb_sk_syarat.sk_id_syarat ASC ");
		return $query;
	}
	public function get_all()
	{
		$get = $this->db->query('SELECT * FROM tb_sk_syarat GROUP BY sk_nama_opd');
		return $get->result_array();
	}
	public function get_opd()
	{
		$query=$this->db->query("SELECT * FROM tb_sk_user WHERE level=2");

		return $query->result_array();
	}
	public function get_data_terima()
	{
		return $this->db->query("SELECT * FROM tb_sk_syarat WHERE sk_proses_status='Y' ORDER BY sk_id_syarat DESC")->result_array();
		
	}
	public function get_status()
	{
		$query = $this->db->query("select sk_proses_status AS status, count(sk_proses_status) as jumlah from tb_sk_syarat GROUP BY sk_proses_status"); 
		return $query->result_array();
	}
	public function get_terima()
	{
		return $this->db->query("SELECT tb_briohukum.sk_id_syarat AS id, tb_briohukum.sk_tgl_proses AS tanggal, tb_briohukum.sk_final AS file, tb_sk_syarat.sk_judul AS judul, tb_sk_syarat.sk_nama_opd AS opd
		 FROM tb_sk_syarat JOIN tb_briohukum ON tb_sk_syarat.sk_id_syarat=tb_briohukum.sk_id_syarat WHERE tb_sk_syarat.sk_proses_status='Y' GROUP BY tb_briohukum.sk_id_syarat DESC ")->result_array();
		
	}
	public function get_tolak()
	{
		return $this->db->query("SELECT tb_briohukum.sk_id_syarat AS id, tb_briohukum.sk_tgl_proses AS tanggal, tb_briohukum.sk_final AS file, tb_sk_syarat.sk_judul AS judul, tb_sk_syarat.sk_nama_opd AS opd
		 FROM tb_sk_syarat JOIN tb_briohukum ON tb_sk_syarat.sk_id_syarat=tb_briohukum.sk_id_syarat WHERE tb_sk_syarat.sk_proses_status='N' GROUP BY tb_briohukum.sk_id_syarat DESC ")->result_array();
		
	}
	
	public function get_rekap($id)
	{
		$query=$this->db->query("SELECT tb_briohukum.*, tb_sk_syarat.* FROM tb_sk_syarat JOIN tb_briohukum ON tb_sk_syarat.sk_id_syarat=tb_briohukum.sk_id_syarat WHERE tb_sk_syarat.sk_id_syarat='$id' ORDER BY tb_briohukum.sk_id_syarat DESC");
		return $query;
	}
	public function get_histori($id)
	{
		return $this->db->query("SELECT tb_sk_syarat.sk_judul AS judul, tb_sk_syarat.sk_nama_opd AS opd, tb_briohukum.sk_tgl_proses AS tgl, tb_briohukum.catatan AS catatan, tb_briohukum.sk_final AS file, tb_briohukum.sk_status AS status FROM tb_briohukum  JOIN tb_sk_syarat ON tb_briohukum.sk_id_syarat=tb_sk_syarat.sk_id_syarat  WHERE tb_sk_syarat.sk_id_syarat='$id' ORDER BY tb_briohukum.sk_id_biro_hukum DESC")->result_array();
	}
	public function hapus_data($id)
    {
        $this->db->where('sk_id_syarat',$id);
        return $this->db->delete('tb_sk_syarat');
    }
    public function hapus_dataa($id)
    {
        $this->db->where('sk_id_syarat',$id);
        return $this->db->delete('tb_briohukum');
    }
    public function link_file($id){
 
        $this->db->where('sk_id_syarat',$id);
        $getData = $this->db->get('tb_sk_syarat');
 
        if($getData->num_rows() > 0)
            return $getData;
        else
            return null;
    }

    public function link_filee($id){
 
        $this->db->where('sk_id_syarat',$id);
        $getData = $this->db->get('tb_briohukum');
 
        if($getData->num_rows() > 0)
            return $getData;
        else
            return null;
    }
    public function get_track($id)
    {
    	return $this->db->query("SELECT tb_sk_syarat.*, tb_briohukum.* FROM tb_briohukum  JOIN tb_sk_syarat ON tb_briohukum.sk_id_syarat=tb_sk_syarat.sk_id_syarat  WHERE tb_sk_syarat.sk_id_syarat='$id' ORDER BY tb_briohukum.sk_id_biro_hukum ASC");
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

	public function update_status($data)
	{
		$this->db->where('sk_id_biro_hukum',$data['sk_id_biro_hukum']);
		return $this->db->update('tb_briohukum',$data);
	}
}

/* End of file M_SK.php */
/* Location: ./application/models/M_SK.php */