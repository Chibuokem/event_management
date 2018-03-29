 <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            EVENT MANAGEMENT SYSTEM
            <small>dashboard</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <!-- Info boxes -->
          

          <div class="row">
            <!-- /.col -->
          </div><!-- /.row -->

          <!-- Main row -->
        <!-- /.box -->
        <div class="row">
                <div class="col-md-12">
                  <!-- DIRECT CHAT -->
              <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Profile</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                  	<div id="message" style="color:red; font-weight:bold;"></div>
                                                <div id="success" style="color:green; font-weight:bold;"></div>
                              <form role="form" action="" method="post" class="update-form" id="update-form">
	                    	<div class="form-group">
                            <label  for="name">Name</label>
	                        	<input type="text" value="<?php echo $details['name'];?>" name="name" placeholder="Name" class=" form-control" id="name" required >
                            </div>
                            
                            
                            <div class="form-group">
	                    		<label  for="form-email">Email </label>
	                        	<input type="email" value="<?php echo $details['email'];?>" name="email" placeholder="Email" class="form-control" id="form-email" required >
	                        </div>
                            
                             <div class="form-group">
                            <label  for="phone">Phone Number</label>
	                        	<input type="text" value="<?php echo $details['phone'];?>" name="phone" placeholder="Phone Number" class="form-control" id="phone" required >
	                        </div>
                            <div id="phone_error" style="color:green; font-weight:bold"></div>
                            <input type="hidden" id="phone_check">
                            
                           
                            
                             <div class="form-group">
                            <label  for="next_kin">Address</label>
	                        	<input type="text" value="<?php echo $details['address'];?>" name="address" placeholder="Next of kin" class=" form-control" id="address" required >
                            </div>
                            
                            
                            
	                       
	                    </form>
                </div><!-- /.box-body -->
                <div class="box-footer clearfix">
                 <button id="updateprofile" class="btn btn-success">Update Profile </button>
                 <!-- <a href="<?php echo base_url();?>user/request" class="btn btn-sm btn-info btn-flat pull-left">Place new request</a>-->
                  <!--<a href="javascript::;" class="btn btn-sm btn-default btn-flat pull-right">View your Requests</a>-->
                </div><!-- /.box-footer -->
              </div><!-- /.box -->
            </div><!-- /.col -->
<!-- /.col -->

                

              <!-- TABLE: LATEST ORDERS -->
             
            <!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <script type="text/javascript">
$(document).ready(function() {
//profile update starts here 
	 $("#updateprofile").click(function(u){	
	 u.preventDefault();
	  
   var name=$("#name").val();
   var phone=$("#phone").val();
    var emaill=$("#form-email").val();
      var address=$("#address").val();
     
        
		// var pattern = /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/; //email validation check
		 var pattern = /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i;
		var emailcheck=emaill.match(pattern);
	    
		   //check_mobile(errorDiv,phoneInput);
		
		 
		 if(emaill==""){
		   	 $("#message").html("Please enter email ");
			
		}
		  
		  
		else if(emailcheck==null){
		   	 $("#message").html("Please enter a valid email address ");
			
		}
		
		else if(name==""){
		   	 $("#message").html("Please enter your first name ");
			
		}
		
 
         else if(phone==""){
		   	 $("#message").html("Please enter your phone number");
		}
		
		 else if(address==""){
		   	 $("#message").html("Please enter your address");
		}
		
		
		  else{
		  
		  var data = $("#update-form").serialize();
		  $.ajax({
		   type: "POST",
		  
		   url: "<?php echo base_url();?>user/update_profile",
		   data : data,
			  
		   success: function(data){
			  
			if (data==true)    {
			  $("#success").html("Update successful!");
			   $("#updateprofile").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; Updated ');
			 
			}
			else    {
			
			 $("#message").html(data);
			  $("#updateprofile").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; Update  Failed!');

			}
		   },
		   beforeSend:function()
		   {
			/* $("#errorr").fadeOut();*/
    $("#updateprofile").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; updating ...');
		   }
		  });
		return false;
		
		  }// end of else statement braces 
	});

	//profile update ends here 
	
	});
	

</script>                                   
