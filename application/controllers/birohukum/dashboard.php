<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if ( $this->session->userdata('user3')!='TRUE'){
			redirect();
		}
	}
	public function histori($id)
	{
		$data['username']=$this->session->userdata('username');
		$data1=$data['username'];
		$data = array(
			'cop' 			=> 'Sistem Informasi Pengajuan SK',
			'breadcrumb' 	=> 'Biro Hukum Provinsi NTB',
			'active'		=> 'History Data Pengajuan',
			'konten'		=> 'v_data/v_history',
			'temp'			=> $this->M_SK->get_histori($id),
			'level'	        => $this->M_Login->cek_level($data1),
		);

		$this->load->view('Tempelate/template',$data);
	}
	public function index()
	{
		$data['username']=$this->session->userdata('username');
		$data1=$data['username'];
		$data = array(
			'cop' 			=> 'Sistem Informasi Pengajuan SK',
			'breadcrumb' 	=> 'Biro Hukum Provinsi NTB',
			'active'		=> 'Dashbord',
			'konten'		=> 'v_opd/dashboard',
			'level'	        => $this->M_Login->cek_level($data1),
		);

		$this->load->view('Tempelate/template',$data);
	}
	public function data_pengajuan_sk()
	{
		$data['username']=$this->session->userdata('username');
		$data1=$data['username'];
		$data = array(
			'cop' 			=> 'Sistem Informasi Pengajuan SK',
			'breadcrumb' 	=> 'Biro Hukum Provinsi NTB',
			'active'		=> 'Data Pengajuan',
			'konten'		=> 'v_biro/v_data_pengajuan',
			'no'			=> 0,
			'temp'			=> $this->M_SK->get_data_sk(),
			'level'	        => $this->M_Login->cek_level($data1),
		);

		$this->load->view('Tempelate/template',$data);
	}
	public function data_pengajuan_diterima()
	{
		$data['username']=$this->session->userdata('username');
		$data1=$data['username'];
		$data = array(
			'cop' 			=> 'Sistem Informasi Pengajuan SK',
			'breadcrumb' 	=> 'Biro Hukum Provinsi NTB',
			'active'		=> 'Data Pengajuan Diterima',
			'konten'		=> 'v_biro/v_data_terima',
			'no'			=> 0,
			'temp'			=> $this->M_SK->get_terima(),
			'level'	        => $this->M_Login->cek_level($data1),
		);

		$this->load->view('Tempelate/template',$data);
	}
	public function data_pengajuan_ditolak()
	{
		$data['username']=$this->session->userdata('username');
		$data1=$data['username'];
		$data = array(
			'cop' 			=> 'Sistem Informasi Pengajuan SK',
			'breadcrumb' 	=> 'Biro Hukum Provinsi NTB',
			'active'		=> 'Data Pengajuan Ditolak',
			'konten'		=> 'v_biro/v_data_tolak',
			'no'			=> 0,
			'temp'			=> $this->M_SK->get_tolak(),
			'level'	        => $this->M_Login->cek_level($data1),
		);

		$this->load->view('Tempelate/template',$data);
	}
	
	public function proses_pengajuan()
	{	
		$a='file1';  
        $data['username']=$this->session->userdata('username');
		$data1=$data['username'];      
		$date1=$time=date_default_timezone_set("Asia/Jakarta");
		$time=date("Y-m-d h:i:s");

		$data = array(
			'sk_id_syarat'		=> $this->input->post('id_sk'),
			'sk_tgl_proses'		=> $time,
			'catatan'			=> $this->input->post('catatan'),
			'sk_final'			=> $this->upload_sk($a),
			'sk_status'			=> $this->input->post('status'),
		);
		$res =	$this->M_SK->insert_history($data);
		if($res >= 1)
		{
			$data = array(
			'sk_id_syarat'		=> $this->input->post('id_sk'),
			'sk_proses_status'	=> $this->input->post('status'),
			);
			$this->M_SK->update_sk($data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" id="message" role="alert">Data Berhasil di Simpan</div>');

			redirect ("index.php/birohukum/dashboard/data_pengajuan_sk");
		}else{
			$this->session->set_flashdata('message', '<div class="alert alert-warning" id="message" role="alert">Data Tidak Berhasil di Simpan</div>');
			redirect ("index.php/birohukum/dashboard/data_pengajuan_sk");
					
		}	
	}
	public function upload_sk($param)
    {	
    	$data['username']=$this->session->userdata('username');
		$data1=$data['username']; 
        $nama_asli                  = $_FILES[$param]['name'];
        $config=array(
 
            'upload_path'   => './file/final/',
            'allowed_types' => '*',
            'max_size'      =>  90000,
        );
 		$this->upload->initialize($config);
        $this->load->library('upload', $config);
         if ( ! $this->upload->do_upload($param))
        {
            $error =  $this->upload->display_errors();
            echo $error;
        }
        else
        {
            $data = array('upload_data' => $this->upload->data());
            $datafoto=$this->upload->data();
            $nm_file = $datafoto['file_name'];
            return $nm_file;
        }
    }

}

/* End of file dashboard.php */
/* Location: ./application/controllers/birohukum/dashboard.php */