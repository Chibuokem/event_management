<?php
class Orders extends CI_Model{
	

  public function __construct(){
	
	$this->table = "orders";	
 date_default_timezone_set('Africa/Lagos');


}
	public function register($order_id,$user,$location,$date_event,$event_type,$equipments,$refreshments,$total_price,$db){
		
	
		//current time and date
		$timee=date('Y-m-d H:i:s');
$query="INSERT INTO ".$this->table."(order_id,user,location,date_event,event_type,equipments,refreshments,total_price,date_order ) VALUES(?,?,?,?,?,?,?,?,?)";
		//echo $db->error.$query;
		
			$statement = $db->prepare($query);
		
		$statement->bind_param("sssssssss",$order_id,$user,$location,$date_event,$event_type,$equipments,$refreshments,$total_price,$timee);
		
	 //$result = $db->query($query);
	 
	 if ( $statement->execute() ){
		 
		 return true;
	 }
	 
	 else{
		
		return false;
		//echo $db->error;
	 }
	               
		
	}

    public function get_user_order($db){
		$data=array();
		$i=0;
		//if session is not set that means the user is not logged in..redirect user to home page
		if(!isset($_SESSION['id'])){
			//home page url
			$location=base_url();
			//redirect user 
			redirect($location);
		}
		  $user=$_SESSION['id'];
		  
		  $query = "SELECT * FROM ".$this->table." WHERE user=? ";
		  $statement = $db->prepare($query);
		  $statement->bind_param("s",$user);
	 if ( $statement->execute() ){	 
		 $result = $statement->get_result();
		 $num = $result->num_rows;
		 
		 if($num > 0){
			 //fetch result from database in an associative array 
			while( $row = $result->fetch_assoc()){
			 
			//put data gotten from database inside an array
			 $data['id'][$i] = $row['id'];
			 $data['order_id'][$i] = $row['order_id'];
			 $data['location'][$i] = $row['location'];
			 $data['date_event'][$i] = $row['date_event'];
			 //$data['id'][$i] = $row['id'];
			 $data['event_type'][$i] = $row['event_type'];
			 $data['equipments'][$i] = $row['equipments'];
			 $data['refreshments'][$i] = $row['refreshments'];
			 $data['date_order'][$i] = $row['date_order'];
			 $data['total_price'][$i] = $row['total_price'];
			 $data['status'][$i] = $row['status'];
			 
			 $i++;
			}
		 return $data;
		
		 }
		 else{
			 
			return false; 
		 }
	 }
	 else{
		return false;
	 }
		  
	  }


 public function get_order($id,$db){
		$data=array();
		$i=0;
		//if session is not set that means the user is not logged in..redirect user to home page
		if(!isset($_SESSION['id'])){
			//home page url
			$location=base_url();
			//redirect user 
			redirect($location);
		}
		  $user=$_SESSION['id'];
		  
		  $query = "SELECT * FROM ".$this->table." WHERE id=? AND user=? ";
		  $statement = $db->prepare($query);
		  $statement->bind_param("ss",$id,$user);
	 if ( $statement->execute() ){	 
		 $result = $statement->get_result();
		 $num = $result->num_rows;
		 
		 if($num > 0){
			 //fetch result from database in an associative array 
			while( $row = $result->fetch_assoc()){
			 
			//put data gotten from database inside an array
			 $data['id'][$i] = $row['id'];
			 $data['order_id'][$i] = $row['order_id'];
			 $data['location'][$i] = $row['location'];
			 $data['date_event'][$i] = $row['date_event'];
			 //$data['id'][$i] = $row['id'];
			 $data['event_type'][$i] = $row['event_type'];
			 $data['equipments'][$i] = $row['equipments'];
			 $data['refreshments'][$i] = $row['refreshments'];
			 $data['date_order'][$i] = $row['date_order'];
			 $data['total_price'][$i] = $row['total_price'];
			 $data['status'][$i] = $row['status'];
			 
			 $i++;
			}
		 return $data;
		
		 }
		 else{
			 
			return false; 
		 }
	 }
	 else{
		return false;
	 }
		  
	  }
	  
	  //get all orders 
	   public function get_all_orders($db){
		$data=array();
		$i=0;
		//if session is not set that means the user is not logged in..redirect user to home page
		if(!isset($_SESSION['id'])){
			//home page url
			$location=base_url();
			//redirect user 
			redirect($location);
		}
		  $user=$_SESSION['id'];
		  
		  $query = "SELECT * FROM ".$this->table."  ";
		  $result = $db->query($query);
			$num = mysqli_num_rows($result); 
		
		 if($num > 0){
			 //fetch result from database in an associative array 
				while($row = mysqli_fetch_array($result)){
				 
				//put data gotten from database inside an array
				 $data['id'][$i] = $row['id'];
				 $data['order_id'][$i] = $row['order_id'];
				 $data['location'][$i] = $row['location'];
				 $data['date_event'][$i] = $row['date_event'];
				 //$data['id'][$i] = $row['id'];
				 $data['event_type'][$i] = $row['event_type'];
				 $data['equipments'][$i] = $row['equipments'];
				 $data['refreshments'][$i] = $row['refreshments'];
				 $data['date_order'][$i] = $row['date_order'];
				 $data['total_price'][$i] = $row['total_price'];
				 $data['status'][$i] = $row['status'];
				 $data['user'][$i] = $row['user'];
				 $i++;
				}
		 return $data;
		
		 }
		 else{
			 
			return false; 
		 }
	 
		  
	  }

		
		//get all orders based on the status supplied to it. 0 if unconfirmed 1 if confirmed
		 public function get_orders_admin($status,$db){
		$data=array();
		$i=0;
		//if session is not set that means the user is not logged in..redirect user to home page
		if(!isset($_SESSION['id'])){
			//home page url
			$location=base_url();
			//redirect user 
			redirect($location);
		}
		  //$user=$_SESSION['id'];
		
		  
		  $query = "SELECT * FROM ".$this->table." WHERE status=?  ";
		  $statement = $db->prepare($query);
		  $statement->bind_param("s",$status);
	 if ( $statement->execute() ){	 
		 $result = $statement->get_result();
		 $num = $result->num_rows;
		 
		 if($num > 0){
			 //fetch result from database in an associative array 
			while( $row = $result->fetch_assoc()){
			 
			//put data gotten from database inside an array
			 $data['id'][$i] = $row['id'];
			 $data['order_id'][$i] = $row['order_id'];
			 $data['location'][$i] = $row['location'];
			 $data['date_event'][$i] = $row['date_event'];
			 //$data['id'][$i] = $row['id'];
			 $data['event_type'][$i] = $row['event_type'];
			 $data['equipments'][$i] = $row['equipments'];
			 $data['refreshments'][$i] = $row['refreshments'];
			 $data['date_order'][$i] = $row['date_order'];
			 $data['total_price'][$i] = $row['total_price'];
			 $data['status'][$i] = $row['status'];
			  $data['user'][$i] = $row['user'];
			 $i++;
			}
		 return $data;
		
		 }
		 else{
			 
			return false; 
		 }
	 }
	 else{
		return false;
	 }
		  
	  }

		//confirm orders by admin
		public function confirm($id,$db){
			$query="UPDATE ".$this->table." SET status=1 WHERE id=? LIMIT 1";
			$statement = $db->prepare($query);
			$statement->bind_param("s",$id);
			
			 if ( $statement->execute() ){
				 return true;	
				}
			else{
			return false;	
			}
			
		}

//order class ends here 

}
?>