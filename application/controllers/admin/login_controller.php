<?php

class login_controller extends CI_Controller {


 function __construct()
 {
 	parent::__construct();
 	if($this->session->userdata('admin'))
 		redirect('../home');
 }
 
	
	public function index()
	{
		$this->load->view('admin/login');
	}

public function verification()
	{
		$this->load->model('admin_model');
		$check=$this->admin_model->validate();
		if($check)
		{
			$this->session->set_userdata('admin','1');

			redirect('../home');
		}
		else
		{
			redirect('admin');
		}
	}

  function logout()
  {
  	 			$this->session->unset_userdata('admin');
  	 			redirect('admin');




  }
	
}