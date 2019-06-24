<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Actor extends MX_Controller {

	public function __construct()
	{
		parent::__construct();
    }

    public function index()
    {   
        $this->load->model('actor_model');
        $data['member'] = $this->actor_model->get_all_member();

        $this->load->view('template/header');
        $this->load->view('allmember',$data);
        $this->load->view('template/footer');

    }
    public function changeStatus()
    {   
        if($_SESSION['status']=='admin'){
            $_SESSION['status']='user';
        }else if($_SESSION['status']=='user'){
            $_SESSION['status']='admin';
        }else{
            $_SESSION['status']='admin';
        }
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function returnToGod()
    {   
        $_SESSION['status']='God';
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function editmember()
    {   
        $this->load->model('actor_model');
        $data['myID'] = $this->actor_model->get_my_id();

        $this->load->view('template/header');
        $this->load->view('editmember',$data);
        $this->load->view('template/footer');
    }
    
    public function do_edit()
    {
        $firstname=$this->input->post('firstname');
        $lastname=$this->input->post('lastname');
        $phone=$this->input->post('phone');
        $email=$this->input->post('email');
        $username=$this->input->post('username');
		$password=$this->input->post('password');

        $my_id = array(
            'm_firstname'=>$firstname,
            'm_lastname'=>$lastname,
            'm_phone'=>$phone,
            'm_email'=>$email,
            'm_username'=>$username,
            'm_password'=>$password
            
        );
        
        $this->load->model('actor_model');
        $this->actor_model->edit_my_id($my_id);

        $this->load->model('welcome/welcome_model');
        $this->welcome_model->check_User($username,$password);

        redirect(base_url(),'refresh');

    }


}
?>