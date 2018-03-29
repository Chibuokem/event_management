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
                  <h3 class="box-title">Your Requests</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <div class="table-responsive">
                    <table class="table no-margin">
                      <thead>
                        <tr>
                          <th>Order ID</th>
                          <th>Name</th>
                          <th>Status</th>
                          <th>Phone no</th>
                          <th>Date</th>
                          <th>Pay</th>
                          <th>Print Invoice</th>
                        </tr>
                      </thead>
                      <tbody>
                       <?php if($order!==""){?>
                                                       
                                                         
							 <?php 
                                                                        
                             $no = count($order['id']);
                                                                      
                              for ($i = 0; $i < $no; $i++) { ?> 
                        <tr>
                         
                              
                          <td><a href="#"><?php echo $order['order_id'][$i];?></a></td>
                          <td><?php echo $_SESSION['name'];?></td>
                          <td><span class="label label-success"><?php if ($order['status'][$i]==0){ echo "pending";} else{ echo "Confirmed";}?></span></td>
                          <td><div class="sparkbar" data-color="#00a65a" data-height="20"><?php echo $_SESSION['phone'];?></div></td>
                            <td><div class="sparkbar" data-color="#00a65a" data-height="20"><?php echo $order['date_order'][$i];?></div></td>
                            <td>
                            <?php if ($order['status'][$i]==0){?></span>
                            <form method="POST" action="https://voguepay.com/pay/"><input type="hidden" name="v_merchant_id" value="6328-0038158" /><input type="hidden" name="memo" value="Order from <?php echo $_SESSION['name'];?>" /><input type="hidden" name="cur" value="NGN" /><input type="hidden" name="item_1" value="<?php echo $order['event_type'][$i].""."Event";?>" /><input type="hidden" name="price_1" value="<?php echo $order['total_price'][$i];?>" /><input type="hidden" name="description_1" value="Event Management" /><br /><input type="image" src="https://voguepay.com/images/buttons/make_payment_blue.png" alt="PAY" /></form>
                            
                            <?php } else{ echo "Paid";} ?>
                            </td>
                            
                            
                            <td><a class="btn btn-success" href="<?php echo base_url();?>user/print_invoice?id=<?php echo $order['id'][$i]; ?>">Print</a></td>
                        </tr>
                       
                       <?php } }?>
                      </tbody>
                    </table>
                  </div><!-- /.table-responsive -->
                </div><!-- /.box-body -->
                <div class="box-footer clearfix">
                  <a href="<?php echo base_url();?>user/request" class="btn btn-sm btn-info btn-flat pull-left">Place new request</a>
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
