<?php
class Pricees extends CI_Model{
	

 
	    //to set  each location price and return it
		public function Location($location){
			  if ($location==='Enugu'){	
				return 100000;
			}
			else  if ($location==='Abuja'){	
				return 200000;
			}
			else  if ($location==='Lagos'){	
				return 150000;
			}
			else  if ($location==='Anambra'){	
				return 130000;
			}
		   else  if ($location==='Owerri'){	
				return 125000;
			}
			else  if ($location==='Benin'){	
				return 200000;
			}
		
		}
		
		//equipment prices
		public function equipments($request){
			if ($request =="dj"){
			  return 30000;	
			}
			else if ($request =="mc"){
			  return 40000;	
			}
			else if($request =="decoration"){
			  return 100000;	
			}
			else if($request =="canopies"){
			  return 25000;	
			}
			else if($request =="cake"){
			  return 12000;	
			}
			
			else if($request =="hall"){
			  return 200000;	
			}
		}
		
		public function refreshment($request){
			if ($request =="rice"){
			  return 40000;	
			}
			else if ($request =="semovita"){
			  return 30000;	
			}
			else if($request =="akpu"){
			  return 30000;	
			}
			else if($request =="abacha"){
			  return 25000;	
			}
			
		}
		
		
//pricees class ends here 

}
?>