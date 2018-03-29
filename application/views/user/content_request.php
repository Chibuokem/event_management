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
             <section class="content">

          <!-- SELECT2 EXAMPLE -->
          <div class="box box-default">
            <div class="box-header with-border">
              <h3 class="box-title">MAKE YOUR REQUEST</h3>
              <div id="errorr" style="font-weight:bold; color:red;"></div>
              <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
              </div>
            </div><!-- /.box-header -->
            <div class="box-body">
              <div class="row">
                <div class="col-md-6">
                
                  <div class="form-group">
                  <form id="requests" method="post">
                    <label>Location *</label>
                    <select class="form-control select2" style="width: 100%;" name="location" id="location">
                      <option value="0"  selected>Select state</option>
                      <option value="Enugu">Enugu</option>
                      <option value="Abuja">Abuja</option>
                      <option value="Lagos">Lagos</option>
                      <option value="Anambra">Anambra</option>
                      <option value="Owerri">Owerri</option>
                      <option value="Benin">Benin</option>
                    </select>
                  </div><!-- /.form-group -->
                 <!-- <div class="form-group">
                    <label>Venue Type *</label>
                    <select class="form-control select2" style="width: 100%;" name="venue" id="venue">
                      <option selected="selected" value="0">Choose</option>
                      <option value="large_hall">Large Hall</option>
                      <option value="small_hall">Small Hall</option>
                      <option value="outside">Outside</option>
                      <option value="garden">Garden</option>
                    </select>
                  </div>-->
                   
                   
              <div class="form-group">
                    <div class='input-group date' id='datetimepicker2' >
                        <input type='text' class="form-control" name="date_event" id="date_event" placeholder="Event date"/>
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                    </div>
            </div>
       
        
      
                   
                  
                  <div class="form-group">
                    <label for="event">Event Type *</label>
                    <select class="form-control select2" style="width: 100%;" id="event_type" name="event_type">
                      <option value="0" selected="selected">Choose</option>
                      <option value="birthday" >Birthday</option>
                      <option value="wedding">Wedding</option>
                      <option value="burial">Burial</option>
                      <option value="conference">Conference</option>
                    </select>
                  </div><!-- /.form-group -->
                </div><!-- /.col -->
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="guest_number">Estimated Number of Guests *</label>
                    <select class="form-control select2" style="width: 100%;" name="guest_number" id="guest_number">
                      <option value="0" selected="selected">Choose</option>
                      <option value="2">100 to 500</option>
                      <option value="4">500 to 1000</option>
                      <option value="8">1000 to 2000</option>
                      <option value="10">2000 and above</option>
                    </select>
                  </div><!-- /.form-group -->
                 
<!-- /.form-group -->
<div class="box box-success">
                <div class="box-header">
                  <h3 class="box-title">Equipments(things to cover)</h3>
                </div>
                <div class="box-body">
                  <!-- Minimal style -->

                  <!-- checkbox -->
                   <div class="form-group">
                   
                    <label >
                      <input type="checkbox" class="minimal"  name="equipments[]" value="Hall" >
                
                     Hall
                    </label>
                  </div>
                  
                   <div class="form-group">
                   
                    <label >
                      <input type="checkbox" class="minimal"  name="equipments[]" value="mc" >
                
                      Mc
                    </label>
                  </div>
                  
                  <div class="form-group">
                   
                    <label >
                      <input type="checkbox" class="minimal"  name="equipments[]" value="dj" >
                
                      Dj
                    </label>
                  </div>
                    <div class="form-group">
                   
                    <label>
                      <input type="checkbox" class="minimal" name="equipments[]" value="decoration">
                   
                      Decoration
                    </label></div>
                   <div class="form-group"> <label>
                      <input type="checkbox" class="minimal" name="equipments[]" value="cake">
                   
                      Cake
                    </label>
                  </div>
                  <div class="form-group"> <label>
                      <input type="checkbox" class="minimal" name="equipments[]" value="canopies">
                   
                      Canopies
                    </label>
                  </div>
                  </div>
                  <div class="box box-success">
                <div class="box-header">
                  <h3 class="box-title">Refreshment</h3>
                </div>
                <div class="box-body">
                  <!-- Minimal style -->
                    <div class="form-group">
                   
                    <label>
                      <input type="checkbox" class="minimal" name="refreshments[]" value="rice">
                   
                      Rice
                    </label></div>
                    
                     <div class="form-group">
                   
                    <label>
                      <input type="checkbox" class="minimal" name="refreshments[]" value="semovita">
                   
                      Semovita
                    </label></div>
                    
                     <div class="form-group">
                   
                    <label>
                      <input type="checkbox" class="minimal" value="akpu" name="refreshments[]">
                   
                      Akpu
                    </label></div>
                     
                     <label>
                      <input type="checkbox" class="minimal" name="refreshments[]" name="abacha" value="abacha">
                   
                      Abacha
                    </label></div>
                    
                    
             
                  </div>
                  <!--<div class="form-group">
                    <label>Promo code</label>
                    <input type="text" class="form-control my-colorpicker1" name="promo">
                  </div>-->
                  </div>
                  <button class="btn btn-default" type="reset"><i class="fa fa-times"></i> Reset</button>
                 
                  </form>
                    <button type="submit" class="btn btn-success" id="request"><i class="fa fa-envelope-o"></i> Submit Request</button>
                  
                  
                  </div>
                  </div>
                </div><!-- /.col -->
              </div>
              <!-- /.row -->
            </div><!-- /.box-body -->
            <div class="box-footer">
            
            </div>
          </div><!-- /.box -->
<!-- /.col -->

               <!-- /.row -->

              <!-- TABLE: LATEST ORDERS -->
             
            <!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <script>
	  $(document).ready(function() {
	  
      $("#request").click(function(q){	
	 q.preventDefault();
	 
		var event_type=$("#event_type").val();
		var location=$("#location").val()
		var date_event=$("#date_event").val()
		
		 
		 if(event_type=="0"){
		   	 $("#errorr").html("Please choose event type ");
			alert("Please choose event type");
		}
		  
		 else if(location=="0"){
		   	 $("#errorr").html("please choose location");
			 alert("please choose location");
		}
		  
		
		  
		  else{
		  
		  var data = $("#requests").serialize();
		  $.ajax({
		   type: "POST",
		  
		   url: "<?php echo base_url();?>process/request",
		   data : data,
			  
		   success: function(data){
			  
			if (data==true)    {
			 
			$("#request").html('Request sent...');
     // setTimeout(' window.location.href = "<?php //echo base_url();?>user"; ',2000);
			 
			}
			
			else{
			alert(data);
			 $("#errorr").html(data);
			  $("#request").html('Sending Failed!');

			}
		   },
		   beforeSend:function()
		   {
			/* $("#errorr").fadeOut();*/
    $("#request").html('Sending ...');
		   }
		  });
		return false;
		
		  }// end of else statement braces 
	});
	
	
	}); 
</script>
