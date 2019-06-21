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
		
		if($username!=''&&$password!=''){
			$this->db->where('m_username',$username);
			$this->db->where('m_password',$password);
			$query = $this->db->get('member');
			if($query->result()>0){
				foreach ($query->result() as $row)
				{
					$_SESSION['id']=$row->m_id;
					$_SESSION['username']=$row->m_username;
					$_SESSION['status']=$row->m_status;
					$_SESSION['status2']=$row->m_status;
				}
				redirect(base_url(),'refresh');
			}else{
				$_SESSION['chk']='login_fail';
				redirect(base_url(),'refresh');
			}

		}else{
			// กรณีนี้ไม่เกิดขึ้น หากดัก Required ไว้ตั้งแต่หน้าเว็ป
			redirect(base_url(),'refresh');
		}	
		

	}

	public function logout()
	{
		// ลบ session
		$this->session->sess_destroy();
		redirect(base_url(),'refresh');
		// redirect(base_url('welcome/index'),'refresh');
	}

	
}
