<?php

class home_controller extends CI_Controller {

	function __construct()

	{
		parent::__construct();
		if(!$this->session->userdata('admin'))
			redirect('admin');
	}


	public function index()

	{
		$this->load->view('home');
	}



	public function About()

	{
			$this->load->view('about');
	}


	

	
	public function home_function()

	{
		$this->load->view('home');
	}




	public function dashboard_function()

	{
		$this->load->view('admin/dashboard');
	}


	function logout()

 	 {
  	 	$this->session->unset_userdata('admin');
  	 	redirect('admin');
	 }
	

	
}