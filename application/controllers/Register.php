<?php session_start();
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	//this is the register controller
	public function index()
	{
		
		$this->load->view('pages/register');
		
	}
	
}
