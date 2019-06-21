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
        redirect(base_url(),'refresh');
    }

    public function returnToGod()
    {   
        $_SESSION['status']='God';
        redirect(base_url(),'refresh');
    }

    public function editmember()
    {   
        $this->load->view('template/header');
        $this->load->view('editmember');
        $this->load->view('template/footer');
    }
    
}
?>