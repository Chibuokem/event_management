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
        			 <!-- Table row -->
          <div class="row">
            <div class="col-xs-12 table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr>
                  <th>ID</th>
                    <th>Customer name</th>
                    <th>Address</th>
                    <th>Phone no</th>
                    <th>Email</th>
                   <th>Level</th>
                  </tr>
                </thead>
                <tbody>
                
                <?php 
				
				 for ($i=0; $i<count($customer['id']); $i++){
				?>
                  <tr>
                 <td><?php echo $customer['id'][$i];?></td>
                    <td><?php echo $customer['name'][$i];?></td>
                    <td><?php echo $customer['address'][$i];?></td>
                    <td><?php echo $customer['phone'][$i];?></td>
                    <td><?php echo $customer['email'][$i];?></td>
                    <td><?php if ($customer['level'][$i]==0){echo "User";}else{ echo "Admin";}?></td>                     
                                               
                          <td><?php if( $customer['level'][$i]==0){ ?>
											<button class="btn btn-success" onClick="makeAdmin(<?php echo $customer['id'][$i];?>,'c_btn<?php echo $i;?>')" id="c_btn<?php echo $i;?>">Make Admin</button>
										<?php } else {  ?>
										
										<button class="btn btn-danger" onClick="removeAdmin(<?php echo $customer['id'][$i];?>,'r_btn<?php echo $i;?>')" id="r_btn<?php echo $i;?>">Remove Admin</button>
										<?php }?> 
                           </td>
                         
                         <?php } ?>
                  </tr>
                  <tr>
                    
                </tbody>
              </table>
            </div><!-- /.col -->
          </div><!-- /.row -->
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
//make admin function
function makeAdmin(u,b){
	
	var conf = confirm("Are you sure you want to Make this user with id:"+u+" Admin");
	var btn_id=b;
	if(conf==true){
		$.post("<?php echo base_url();?>user/make_admin", {id: u} ,{})
			.done(function(data){
				     if(data==true){
						$("#"+btn_id+"").html("User Admin")
					 }
					 else{
						alert(data); 
					 }
				
				
			});
	}
}

//remove admin priviledges 
function removeAdmin(u,b){
	var conf = confirm("Are you sure you want to remove this User's admin priviledges? with id:"+u);
	var btn_id=b;
	if(conf==true){
		$.post("<?php echo base_url();?>user/remove_admin", {id: u} ,{})
			.done(function(data){
				        if(data==true){
						$("#"+btn_id+"").html("admin removed")
						}
				      else{
						alert(data); 
					 }
			});
	}
}

</script>