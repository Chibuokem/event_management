 <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="invoice">
          <!-- title row -->
          <div class="row">
            <div class="col-xs-12">
              <h2 class="page-header">
                <i class="fa fa-globe"></i> Event Management System, Inc.
                <small class="pull-right">Date: 2/10/2017</small>
              </h2>
            </div><!-- /.col -->
          </div>
          <!-- info row -->
          
         <?php if($order!==""){?>
                                                       
                                                         
	     <?php 
													
         $no = count($order['id']);
                                                  
          for ($i = 0; $i < $no; $i++) { ?>  
          
          <div class="row invoice-info">
            <div class="col-sm-4 invoice-col">
              From
              <address>
                <strong><?php echo $_SESSION['name'];?></strong><br>
                <?php echo $_SESSION['address'];?><br>
                Email: <?php echo $_SESSION['email'];?><br>
                Phone: <?php echo $_SESSION['phone'];?><br>
              </address>
            </div><!-- /.col -->
            <div class="col-sm-4 invoice-col">
              To
              <address>
                <strong>Event Mgt, Inc.</strong><br>
                7 works Road GRA<br>
                Enugu State<br>
                Phone: (804) 123-5432<br>
                Email: info@eventmgtsystem.com
              </address>
            </div><!-- /.col -->
            <div class="col-sm-4 invoice-col">
              <b>Invoice #<?php echo $order['order_id'][$i];?></b><br>
              <br>
              <b>Order ID:</b> <?php echo $order['order_id'][$i];?><br>
              <!--<b>Payment Due:</b> 2/22/2014<br>-->
              
            </div><!-- /.col -->
          </div><!-- /.row -->

          <!-- Table row -->
          <div class="row">
            <div class="col-xs-12 table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>Event Location:</th>
                    <th>Event type</th>
                    <th>Equipments</th>
                    <th>Refreshments</th>
                    <th>Ordered on:</th>
                    <th>Total price:</th>
                    <th>Status:</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><?php echo $order['location'][$i];?></td>
                    <td><?php echo $order['event_type'][$i];?></td>
                    <td><?php 
					 $equipments[$i]=json_decode($order['equipments'][$i],true);
					 for ($k = 0; $k < count($equipments[$i]); $k++) {
					echo $equipments[$i][$k]." ";
					 }
					
					?></td>
                   
                   
                    <td><?php
					$refreshments[$i]=json_decode($order['refreshments'][$i],true);
					 for ($j = 0; $j < count($refreshments[$i]); $j++) {
					echo $refreshments[$i][$j]." ";
					 }
					 /*foreach($refreshments[$i] as $v) {
                       echo $refreshments[$i][$v]."";
                         }*/
					 ?>
                    
                    </td>
                    <td><?php echo $order['date_order'][$i];?></td>
                     <td><?php echo $order['total_price'][$i];?></td>
                     <td><?php if ($order['status'][$i]==0){ echo "pending";} else{ echo "Confirmed";}?></td>
                  </tr>
                  <tr>
                    
                </tbody>
              </table>
            </div><!-- /.col -->
          </div><!-- /.row -->

          <div class="row">
            <!-- accepted payments column -->
            <div class="col-xs-6">
              <p class="lead">Payment Methods:</p>
              <img src="<?php echo base_url();?>AdminLTE-2.3.0/dist/img/credit/visa.png" alt="Visa">
              <img src="<?php echo base_url();?>AdminLTE-2.3.0/dist/img/credit/mastercard.png" alt="Mastercard">
              <img src="<?php echo base_url();?>AdminLTE-2.3.0/dist/img/credit/american-express.png" alt="American Express">
              <img src="<?php echo base_url();?>AdminLTE-2.3.0/dist/img/credit/paypal2.png" alt="Paypal">
              <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
                Accepted Cards
              </p>
            </div><!-- /.col -->
            <div class="col-xs-6">
              <p class="lead">Amount Due 2/22/2014</p>
              <div class="table-responsive">
                <table class="table">
                  <tr>
                    <th style="width:50%">Subtotal:</th>
                    <td><?php echo $order['total_price'][$i];?></td>
                  </tr>
                  <tr>
                    <th>Tax (9.3%)</th>
                    <td>$10.34</td>
                  </tr>
                  <tr>
                    <th>Shipping:</th>
                    <td>$5.80</td>
                  </tr>
                  <tr>
                    <th>Total:</th>
                    <td>$265.24</td>
                  </tr>
                </table>
              </div>
            </div><!-- /.col -->
          </div><!-- /.row -->

          <!-- this row will not appear when printing -->
          <div class="row no-print">
            <div class="col-xs-12">
              <a href="<?php echo base_url();?>user/invoice_print?id=<?php ?>" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> Print</a>
             <?php } }
			 
			 else{
				echo"<div class='alert alert-info'>No orders available to view</div>"; 
			 }
			 ?> 
              
             <!-- <button class="btn btn-success pull-right"><i class="fa fa-credit-card"></i> Submit Payment</button>
              <button class="btn btn-primary pull-right" style="margin-right: 5px;"><i class="fa fa-download"></i> Back</button>-->
            </div>
          </div>
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->