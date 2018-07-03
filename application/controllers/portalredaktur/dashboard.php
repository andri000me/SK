<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if ( $this->session->userdata('user1')!='TRUE'){
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
			'konten'		=> 'v_data/dashboard',
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
			'active'		=> 'Dashbord',
			'konten'		=> 'v_data/v_sk',
			'level'	        => $this->M_Login->cek_level($data1),
		);

		$this->load->view('Tempelate/template',$data);
	}
	public function data_opd()
	{
		$data['username']=$this->session->userdata('username');
		$data1=$data['username'];
		$data = array(
			'cop' 			=> 'Sistem Informasi Pengajuan SK',
			'breadcrumb' 	=> 'Biro Hukum Provinsi NTB',
			'active'		=> 'Data OPD',
			'konten'		=> 'v_data/v_opd',
			'tamp'			=> $this->M_User->tampil_opd(),
			'level'	        => $this->M_Login->cek_level($data1),
		);

		$this->load->view('Tempelate/template',$data);
	}
	/*FUNGSI MENU OPD*/
	public function tambah_data_opd()
	{	
		$pwd=	md5($this->input->post('3'));
		$data = array(
			'sk_nama_user' 		=> $this->input->post('1'),
			'username'			=> $this->input->post('2'),
			'password'			=> $pwd,
			'level'				=> 2,
		);
		$res =	$this->M_User->tamab_data($data);
		if($res >= 1)
		{
			$this->session->set_flashdata('message', '<div class="alert alert-success" id="message" role="alert">Data Berhasil di Simpan</div>');

			redirect ("index.php/portalredaktur/dashboard/data_opd");
		}else{
			$this->session->set_flashdata('message', '<div class="alert alert-warning" id="message" role="alert">Data Tidak Berhasil di Simpan</div>');
			redirect ("index.php/portalredaktur/dashboard/data_opd");		
		}	
	}
	public function update_opd()
	{
		$pwd=	md5($this->input->post('3'));
		$data = array(
			'sk_id_user'		=> $this->input->post('id'),
			'sk_nama_user' 		=> $this->input->post('1'),
			'username'			=> $this->input->post('2'),
			'password'			=> $pwd,
			'level'				=> $this->input->post('level'),
		);
		$res =	$this->M_User->update_data_opd($data);
		if($res >= 1)
		{
			$this->session->set_flashdata('message', '<div class="alert alert-success" id="message" role="alert">Data Berhasil di Ubah</div>');

			redirect ("index.php/portalredaktur/dashboard/data_opd");
		}else{
			$this->session->set_flashdata('message', '<div class="alert alert-warning" id="message" role="alert">Data Tidak Berhasil di Ubah</div>');
			redirect ("index.php/portalredaktur/dashboard/data_opd");		
		}
	}
	public function delete_opd($id = NULL)
	{
		$this->M_User->hapus_data_opd($id);
		$this->session->set_flashdata('message', '<div class="alert alert-success" id="message" role="alert">Data Berhasil di Dihapus</div>');
		redirect ("index.php/portalredaktur/dashboard/data_opd");	
	}
	/*END FUNGSI OPD*/

}

/* End of file dashboard.php */
/* Location: ./application/controllers/portalredaktur/dashboard.php */