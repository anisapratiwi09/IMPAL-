<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct(){
		parent::__construct();		
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->library('form_validation');
		$this->load->model('M_user');
		$this->load->model('M_login');
	}

	public function editakun(){
		$this->load->view('editakun.php');
	}

	public function beranda(){
		$this->load->view('beranda.php');
	}

	public function keranjang(){
		$this->load->view('keranjang.php');
	}

	public function bukuu(){
		$this->load->view('bukuu.php');
	}

	public function pembayaran(){
		$this->load->view('pembayaran.php');
	}	

	public function daftar(){
		$this->load->view('daftar');
	}	

	public function login(){
		$this->load->view('login');
	}	

	function aksi_login(){
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$where = array(
			'email' => $email,
			'password' => $password
		);
		$cek = $this->M_login->cek_login("user",$where)->num_rows();
		
		if(empty($cek)){
    		echo "Email dan password salah !";
   		}else{   
   			$data_session = array(
    			'nama' => $namaUser,
    			'status' => "Login"
 		   		);
			$this->session->set_userdata($data_session);
			redirect(base_url("Welcome/beranda/"));

		}
	}
}

?>
