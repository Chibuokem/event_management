<!DOCTYPE html>
<html lang="en">
<head>
<title>Event Management system</title>
 <link href="images/favicon.ico" rel="shortcut icon"/>
<!-- Meta tag Keywords -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Meta tag Keywords -->
<!--css-->
<link href="<?php echo base_url();?>css/style.css" rel='stylesheet' type='text/css'/>
<link rel="stylesheet" href="css/font-awesome.css"> <!-- Font-Awesome-Icons-CSS -->
<!--css-->
<!--fonts-->
<link href="//fonts.googleapis.com/css?family=Cuprum&subset=latin-ext" rel="stylesheet">
<!--//fonts-->
</head>
<body>
	<h1><a href="<?php echo base_url();?>">Event Management System</a></h1>
	<div class="main-agile">
		<div class="content-wthree">
			<h2>CREATE AN ACCOUNT</h2>
            <h5 id="message" style="color:red; font-weight:bold;"></h5>
            <h5 id="success" style="color:green; font-weight:bold;"></h5>
			<form action="#" method="post" id="register-form">
				<div class="w3l-forming">
					<i class="fa fa-user" aria-hidden="true"></i>
					<input type="text" id="name" class="name" name="name" placeholder="Your Name" required>
				</div>
				<div class="w3l-forming">
					<i class="fa fa-envelope-o" aria-hidden="true"></i>
					<input type="email" id="email" class="email" name="email" placeholder="E-mail" required>
				</div>
				<div class="w3l-forming">
					<i class="fa fa-phone" aria-hidden="true"></i>
					<input type="text" id="phone" class="name" name="phone" placeholder="Phone Number" required>
				</div>
                <div class="w3l-forming">
					<i class="fa fa-user" aria-hidden="true"></i>
					<input type="text"  id="address" class="name" name="address" placeholder="Address" required>
				</div>
				<div class="w3l-forming">
					<i class="fa fa-unlock-alt" aria-hidden="true"></i>
					<input type="password" id="password" class="name" name="password" placeholder="Create Password" required>
				</div>
				<div class="w3l-forming">
					<i class="fa fa-unlock-alt" aria-hidden="true"></i>
					<input type="password"  id="password2" class="name" name="password2" placeholder="Confirm Password" required>
				</div>
				
			</form>
            <input type="submit" value="Register" id="register">
                <input type="submit" onClick="location.href='<?php echo base_url();?>login';" value="Login">
		</div>
		<div class="w3l-mk">
			<img src="imagess/2.png" alt="image" />
		</div>
		<div class="clear"></div>
	</div>
	<div class="footer-w3l">
		<p class="agileinfo"> &copy; 2017  All Rights Reserved | Design by Nwaiku Morgan CE/2011/375</p>
	</div>
</body>
<script type="text/javascript" src="<?php echo base_url();?>js/jquery-3.1.1.min">

</script>
<script type="text/javascript">
$(document).ready(function() {


 $("#register").click(function(q){	
	 q.preventDefault();
	 
	 
	 var name=$("#name").val();
   var phone=$("#phone").val();
    var address=$("#address").val();
	 var email=$("#email").val();
     
         var password1=$("#password").val();
         var password2=$("#password2").val();
		// var pattern = /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/; //email validation check
		 var pattern = /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i;
		var emailcheck=email.match(pattern);
	    
		
		 
		 if(name==""){
			 
		   	
			  $("#message").html("Please enter your  name ");
			
			
		}
		  
		  
		
		
		else if(email==""){
			 $("#message").html("Please enter email ");
		   	
			
		}
		
		else if(emailcheck==null){
		   	 $("#message").html("Please enter a valid email address ");
			
		}
 
         else if(phone==""){
		   	 $("#message").html("Please enter your phone number");
		}
		
	       else if(password1==""){
		   	 $("#message").html("Please enter your password ");
			
		} 
		
		 else if(password2==""){
		   	 $("#message").html("Please enter your confirmation password ");
			
		} 
		
		 else if(password1!==password2){
		   	 $("#message").html("Your passwords do not match ");
			
		}    
		  else{
		  
		  var data = $("#register-form").serialize();
		  $.ajax({
		   type: "POST",
		  
		   url: "<?php echo base_url();?>/process/register",
		   data : data,
			  
		   success: function(data){
			  
			if (data==true)    {
			$("#message").html(" ");
			  $("#success").html("Registration sucessful proceed to login");
			  
			$("#register").val('Registration successful ...');
      //setTimeout(' window.location.href = "dashboard.php"; ',4000);
			 
			}
			else    {
			
			 $("#message").html(data);
			  $("#register").val('<span class="glyphicon glyphicon-transfer"></span> &nbsp; Registration  Failed!');

			}
		   },
		   beforeSend:function()
		   {
			/* $("#errorr").fadeOut();*/
    $("#register").val('Sending ...');
		   }
		  });
		return false;
		
		  }// end of else statement braces 
	});
	
	//registration ends here
	
	}); 
</script>
</html>