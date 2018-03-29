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
        <a href="<?php echo base_url();?>/request" class="logo">
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
                  <img src="AdminLTE-2.3.0/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                  <span class="hidden-xs">Ibezim Chibuokem</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="<?php echo base_url();?>AdminLTE-2.3.0/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                    <p>
                      Ibezim Chibuokem - Web Developer
                      <small>Member since Nov. 2012</small>
                    </p>
                  </li>
                  <!-- Menu Body -->
                  <li class="user-body">
                    <div class="col-xs-4 text-center">
                      <a href="#">Event</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">MGT</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">System</a>
                    </div>
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    
                    <div class="pull-right">
                      <a href="#" class="btn btn-default btn-flat">Sign out</a>
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
              <img src="AdminLTE-2.3.0/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p>Ibeziem Chibuokem</p>
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
            </div>
          </form>
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            
            <li class="active treeview">
              <a href="#">
                <i class="fa fa-dashboard"></i> <span>View Profile</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-files-o"></i>
                <span>Change Password</span>
                <span class="label label-primary pull-right">4</span>
              </a>
              
            </li>
            <li>
              <a href="#">
                <i class="fa fa-th"></i> <span>Update Profile</span> <small class="label pull-right bg-green"></small>
              </a>
            </li>
            <li class="treeview">
              <a href="AdminLTE-2.3.0/pages/examples/invoice.html">
                <i class="fa fa-pie-chart"></i>
                <span>Make A Request</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
           
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-laptop"></i>
                <span>Customers Orders</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
             
            </li>
            <li class="treeview">
              <a href="AdminLTE-2.3.0/pages/examples/invoice.html">
                <i class="fa fa-edit"></i> <span>Print Invoice</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-table"></i> <span>Complains/feedback</span><small class="label pull-right bg-yellow">4</small>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              
            </li>
            <li>
              <a href="#">
                <i class="fa fa-calendar"></i> <span>Request Status</span>
        <small class="label pull-right bg-yellow">Pending</small>
              </a>
            </li>
           
            <li class="treeview">
              <a href="#">
                <i class="fa fa-folder"></i> <span>LOG OUT</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              
            </li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

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
              <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
              </div>
            </div><!-- /.box-header -->
            <div class="box-body">
              <div class="row">
                <div class="col-md-6">
                <div class="form-group">
                    <label>Name *</label>
                    <input type="text" class="form-control my-colorpicker1">
                  </div>
                  <div class="form-group">
                    <label>Phone Number *</label>
                    <input type="text" class="form-control my-colorpicker1">
                  </div>
                  <div class="form-group">
                    <label>Email Address *</label>
                    <input type="text" class="form-control my-colorpicker1">
                  </div>
                  <div class="form-group">
                    <label>Home Address *</label>
                    <input type="text" class="form-control my-colorpicker1">
                  </div>
                  <div class="form-group">
                    <label>Location *</label>
                    <select class="form-control select2" style="width: 100%;">
                      <option selected="selected">Alabama</option>
                      <option>Alaska</option>
                      <option>California</option>
                      <option>Delaware</option>
                      <option>Tennessee</option>
                      <option>Texas</option>
                      <option>Washington</option>
                    </select>
                  </div><!-- /.form-group -->
                  <div class="form-group">
                    <label>Venue Type *</label>
                    <select class="form-control select2" style="width: 100%;">
                      <option selected="selected">Choose</option>
                      <option>Large Hall</option>
                      <option>Small Hall</option>
                      <option>Outside</option>
                      <option>Garden</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Event Type *</label>
                    <select class="form-control select2" style="width: 100%;">
                      <option selected="selected">Choose</option>
                      <option>Birthday</option>
                      <option>Wedding</option>
                      <option>Burial</option>
                      <option>Conference</option>
                    </select>
                  </div><!-- /.form-group -->
                </div><!-- /.col -->
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Number of Guest *</label>
                    <select class="form-control select2" style="width: 100%;">
                      <option selected="selected">Choose</option>
                      <option>10 to 100</option>
                      <option>100 to 500</option>
                      <option>500 to 1000</option>
                      <option>1000 and above</option>
                    </select>
                  </div><!-- /.form-group -->
                  
<!-- /.form-group -->
<div class="box box-success">
                <div class="box-header">
                  <h3 class="box-title">Equipments</h3>
                </div>
                <div class="box-body">
                  <!-- Minimal style -->

                  <!-- checkbox -->
                  <div class="form-group">
                   
                    <label>
                      <input type="checkbox" class="minimal">
                
                      Dj
                    </label>
                  </div>
                    <div class="form-group">
                   
                    <label>
                      <input type="checkbox" class="minimal">
                   
                      Decoration
                    </label></div>
                   <div class="form-group"> <label>
                      <input type="checkbox" class="minimal">
                   
                      Cake
                    </label>
                  </div>
                  <div class="form-group"> <label>
                      <input type="checkbox" class="minimal">
                   
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

                  <!-- checkbox -->
                 <div class="form-group">
                    <label>Food(Rice,semo,fufu,wheat etc)</label>
                    <select class="form-control select2" style="width: 100%;">
                      <option selected="selected">Expected guest</option>
                     
                      <option>10 to 100</option>
                      <option>100 to 500</option>
                      <option>500 to 1000</option>
                      <option>1000 and above</option>
                    </select>
                  </div>
                     <div class="form-group">
                    <label>Drinks(Soft drinks,alcholic drinks, etc)</label>
                    <select class="form-control select2" style="width: 100%;">
                      <option selected="selected">Expected guest</option>
                     
                      <option>10 to 100</option>
                      <option>100 to 500</option>
                      <option>500 to 1000</option>
                      <option>1000 and above</option>
                    </select>
                  </div>
                  </div>
                  <div class="form-group">
                    <label>Promo code</label>
                    <input type="text" class="form-control my-colorpicker1">
                  </div>
                  </div>
                    <button type="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i> Submit Request</button>
                  
                  <button class="btn btn-default"><i class="fa fa-times"></i> Discard</button>
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

      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b></b>
        </div>
        <strong>Copyright &copy; 2017 NWIKU MORGAN CE/2011/375.</strong> All rights reserved.
      </footer>

      <!-- Control Sidebar -->
      <!-- /.control-sidebar -->
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>

    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->
    <script src="<?php echo base_url();?>AdminLTE-2.3.0/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="<?php echo base_url();?>AdminLTE-2.3.0/bootstrap/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url();?>AdminLTE-2.3.0/plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url();?>AdminLTE-2.3.0/dist/js/app.min.js"></script>
    <!-- Sparkline -->
    <script src="<?php echo base_url();?>AdminLTE-2.3.0/plugins/sparkline/jquery.sparkline.min.js"></script>
    <!-- jvectormap -->
    <script src="<?php echo base_url();?>AdminLTE-2.3.0/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="<?php echo base_url();?>AdminLTE-2.3.0/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- SlimScroll 1.3.0 -->
    <script src="<?php echo base_url();?>AdminLTE-2.3.0/plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- ChartJS 1.0.1 -->
    <script src="<?php echo base_url();?>AdminLTE-2.3.0/plugins/chartjs/Chart.min.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="<?php echo base_url();?>AdminLTE-2.3.0/dist/js/pages/dashboard2.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo base_url();?>AdminLTE-2.3.0/dist/js/demo.js"></script>
  </body>
</html>
