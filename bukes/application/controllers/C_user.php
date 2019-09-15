<?php 

class C_user extends CI_Controller{

	function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') != "login"){
			redirect(base_url("Welcome/login"));
		}
	}

	function index(){
		$this->load->view('Welcome/beranda');
	}
}