<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
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
<link href="css/style.css" rel='stylesheet' type='text/css'/>
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
			<h2>LOGIN</h2>
           <!-- errors will be displayed here -->
            <h5 id="errorr" style="color:red; font-weight:bold;"></h5>
			<form action="#" method="post" id="login-form">
			
				<div class="w3l-forming">
					<i class="fa fa-envelope-o" aria-hidden="true"></i>
					<input type="email" id="email" class="email" name="email" placeholder="E-mail" required="">
				</div>
				
				<div class="w3l-forming">
					<i class="fa fa-unlock-alt" aria-hidden="true"></i>
					<input type="password" id="password" class="name" name="password" placeholder="Create Password" required="">
				</div>
				
				
                
			</form>
            <input type="submit" value="LOGIN" id="btn-login">
			 <input type="submit" onClick="location.href='<?php echo base_url();?>';" value="Register">
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


 $("#btn-login").click(function(q){	
	 q.preventDefault();
	 
		var emaill=$("#email").val();
		var passwordd=$("#password").val()
		// var pattern = /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/; //email validation check
		 var pattern = /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i;
		 var emailcheck=emaill.match(pattern);
		 var passwordd=$("#password").val();
		 
		 if(emaill==""){
		   	 $("#errorr").html("Please enter email ");
			
		}
		  
		 else if(emailcheck==null){
		   	 $("#errorr").html("Please enter a valid email address ");
			 /*alert("please enter email")*/;
		}
		  
		  else if (passwordd==""){
			
			   $("#errorr").html("Please enter password ");
		  }
		  
		  else{
		  
		  var data = $("#login-form").serialize();
		  $.ajax({
		   type: "POST",
		  
		   url: "<?php echo base_url();?>/process/login",
		   data : data,
			  
		   success: function(data){
			  
			if (data==true)    {
			 
			$("#btn-login").val('Signing In ...');
      setTimeout(' window.location.href = "<?php echo base_url();?>user"; ',2000);
			 
			}
			
			else    {
			
			 $("#errorr").html(data);
			  $("#btn-login").val('Login Failed!');

			}
		   },
		   beforeSend:function()
		   {
			/* $("#errorr").fadeOut();*/
    $("#btn-login").val('Sending ...');
		   }
		  });
		return false;
		
		  }// end of else statement braces 
	});
	
	}); 
</script>



</html>