<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>EMS| Invoice</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="<?php echo base_url()?>AdminLTE-2.3.0/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url()?>AdminLTE-2.3.0/dist/css/AdminLTE.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body onload="window.print();">
    <div class="wrapper">
      <!-- Main content -->
     <section class="invoice">
          <!-- title row -->
          <div class="row">
            <div class="col-xs-12">
              <h2 class="page-header">
                <i class="fa fa-globe"></i> Event Management System, Inc.
                <small class="pull-right">Date:<?php echo date('Y-m-d H:i:s');?></small>
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
              <p class="lead">Amount Due:<?php if ($order['status'][$i]==0){ echo $order['total_price'][$i];} else{ echo "0";}?></p>
              <div class="table-responsive">
                <table class="table">
                  <tr>
                    <th style="width:50%">Total:</th>
                    <td><?php echo $order['total_price'][$i];?></td>
                  </tr>
                  <!--<tr>
                    <th>Tax (9.3%)</th>
                    <td>$10.34</td>
                  </tr>
                  <tr>
                    <th>Shipping:</th>
                    <td>$5.80</td>
                  </tr>
                  <tr>
                    <th>Total:</th>
                    <td>$265.24</td>-->
                  </tr>
                </table>
              </div>
            </div><!-- /.col -->
          </div><!-- /.row -->

          <!-- this row will not appear when printing -->
          <div class="row no-print">
            <div class="col-xs-12">
             <!-- <a href="<?php echo base_url();?>user/invoice_print?id=<?php ?>" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> Print</a>-->
             <?php } }
			 
			 else{
				echo"<div class='alert alert-info'>No orders available to view</div>"; 
			 }
			 ?> 
              
             <!-- <button class="btn btn-success pull-right"><i class="fa fa-credit-card"></i> Submit Payment</button>
              <button class="btn btn-primary pull-right" style="margin-right: 5px;"><i class="fa fa-download"></i> Back</button>-->
            </div>
          </div>
        </section>

    <!-- AdminLTE App -->
    <script src="<?php echo base_url()?>AdminLTE-2.3.0/dist/js/app.min.js"></script>
  </body>
</html>
