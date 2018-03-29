<?php session_start(); 
defined('BASEPATH') OR exit('No direct script access allowed');
//process clas starts here
class Process extends CI_Controller {
	
	//registration method inside the process class
	public function register(){
		
		//load the url helper
	        $this->load->helper('url');
			//load the form helper
            $this->load->helper(array('form'));
			
			//get things from the post array
			$name=$this->input->post('name');
			$email=$this->input->post('email');
			$phone=$this->input->post('phone');
			$address=$this->input->post('address');
			$password=$this->input->post('password');
			if(empty($name)){
			die("Enter your name");	
			}
	             
				 //load the member class
	             $this->load->model('member');
				 //instantate the member class
		         $member_class=new Member(); 
				//loading the database connection
				require_once('connection.php');	
				
				$response = $member_class->register($name,$email,$phone,$address,$password,$this->db);
			if($response==true){
				die(true);
			}
			else{
			die($response);	
			}
	}
	
	
	//login method function 
	 public function login(){
	   //this function is responsible for login
	   //load url helper  
	    $this->load->helper('url');
		//load form helper
         $this->load->helper(array('form'));
		 //get email from post array
		 $email=$this->input->post('email');
		 //get password from post array
		$password = $this->input->post('password');
		
		//database connection
		require_once('connection.php');
			 
	    $this->load->model('member');
		$check = new Member(); 
		
		
		$result = $check->check($email,$password,$this->db);
		if($result == true){
		die(true);
			
		}
		else{
		die("Invalid email or password");	
		}
		
			
	   
   }
	


     public function request(){
	
	//connect to database 
	  require_once('connection.php');
	
     	//load form helper
		 $this->load->helper(array('form'));
		$location=$this->input->post('location');
		$event_type=$this->input->post('event_type');
		$guest_number=$this->input->post('guest_number');
		$date_event=$this->input->post('date_event');
		//get list of equipments from the post array
		$equipments = $this->input->post('equipments');
		//get promo code if it exists
			
				$promo = $this->input->post('promo');
			
			if (empty($promo)){
				$promo=0;
			}
		//load prices method model 
		 $this->load->model('pricees');
		 $this->load->model('orders');
		 $order_class = new Orders;
		 //instantiate prices class
		 $price_class=new Pricees;
		 //set initial price for equipments  to zero
		 $equipments_total=0;
		 //set inital price for refresments to zero
		 $refreshments_total=0;
          //add equipment prices from what the user choose 
		for($i=0;$i < count($equipments);$i++){
			$equipments_total=$equipments_total + $price_class->equipments($equipments[$i]);
		}
		//get refreshments chosen from the post array
		$refreshments = $this->input->post('refreshments');
        //loop to add total amount for refereshments
		for($j=0;$j < count($refreshments);$j++){
			$refreshments_total=$refreshments_total + $price_class->refreshment($refreshments[$j]);
		}
		//set location price 
		$location_price=$price_class->Location($location);
		//save equipments in json format so it can be stored in a database
		$equipments_list=json_encode($equipments);
		//save refreshment list in json format so it can be stored in a database
		$refreshments_list=json_encode($refreshments);
		
		$user=$_SESSION['id'];
		//send order to database.calling the register method from the order class model
		
		$total_price = (($equipments_total)+($refreshments_total*$guest_number))-$promo;
		
		//generate unique order id
		$chars = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
		$res = "";
		for ($i = 0; $i < 7; $i++) {
			$res .= $chars[mt_rand(0, strlen($chars)-1)];
		}
		$order_id=$res;
	$response=$order_class->register($order_id,$user,$location,$date_event,$event_type,$equipments_list,$refreshments_list,$total_price,$this->db);
			if($response==true){
			die(true);	
			}
			else{
			die($response);	
			}
	   
	   }
	
	   
	
	//process class ends here
	//coupon code generator
	/*$chars = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
$res = "";
for ($i = 0; $i < 10; $i++) {
    $res .= $chars[mt_rand(0, strlen($chars)-1)];
}*/

}
?>