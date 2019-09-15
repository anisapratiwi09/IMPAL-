<?php 

class C_daftar extends CI_Controller{

	public function __construct(){
		parent::__construct();		
		$this->load->model('M_user');

	}

	public function index(){
		$this->load->view('daftar');
	}

	 function new(){
		$namaUser = $this->input->post('namaUser');
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		
		$user = array(
			'namaUser' => $namaUser,
			'email' => $email,
			'password' => $password
			);
		
		$this->M_user->new($user);
		//header('Location: '.base_url('Welcome/beranda/'.$namaUser));
		redirect(base_url("Welcome/beranda/"));

	}

}