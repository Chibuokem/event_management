<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>EVENT MANAGEMENT SYSTEM</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
     <link rel="stylesheet" href="<?php echo base_url();?>AdminLTE-2.3.0/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="<?php echo base_url();?>AdminLTE-2.3.0/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url();?>AdminLTE-2.3.0/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo base_url();?>AdminLTE-2.3.0/dist/css/skins/_all-skins.min.css">
     <!-- jQuery 2.1.4 -->
    <script src="<?php echo base_url();?>AdminLTE-2.3.0/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="<?php echo base_url();?>AdminLTE-2.3.0/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>AdminLTE-2.3.0/bootstrap/js/bootstrap-datepicker.js"></script>
   
   

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

      <header class="main-header">

        <!-- Logo -->
        <a href="<?php echo base_url();?>user" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>A</b>LT</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>EM SYSTEM</b></br></span>
        </a>

        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less
              <!-- Notifications: style can be found in dropdown.less -->
              
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="<?php echo base_url();?>AdminLTE-2.3.0/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                  <span class="hidden-xs"><?php echo $_SESSION['name'];?></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="<?php echo base_url();?>AdminLTE-2.3.0/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                    <p>
                      <?php echo $_SESSION['name'];?>
                      <small>Member since-<?php echo $_SESSION['time'];?></small>
                    </p>
                  </li>
                  <!-- Menu Body -->
                  <li class="user-body">
                    <div class="col-xs-4 text-center">
                      <a href="<?php echo base_url();?>user">Event</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="<?php echo base_url();?>user">MGT</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="<?php echo base_url();?>user">System</a>
                    </div>
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    
                    <div class="pull-right">
                      <a href="<?php echo base_url()?>user/logout" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
              <!-- Control Sidebar Toggle Button -->
              <li>
                <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
              </li>
            </ul>
          </div>

        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="<?php echo base_url();?>AdminLTE-2.3.0/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p><?php echo $_SESSION['name'];?></p>
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          <!-- search form -->
          <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
               <script type="text/javascript">
		$(document).ready(function() {
			
           /* $(function () {
                $('#datetimepicker2').datetimepicker({
                    locale: 'ru'
                });
            });*/
			
			 });
        </script>
            </div>
          </form>
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            
            
             <li class="active treeview">
              <a href="<?php echo base_url();?>user">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
            </li>
            <li class="active treeview">
              <a href="<?php echo base_url();?>user/profile">
                <i class="fa fa-user"></i> <span>View Profile</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
            </li>
            
           <!-- <li class="treeview">
              <a href="#">
                <i class="fa fa-files-o"></i>
                <span>Change Password</span>
                <span class="label label-primary pull-right">4</span>
              </a>
              
            </li>-->
            <!--<li>
              <a href="">
                <i class="fa fa-th"></i> <span>Update Profile</span> <small class="label pull-right bg-green"></small>
              </a>
            </li>-->
            <li class="treeview">
              <a href="<?php echo base_url();?>user/request">
                <i class="fa fa-pie-chart"></i>
                <span>Make A Request</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
           
            </li>
            
            <?php if ( $_SESSION['level']!==0){?>
            
            <li class="treeview">
              <a href="#"><i class="fa fa-laptop"></i> <span>Customer Orders</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
              
                <li><a href="<?php echo base_url();?>user/orders_all">View all orders</a></li>
                <li><a href="<?php echo base_url();?>user/orders_confirm">Not Confirmed orders</a></li>
              </ul>
            </li>
           <li><a href="<?php echo base_url();?>user/users_all"><i class="fa fa-user"></i> <span>View Users</span></a></li>
           <li><a href="<?php echo base_url();?>user/support_messages"><i class="fa fa-inbox"></i>Support Messages</a></li>
            <?php } ?>
            <!--<li class="treeview">
              <a href="AdminLTE-2.3.0/pages/examples/invoice.html">
                <i class="fa fa-edit"></i> <span>Print Invoice</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              
            </li>-->
            <li class="treeview">
              <a href="<?php echo base_url();?>user/help">
                <i class="fa fa-question-circle"></i> <span>Complains/feedback</span><small class="label pull-right bg-yellow"></small>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              
            </li>
           <!-- <li>
              <a href="#">
                <i class="fa fa-calendar"></i> <span>Request Status</span>
        <small class="label pull-right bg-yellow">Pending</small>
              </a>
            </li>-->
           
            <li class="treeview">
              <a href="<?php echo base_url(); ?>user/logout">
                <!--<i class="fa fa-sign-out"></i>--><i class="fa fa-power-off"></i></i><span>LOG OUT</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              
            </li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>