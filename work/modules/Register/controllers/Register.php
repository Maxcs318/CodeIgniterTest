<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Register extends MX_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		if(!empty($_SESSION['status'])){
			redirect(base_url(),'refresh');
		}else if(empty($_SESSION['status']) || $_SESSION['status'] == ''){
			$this->load->view('newRegister');
		}
    }
    
    public function createNewRegister()
    {
        $firstname=$this->input->post('firstname');
        $lastname=$this->input->post('lastname');
        $phone=$this->input->post('phone');
        $email=$this->input->post('email');
        $status=$this->input->post('status');
        $username=$this->input->post('username');
		$password=$this->input->post('password');

        $new_member = array(
            'm_firstname'=>$firstname,
            'm_lastname'=>$lastname,
            'm_phone'=>$phone,
            'm_email'=>$email,
            'm_status'=>$status,
            'm_username'=>$username,
            'm_password'=>$password
            
            );
        $this->load->model('register_model');
        $this->register_model->insert_member($new_member);
        
        redirect(base_url(),'refresh');
    }

	
	
	
}
