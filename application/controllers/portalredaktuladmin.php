<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Portalredaktuladmin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
		$this->load->model('M_Login');
		
	}

	public function index()
	{
		$this->load->view('Tempelate/login');
	}

	public function proses()
	{	
		$data = array('username' => strtoupper($this->input->post('username', TRUE)),
			'password' => md5($this->input->post('password', TRUE))
			);

		$this->load->model('M_Login');
		$hasil = $this->M_Login->cek_user($data);
		if ($hasil->num_rows() == 1) {
			foreach ($hasil->result() as $sess) {
				
				
				$sess_data['username'] = $sess->username;
				$sess_data['level'] = $sess->level;
				
				$this->session->set_userdata($sess_data);
			}
			if ($this->session->userdata('level')=='1') {
				$this->session->set_userdata('user1','TRUE');
				redirect('index.php/portalredaktur/dashboard', 'refresh');
				
			}elseif ($this->session->userdata('level')=='2') {
				$this->session->set_userdata('user2','TRUE');
				redirect('index.php/opd/dashboard');
				
			}elseif ($this->session->userdata('level')=='3') {
				$this->session->set_userdata('user3','TRUE');
				redirect('index.php/Admin/Operasional/dashbord');
			}elseif ($this->session->userdata('level')=='4') {
				$this->session->set_userdata('user4','TRUE');
				redirect('index.php/Admin/Operasional2/dashbord');
			}
		}else{
			$data['pesan']='TRUE';
			$this->load->view('Template/login',$data);
		}
	}
	
	public function logout() {
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('level');
		session_destroy();
		redirect('portalredaktuladmin');
	}
}

/* End of file portalredaktuladmin.php */
/* Location: ./application/controllers/portalredaktuladmin.php */