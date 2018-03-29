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
                    <th>Event Location</th>
                    <th>Sent on</th>
                    <th>Event date</th>
                    <th>Event type</th>
                    <th>Equipments(things ordered)</th>
                    <th>Refreshments</th>
                    <th>Total Price</th>
                    <th>Order id</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                
                <?php 
				
				 for ($i=0; $i<count($orders['id']); $i++){
				?>
                  <tr>
                 <td><?php echo $orders['id'][$i];?></td>
                    <td><?php echo $customer[$i]['name'];?></td>
                    <td><?php echo $customer[$i]['address'];?></td>
                    <td><?php echo $customer[$i]['phone'];?></td>
                    <td><?php echo $customer[$i]['email'];?></td>
                    <td><?php echo $orders['location'][$i];?></td>
                     
                      <td><?php echo $orders['date_order'][$i];?></td>
                       <td><?php echo $orders['date_event'][$i];?></td>
                        <td><?php echo $orders['event_type'][$i];?></td>
                         <td><?php $equipmentss=json_decode($orders['equipments'][$i],true);
						 $j=0;
					 for ($k = 0; $k < count($equipmentss); $k++) {
					echo $equipmentss[$k]." ";
					
					 }
						 ?></td>
                         
                          <td><?php $refreshmentss=json_decode($orders['refreshments'][$i],true);
					 for ($l = 0; $l < count($refreshmentss); $l++) {
					echo $refreshmentss[$l]." ";
					
					 }
						 ?></td>
                         <td><?php echo $orders['total_price'][$i];?></td>
                         <td><?php echo $orders['order_id'][$i];?></td>
                         <td><?php if( $orders['status'][$i]==0){ echo "Pending"; } else{ echo "Confirmed";}?></td>
                         
                          <td><?php if( $orders['status'][$i]==0){ ?>
											<button class="btn btn-success" onClick="confirmOrder(<?php echo $orders['id'][$i];?>,'c_btn<?php echo $i;?>')" id="c_btn<?php echo $i;?>">Confirm order!</button>
										<?php } else { echo "Confirmed"; }?> 
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
function confirmOrder(u,b){
	
	var conf = confirm("Are you sure you want to confirm this order with id:"+u);
	var btn_id=b;
	if(conf==true){
		$.post("<?php echo base_url();?>user/confirm_orders", {id: u} ,{})
			.done(function(data){
				     if(data==true){
						$("#"+btn_id+"").html("Order Confirmed")
					 }
					 else{
						alert(data); 
					 }
				
				
			});
	}
}
</script>