<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>TAKEOFF CONSULTANCY</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url(); ?>assets/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
	<!-- DataTables CSS -->
    <link href="<?php echo base_url(); ?>assets/vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="<?php echo base_url(); ?>assets/vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url(); ?>assets/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url(); ?>assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery-ui.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo base_url(); ?>index.php/New_user">TAKEOFF CONSULTANCY</a>
				
            </div>
            <!-- /.navbar-header -->
			<ul class="nav navbar-top-links navbar-right">
			<li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
					
                        
                        <li class="divider"></li>
                        <li><a href="<?php echo base_url(); ?>index.php/Login_new/logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
				</ul>

            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        
                        <li>
                            <a href="<?php echo base_url(); ?>index.php/Enquiry"><i class="fa fa-list-alt fa-fw"></i>Enquiry</a>
                        </li>
                       
                        <li>
                            <a href="<?php echo base_url(); ?>index.php/Register"><i class="fa fa-table fa-fw"></i>Registeration</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i> Students<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo base_url(); ?>index.php/Enquired">Enquired</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url(); ?>index.php/Logged">Registered</a>
                                </li>
								</li>
								</ul>
								
                        <li>
                            <a href="<?php echo base_url(); ?>index.php/Logged"><i class="fa fa-bar-chart-o fa-fw"></i> Reports<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo base_url(); ?>index.php/Admissioned">Admissioned</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url(); ?>index.php/Applied">Applied</a>
                                </li>
                        </li>
                      
                        
                            
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">NEW USER</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
             <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            Registeration
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" method="POST" action="<?php echo base_url(); ?>index.php/New_user/insert">
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input class="form-control" name="fname" placeholder="Enter Name">
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input class="form-control" type="password" name="password" placeholder="Enter Password">
                                        </div>
										
										<div class="form-group">
                                            <label>Email id</label>
                                            <input class="form-control" name="email" placeholder="Enter email id">
                                            
                                        </div>
										
										<div class="form-group">
                                            <label>Phone number</label>
                                            <input class="form-control" type="number" name="phone" placeholder="Enter user mobile number">
                                            
                                        </div>
										
										
										
											
                                       <button type="submit" class="btn btn-outline btn-success">Submit</button>
                                        <button type="reset" class="btn btn-outline btn-danger">Reset</button>
                                    </form>
									<?php 
										if($this->session->userdata('msg'))
											
		{	$check=$this->session->userdata['msg'];
		$this->session->unset_userdata('msg');
		
			if($check=='error')
			{
					?>
					<div class="panel-body">
                            <div class="alert alert-danger alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                Phone number already exists
                            </div>
							</div>
					<?php
			}
			else
			{
					
			
			?>
	<div class="panel-body">
                            <div class="alert alert-success alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                Success. .
                            </div>
							</div>
	<?php
	
	}
		}

?>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
   <script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/jquery-ui.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url(); ?>assets/vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url(); ?>assets/dist/js/sb-admin-2.js"></script>

 <!-- DataTables JavaScript -->
    <script src="<?php echo base_url(); ?>assets/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/datatables-responsive/dataTables.responsive.js"></script>
	
    
	 <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
       
	   });
	$( function() {
    $( "#datepicker" ).datepicker( {dateFormat: 'yy-mm-dd',changeYear: true,changeMonth:true,yearRange: "-100:+00"});
	$( ".selector" ).datepicker({  });
  } );
	   });
    </script>

  