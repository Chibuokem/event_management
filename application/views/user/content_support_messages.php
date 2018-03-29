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
        <?php 
										 //check if inbox is empty
										 if( !empty($messages)){ ?>    
                                             <div class="table-responsive content">
											<table class="table no-border hover">
										<thead class="no-border">
											<tr>
												<th>Sender</th>
                                                <th>Sender No:</th>
                                                <th>Email:</th>
                                                <th>Subject</th>
												<th>Message</th>
                                                <th>Time</th>
                                                
                                                
											</tr>
										</thead>
                                        <tbody class="no-border-y">
                                        
                                        
                                        
                                        <?php 
										
                                         $no_inbox=count($messages['id']);
										 ?>
			                   <?php 
                                for ($i = 0; $i < $no_inbox; $i++) {
                                    
                                    ?>
                                         <tr>
                                         
                                         <td><?php echo $messages['name'][$i];?></td>
                                         <td><?php echo $messages['phone'][$i];?></td>
                                         <td><?php echo $messages['email'][$i];?></td>
                                         <td><?php echo $messages['subject'][$i];?></td>
										<td><?php echo $messages['message'][$i];?></td>
                                        <td><?php echo $messages['date'][$i];?></td>
                                        
                                        </tr>
                                       <?php } ?>
                                       
                                       </tbody>
									</table>
                                    
                                    </div>
                                       
                                       
                                       <?php
									   //if inbox not empty ends here 
									    } 
										else{
										?>
                                        <div class="alert alert-info">Support inbox is empty</div>
                                        
                                        <?php 
										//else brace ends here 
										} ?>
             
            <!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
