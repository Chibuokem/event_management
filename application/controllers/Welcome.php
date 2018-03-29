<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	//this is the welcome index controller that shows the welcome page  
	
	public function index()
	{
		//$this->load->view('welcome_message');
		//$this->load->view('pages/register');
		$this->load->view('user/index');
	}
}
