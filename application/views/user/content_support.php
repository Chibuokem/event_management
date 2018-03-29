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
        			 <div class='container'>
					
					       <div class="col-md-11">
				<div class="panel panel-default">
					<div class="panel-heading"><svg class="glyph stroked email"><use xlink:href="#stroked-email"></use></svg> Contact Form</div>          
                    <div id="error" style="color:red; font-weight:bold;"></div>
                    <div id="success" style="color:green; font-weight:bold;"></div>
                    
					<div class="panel-body">
					
						<form class="form-horizontal" id='form-support'>
							<fieldset>
								<!-- Contact input-->
								<div class="form-group">
									<label class="col-md-3 control-label" for="email"><!--Contact E-mail--></label>
									<div class="col-md-9">
										<input id="email" name="email"  class="form-control" type="hidden" value="<?php echo $details['email'];?>" type="hidden">
                                       
                                        <input id="name" name="name"   type="hidden" value="<?php echo $details['name'];?>">
                                        <input id="phone" name="phone"   type="hidden" value="<?php echo $details['phone'];?>">
									</div>
								</div>
								<!-- Subject input-->
								<div class="form-group">
									<label class="col-md-3 control-label" for="subject">Subject</label>
									<div class="col-md-9">
										<input id="subject" name="subject" placeholder="Message Subject" class="form-control" type="text">
									</div>
								</div>
								
								<!-- Message body -->
								<div class="form-group">
									<label class="col-md-3 control-label" for="message">Your message</label>
									<div class="col-md-9">
										<textarea class="form-control" id="message" name="message" placeholder="Please enter your message here..." rows="5"></textarea>
									</div>
								</div>
								<!-- Attachment --
								<div class="form-group">
									<label class="col-md-3 control-label" for="attachment">Your Attachment</label>
									<div class="col-md-9">
										<input type="file" class="form-control" id="attach" name="attach" placeholder="Upload necessary attachment here..." />
									</div>
								</div>
								
								<!-- Form actions -->
								<div class="form-group">
									<div class="col-md-12 widget-right">
										<button id='contactsupport' class="btn btn-primary  pull-right">Send</button>
									</div>
								</div>
							</fieldset>
						</form>
					</div>
				</div>
			</div><!--/.col-->
                </div><!-- /.box-body -->
                <div class="box-footer clearfix">
                 
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
$( document ).ready(function(){

 $("#contactsupport").click(function(x){	
	 x.preventDefault();
	 
	   //   var email=$("#email").val();
	    // var pattern = /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i;
		//var emailcheck=email.match(pattern);
	  
	   
		var subject=$("#subject").val();
		
		var messagee=$("#message").val();
		
		
		 
		
		   if(subject==""){
		  	 $("#error").html("Please enter your subject ");
		  }
		   else if(messagee==""){
		  	 $("#error").html("Please enter your message ");
		  }
		  
		  
		  else{
		  
		  var data = $("#form-support").serialize();
		   $.ajax({
		   type: "POST",
		  
		    url: "<?php echo base_url();?>user/support",
		   data : data,
			  
		   success: function(data){
			  
			if (data==true)    {
			  $("#success").html("Message sent");
		
			$("#contactsupport").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; Message sent  ');
			 
			}
			else    {
			
			 $("#error").html(data);
			  $("#contactsupport").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; Sending  Failed!');


			}
		   },
		   beforeSend:function()
		   {
			/* $("#errorr").fadeOut();*/
    $("#contactsupport").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; Sending message ...');
		   }
		  });
		return false;
		
		  }// end of else statement braces 
		 
	});
	//contact ends here

});
</script>