<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if ( $this->session->userdata('user2')!='TRUE'){
			redirect();
		}
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
	public function form_pengajuan_sk()
	{
		$data['username']=$this->session->userdata('username');
		$data1=$data['username'];
		$data = array(
			'cop' 			=> 'Sistem Informasi Pengajuan SK',
			'breadcrumb' 	=> 'Biro Hukum Provinsi NTB',
			'active'		=> 'Dashbord',
			'konten'		=> 'v_opd/v_form',
			'level'	        => $this->M_Login->cek_level($data1),
		);

		$this->load->view('Tempelate/template',$data);
	}

}

/* End of file dashboard.php */
/* Location: ./application/controllers/opd/dashboard.php */