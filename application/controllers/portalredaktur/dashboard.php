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
	public function rekap_pengajuan()
	{
		$data['username']=$this->session->userdata('username');
		$data1=$data['username'];
		$opd=$this->input->post('opd');
		$data = array(
			'cop' 			=> 'Sistem Informasi Pengajuan SK',
			'breadcrumb' 	=> 'Biro Hukum Provinsi NTB',
			'active'		=> 'Rekap Data Pengajuan',
			'konten'		=> 'v_data/rekap_pengajuan',
			'no'			=> 0,
			'opd'			=> $this->M_SK->get_opd(),
			'tampil'		=> $this->M_SK->get_laporanopd($opd),
			'level'	        => $this->M_Login->cek_level($data1),
		);

		$this->load->view('Tempelate/template',$data);
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

	public function download_rekap($id)
	{
		$data = array(
			'no'			=>0,
			'cetak'			=> $this->M_SK->get_laporanopd($id),
		);
		$this->load->view('v_data/rekapopd',$data);
	}
	public function download_track($id)
	{
		$data = array(
			'no'			=>0,
			'cetak'			=> $this->M_SK->get_track($id),
		);
		$this->load->view('v_data/rekap',$data);
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
			'no'			=>  0,
			'level'	        => $this->M_Login->cek_level($data1),
			'temp'			=> $this->M_SK->get_all(),
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
	public function ubah_status()
	{	
        $data['username']=$this->session->userdata('username');
		$data1=$data['username'];      
		$date1=$time=date_default_timezone_set("Asia/Jakarta");
		$time=date("Y-m-d h:i:s");

		$data = array(
			'sk_id_syarat'		=> $this->input->post('id_sk'),
			'sk_proses_status'	=> $this->input->post('status'),
		);
		$res =	$this->M_SK->update_sk($data);
		if($res >= 1)
		{
			$id=$this->input->post('id_sk');
			$query=$this->db->query("SELECT * FROM tb_briohukum where sk_id_syarat='$id' ORDER BY sk_id_biro_hukum DESC LIMIT 1");
			$tamp=$query->row();
			$id_b=$tamp->sk_id_biro_hukum;
			$data = array(
			'sk_id_biro_hukum'	=> $id_b,
			'sk_status'			=> $this->input->post('status'),
			);
			$this->M_SK->update_status($data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" id="message" role="alert">Data Berhasil di Ubah</div>');

			redirect ("index.php/portalredaktur/dashboard/data_pengajuan_sk");
		}else{
			$this->session->set_flashdata('message', '<div class="alert alert-warning" id="message" role="alert">Data Tidak Berhasil di Ubah</div>');
			redirect ("index.php/portalredaktur/dashboard/data_pengajuan_sk");
					
		}	
	}
	public function delete_sk($id)
    {	
    	$pro=7;
    	$this->del_file($id,$pro);
        $this->M_SK->hapus_data($id);
        $this->del_filee($id);
        $res=$this->M_SK->hapus_dataa($id);  	
        $this->session->set_flashdata('message', '<div class="alert alert-success" id="message" role="alert">Data Berhasil di Dihapus</div>');
        	redirect ("index.php/portalredaktur/dashboard/data_pengajuan_sk");
       
        	
    }
    
    public function del_file($id,$pro)
	{
		$cek=$pro;
		$files = $this->M_SK->link_file($id);
		if ($files->num_rows() > 0)
		{
			$row = $files->row();
			$file_photo = $row->sk_file_pendukung;
			$file_photo2 = $row->sk_file_pendukung_2;
			$file_photo3 = $row->sk_file_pendukung_3;
			if ($cek===1) {
				$path_file = './file/pengajuan/';
				unlink($path_file.$file_photo);
			}elseif ($cek===2) {
				$path_file = './file/pengajuan/';
				$path_file2 = './file/pengajuan/';
				unlink($path_file.$file_photo);
				unlink($path_file2.$file_photo2);
			}elseif ($cek===3) {
				$path_file = './file/pengajuan/';
				$path_file3 = './file/pengajuan/';
				unlink($path_file.$file_photo);
				unlink($path_file3.$file_photo3);
			}elseif ($cek===4) {
				$path_file2 = './file/pengajuan/';
				$path_file3 = './file/pengajuan/';
				unlink($path_file.$file_photo);
				unlink($path_file2.$file_photo2);
			}elseif ($cek===5) {
				$path_file3 = './file/pengajuan/';
				unlink($path_file3.$file_photo3);
			}elseif ($cek===6) {
				$path_file2 = './file/pengajuan/';
				unlink($path_file2.$file_photo2);
			}
			else{
				$path_file = './file/pengajuan/';
				$path_file2 = './file/pengajuan/';
				$path_file3 = './file/pengajuan/';
				unlink($path_file.$file_photo);
				unlink($path_file2.$file_photo2);
				unlink($path_file3.$file_photo3);
			}
			
		}
	}
	public function del_filee($id)
	{
		
		$files = $this->M_SK->link_filee($id);
		if ($files->num_rows() > 0)
		{
			$row = $files->row();
			$file_photo = $row->sk_final;
			$path_file = './file/final/';
			unlink($path_file.$file_photo);		
		}
	}
	/*END FUNGSI OPD*/

}

/* End of file dashboard.php */
/* Location: ./application/controllers/portalredaktur/dashboard.php */