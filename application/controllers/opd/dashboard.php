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
	/*FUNGSI ADD PENGAJUAN SK*/
	public function tambah_data_pengajuan()
	{	
		$a='file1';
        $b='file2';
        $c='file3';   
        $data['username']=$this->session->userdata('username');
		$data1=$data['username'];      
		$date1=$time=date_default_timezone_set("Asia/Jakarta");
		$time=date("Y-m-d h:i:s", $date1);

		$data = array(
			'sk_judul' 			=> $this->input->post('sk_judul'),
			'sk_nama_opd'		=> $data1,
			'sk_tgl_pengajuan'	=> $time,
			'sk_file_pendukung'	=> $this->upload_sk($a),
			'sk_file_pendukung_2'=> $this->upload_sk($b),
			'sk_file_pendukung_3'=> $this->upload_sk($c),
		);
		$res =	$this->M_SK->insert($data);
		if($res >= 1)
		{
			$this->session->set_flashdata('message', '<div class="alert alert-success" id="message" role="alert">Data Berhasil di Simpan</div>');

			redirect ("index.php/opd/dashboard/data_pengajuan");
		}else{
			$this->session->set_flashdata('message', '<div class="alert alert-warning" id="message" role="alert">Data Tidak Berhasil di Simpan</div>');
			redirect ("index.php/opd/dashboard/data_pengajuan");		
		}	
	}
	public function upload_sk($param)
    {	
    	$data['username']=$this->session->userdata('username');
		$data1=$data['username']; 
        $nama_asli                  = $_FILES[$param]['name'];
        $nama_alias					= $data.'_'.$nama_asli;
        $config=array(
 
            'upload_path'   => './file/pengajuan/',
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
    public function data_pengajuan()
    {
    	$data['username']=$this->session->userdata('username');
		$data1=$data['username'];
		$data = array(
			'cop' 			=> 'Sistem Informasi Pengajuan SK',
			'breadcrumb' 	=> 'Biro Hukum Provinsi NTB',
			'active'		=> 'Data Pengajuan',
			'konten'		=> 'v_opd/v_data_pengajuan',
			'no'			=> 0,
			'temp'			=> $this->M_SK->get_data_sk($data1),
			'level'	        => $this->M_Login->cek_level($data1),
		);

		$this->load->view('Tempelate/template',$data);
    }
    public function delete_sk($id)
    {	
    	$pro=7;
    	$this->del_file($id,$pro);
        $this->M_SK->hapus_data($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" id="message" role="alert">Data Berhasil di Dihapus</div>');
        redirect ("index.php/opd/dashboard/data_pengajuan");	
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
	public function update_sk()
	{
		$data['username']=$this->session->userdata('username');
		$data1=$data['username'];
		$a='file1';
        $b='file2';
        $c='file3';
        $id=$this->input->post('id_sk');
		$datasebelum=$this->M_SK->data_sebelumnya($id);   
		$data = array(
			'sk_id_syarat'		=> $this->input->post('id_sk'),
			'sk_judul' 			=> $this->input->post('sk_judul'),
		);
		if($_FILES['file1']['name']==null AND $_FILES['file2']['name']==null AND $_FILES['file3']['name']==null)
		{
			$data['sk_file_pendukung']=$datasebelum['sk_file_pendukung'];
			$data['sk_file_pendukung_2']=$datasebelum['sk_file_pendukung_2'];
			$data['sk_file_pendukung_3']=$datasebelum['sk_file_pendukung_3'];
		}
		elseif ($_FILES['file1']['name']!=null AND $_FILES['file2']['name']==null AND $_FILES['file3']['name']==null) {
			$pro=1;
			$this->del_file($id,$pro);
			$data['sk_file_pendukung']	=$this->upload_sk($a);
		}elseif ($_FILES['file1']['name']!=null AND $_FILES['file2']['name']!=null AND $_FILES['file3']['name']==null) {
			$pro=2;
			$this->del_file($id,$pro);
			$data['sk_file_pendukung']	=$this->upload_sk($a);
			$data['sk_file_pendukung_2']=$this->upload_sk($b);
		}
		elseif ($_FILES['file1']['name']!=null AND $_FILES['file2']['name']==null AND $_FILES['file3']['name']!=null) {
			$pro=3;
			$this->del_file($id,$pro);
			$data['sk_file_pendukung']	=$this->upload_sk($a);
			$data['sk_file_pendukung_3']=$this->upload_sk($c);
		}
		elseif ($_FILES['file1']['name']==null AND $_FILES['file2']['name']!=null AND $_FILES['file3']['name']!=null) {
			$pro=4;
			$this->del_file($id,$pro);
			$data['sk_file_pendukung']	=$this->upload_sk($b);
			$data['sk_file_pendukung_2']=$this->upload_sk($c);
		}
		elseif ($_FILES['file1']['name']==null AND $_FILES['file2']['name']==null AND $_FILES['file3']['name']!=null) {
			$pro=5;
			$this->del_file($id,$pro);
			$data['sk_file_pendukung_2']=$this->upload_sk($c);
		}elseif ($_FILES['file1']['name']==null AND $_FILES['file2']['name']!=null AND $_FILES['file3']['name']==null) {
			$pro=6;
			$this->del_file($id,$pro);
			$data['sk_file_pendukung_2']=$this->upload_sk($b);
		}
		else
		{	
			$pro=7;
			$this->del_file($id,$pro);
			$data['sk_file_pendukung']	=$this->upload_sk($a);
			$data['sk_file_pendukung_2']=$this->upload_sk($b);
			$data['sk_file_pendukung_3']=$this->upload_sk($c);	
			
			
		}
		$res=$this->M_SK->update_sk($data);
		if($res >= 1)
		{
			$this->session->set_flashdata('message', '<div class="alert alert-success" id="message" role="alert">Data Berhasil di Simpan</div>');

			redirect ("index.php/opd/dashboard/data_pengajuan");
		}else{
			$this->session->set_flashdata('message', '<div class="alert alert-warning" id="message" role="alert">Data Tidak Berhasil di Simpan</div>');
			redirect ("index.php/opd/dashboard/data_pengajuan");		
		}	
	}
	/*END FUNGSI */

}

/* End of file dashboard.php */
/* Location: ./application/controllers/opd/dashboard.php */