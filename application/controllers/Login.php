<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	
	
	//this is the login controller
	public function index()
	{
		
		$this->load->view('pages/login');
	}
}
