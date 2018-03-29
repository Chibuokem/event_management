<?php session_start();
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	
	public function register()
	{
		
		$this->load->view('pages/register');
		
	}
	//this is the login controller
	public function index()
	{
		 require_once('connection.php');
	  //load the order model class
	   $this->load->model('orders');
	   
	   //instantiate the order model class
		 $order_class = new Orders;
		 $response_order=$order_class->get_user_order($this->db);
		 if($response_order==false){
			$data['order']=""; 
		 }
		 else{
			$data['order']=$response_order; 
		 }
		$this->load->view('user/head');
		$this->load->view('user/content_index',$data);
		$this->load->view('user/footer');
	}
	
	public function request()
	{
		
		$this->load->view('user/head');
		$this->load->view('user/content_request');
		$this->load->view('user/footer');
	}
	
	public function invoice()
	{
		//connect to database 
	  require_once('connection.php');
	  //load the order model class
	   $this->load->model('orders');
	   
	   //instantiate the order model class
		 $order_class = new Orders;
		 $response_order=$order_class->get_user_order($this->db);
		 if($response_order==false){
			$data['order']=""; 
		 }
		 else{
			$data['order']=$response_order; 
		 }
	    $this->load->view('user/head');
		$this->load->view('user/content_invoice',$data);
		$this->load->view('user/footer');
	 	
	}
	
	
	public function print_invoice()
	{
		 $this->load->helper(array('form'));
		$id=$this->input->get('id');
		//connect to database 
	  require_once('connection.php');
	  //load the order model class
	   $this->load->model('orders');
	   
	   //instantiate the order model class
		 $order_class = new Orders;
		 $response_order=$order_class->get_order($id,$this->db);
		 if($response_order==false){
			$data['order']=""; 
		 }
		 else{
			$data['order']=$response_order; 
		 }
	    $this->load->view('user/invoice-print',$data);
		
	 	
	}
	
	
	//this function is to get user profile
	public function profile()
	{
		
		require_once('connection.php');
	    $this->load->model('member');
		//instantiate the member class	
		$member_class = new Member();
		//get profile data from member class
		$result_member = $member_class->get_profile($this->db);
		$data['details'] = $result_member;
		$this->load->view('user/head');
		$this->load->view('user/content_profile',$data);
		$this->load->view('user/footer');
		
		
	}
	
	
	   //this function is to update user profile
		public function update_profile()
	{
		   //load url helper
		   //load form helper
		    $this->load->helper('url');
		    $this->load->helper(array('form'));
			$name=$this->input->post('name');
			$address=$this->input->post('address');
			$email=$this->input->post('email');
			$phone=$this->input->post('phone');
			
			
			//connect to database
		require_once('connection.php');
		
		//instantiate the member class
	    $this->load->model('member');
			
		$member_class = new Member();
		//get profile data from member class
		$result_member = $member_class->update_profile($name,$email,$phone,$address,$this->db);
		
		//check result
		if($result_member==true){
		  die(true);	
		}
		else{
		die(false);	
		}
		
		
	}
	
	//admin support message sending
	    public function support(){
		 require_once('connection.php');
		 //load the member class
		   $this->load->helper(array('form'));
			//get data from post array
			$email=$this->input->post('email');
			$subject=$this->input->post('subject');
			$message=$this->input->post('message');
			$name=$this->input->post('name');
			$phone=$this->input->post('phone');
			$this->load->model('support');
			$support_class = new Support();
			
			$response=$support_class->sendmessage($name,$phone,$subject,$message,$email,$this->db);
		    if($response==true){
				die(true);	
			}
			else{
			die(false);	
			}
		
	}
	
	
		
	public function help(){
		  require_once('connection.php');
		 //load the member class 
		 $this->load->model('member');
		 //instantiate the member class
		  $member_class = new Member();
		  //get profile details
		$result_member = $member_class->get_profile($this->db);
		$data['details'] = $result_member;
	      
			//load views and pass data into the views
			 $this->load->view('user/head');
		    $this->load->view('user/content_support',$data);
		    $this->load->view('user/footer');
		  
	}
	
	
	//get all orders 
	public function orders_all(){
		  require_once('connection.php');
		 //load the member class 
		 $this->load->model('member');
		 //load the orders class
		 $this->load->model('orders');
		 //instantiate the member class
		  $member_class = new Member();
		  //instantiate the orders class
		  $orders_class = new Orders();
		  //get profile details
		  $result_orders = $orders_class->get_all_orders($this->db);
		  if($result_orders !==false){
		  $data['orders'] = $result_orders;
		  }
		  else{
			$data['orders'] = "";  
		  }
		   if($result_orders !==false){
				  for ($i=0; $i<count($result_orders['id']); $i++){
					  //get customer details
			      	$result_member[$i] = $member_class->get_data_from_id($result_orders['user'][$i],$this->db);
				  }
		  $data['customer'] = $result_member;
		}
		else{
		$data['customer'] = "";	
		}
		
	      
			//load views and pass data into the views
			 $this->load->view('user/head');
		    $this->load->view('user/content_orders_all',$data);
		    $this->load->view('user/footer');
		  
	}
	
	
	//get unconfirmed orders
	public function orders_confirm(){
		  require_once('connection.php');
		 //load the member class 
		 $this->load->model('member');
		 //load the orders class
		 $this->load->model('orders');
		 //instantiate the member class
		  $member_class = new Member();
		  //instantiate the orders class
		  $orders_class = new Orders();
		  //status =0 doe orders not confirmed
		  $status=0;
		  $result_orders = $orders_class->get_orders_admin($status,$this->db);
		  if($result_orders !==false){
		  $data['orders'] = $result_orders;
		  }
		  else{
			$data['orders'] = "";  
		  }
		   if($result_orders !==false){
				  for ($i=0; $i<count($result_orders['id']); $i++){
					  //get customer details
			      	$result_member[$i] = $member_class->get_data_from_id($result_orders['user'][$i],$this->db);
				  }
		  $data['customer'] = $result_member;
		}
		else{
		$data['customer'] = "";	
		}
		
	      
			//load views and pass data into the views
			 $this->load->view('user/head');
		    $this->load->view('user/content_orders_confirm',$data);
		    $this->load->view('user/footer');
		  
	}
	
	//confirm orders
	public function confirm_orders(){
		 //data base connection
		   require_once('connection.php');
		    $this->load->helper(array('form'));
			//get data from post array
			$id=$this->input->post('id');
			
			
			//load orders model
		     $this->load->model('orders');
			 //instantiate the orders class
			  $orders_class = new Orders();
			  //check response from confirmation of order
			  $response=$orders_class->confirm($id,$this->db);
			  if($response==true){
              die(true);
				  
			  }
			  else{
				die(false);  
			  }
	}

	//make admin function
	 public function make_admin(){
		 $this->load->helper(array('form'));
			//get data from post array
			$id=$this->input->post('id');
		   require_once('connection.php');
		
		 //load the member class 
		 $this->load->model('member');
		 //instantiate the member class
		  $member_class = new Member();
		  $result_admin= $member_class->make_admin($id,$this->db);
		  if($result_admin==true){
			die(true);  
		  }
		  else{
			die("Error occured while making user admin");  
		  }
		  //get profile details
		
	}
	
	
	//remove admin
	public function remove_admin(){
		 $this->load->helper(array('form'));
			//get data from post array
			$id=$this->input->post('id');
		   require_once('connection.php');
		
		 //load the member class 
		 $this->load->model('member');
		 //instantiate the member class
		  $member_class = new Member();
		  $result_remove= $member_class->remove_admin($id,$this->db);
		  if($result_remove==true){
			die(true);  
		  }
		  else{
			die("Error occured while removing admin priviledge");  
		  }
		    //get profile details
	}
	
	//get all users 
	    public function users_all(){
		  require_once('connection.php');
		 //load the member class 
		 $this->load->model('member');
		
		 //instantiate the member class
		  $member_class = new Member();
		  
		  $result_member = $member_class->get_users($this->db);
		  if($result_member !==false){
		  $data['customer'] = $result_member;
		  }
		  else{
			$data['customer'] = "";  
		  }
			//load views and pass data into the views
			 $this->load->view('user/head');
		    $this->load->view('user/content_users',$data);
		    $this->load->view('user/footer');
		  
	}
	
	//support messages 
	public function support_messages(){
	 require_once('connection.php');
		$this->load->model('support');
		$support_class = new Support();
			
		$messages=$support_class->recieve($this->db);
		if($messages==false){
		$messages="";	
		}
		$data['messages']=$messages;
		//load views
		 $this->load->view('user/head');
		  $this->load->view('user/content_support_messages',$data);
		  $this->load->view('user/footer');
	}
	
	//logout function 
	public function logout(){
		//set session id array to empty
	$_SESSION['id'] = array();
	$_SESSION['name'] = array();
	$_SESSION['email'] = array();
	$_SESSION['phone'] = array();
	$_SESSION['address'] = array();
	//set home location
  $location = base_url();
//destroy session
	session_destroy();
	//redirect the user to home page	
	redirect($location);
	}
	
	//user class ends here 
}
