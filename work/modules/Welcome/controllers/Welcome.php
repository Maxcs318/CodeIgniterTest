<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Welcome extends MX_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		if(!empty($_SESSION['status'])){
			$this->load->view('template/header');
			$this->load->view('welcome_to_page');
			$this->load->view('template/footer');
		}else if(empty($_SESSION['status']) || $_SESSION['status'] == ''){
			$this->load->view('welcome_to_login');
		}
	}

	public function checkLogin()
	{
		$username=$this->input->post('username');
		$password=$this->input->post('password');

			$this->load->model('welcome_model');
        	$data['chk_row']=$this->welcome_model->check_User($username,$password);
			
			if(sizeof($data['chk_row'])==0){
				$_SESSION['chk']='login_fail';
			}
			redirect(base_url(),'refresh');
		
	}

	public function logout()
	{
		// ลบ session
		$this->session->sess_destroy();
		redirect(base_url(),'refresh');
		// redirect(base_url('welcome/index'),'refresh');
	}

	
}
