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
		<!--<img src="<?php echo base_url();?>assets/logo.png" width="5px"> -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
		
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
				
                <a class="navbar-brand" href="<?php echo base_url(); ?>index.php/Admissioned" >TAKEOFF CONSULTANCY</a>
				
				 
				
            </div>
            <!-- /.navbar-header -->
			<ul class="nav navbar-top-links navbar-right">
			<li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
					<li class="divider"></li>
                        <li><a href="<?php echo base_url(); ?>index.php/New_user"><i class="fa fa-user fa-fw"></i> New User</a>
                        </li>
                        
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
                            <a href="<?php echo base_url(); ?>index.php/Logged"><i class="fa fa-sitemap fa-fw"></i> Students<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo base_url(); ?>index.php/Enquired">Enquired</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url(); ?>index.php/Logged">Registered</a>
                                </li></li></ul>
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

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
				 </div>
                    <div class="col-lg-12">
                        <h1 class="page-header">Placed</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
				
               
			<!-- /.row -->
            <div class="col-lg-12">
                    
                       
                        <!-- /.panel-heading -->
                        <div class="panel-body">
						<label>Student Name </label>
						<?php echo $record->st_fname.' '. $record->st_lname;?>
						<input type="hidden" value="<?php echo $record->st_id;?> " id="st_id">
						
											<div class="form-group">
											
                                            <label>Placed University</label>
                                            <select class="form-control"  id="pl_uni">
                                               <?php foreach($records as $c )
											   {
													?>
													<option value="<?php echo $c->u_id; ?>"><?php echo $c->u_name;?></option>
													<?php
											   }												   ?>
                                            </select>
											<br/>
											<button type="button" class="btn btn-default" onClick="send()">Done</button>
                                        </div>
                            <!-- /.table-responsive -->
                            
                                
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
			</div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>

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
		$('form input').on('keypress', function(e) {
    return e.which !== 13;
});
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
	function send()
	{
		
			
		$.ajax({
			method:'POST',
			url:'<?php echo base_url(); ?>index.php/Logged/send',
			data:{
				'id':document.getElementById('st_id').value,
				'u_id':document.getElementById('pl_uni').value,
			},
			success:function(data){
			if(data=='success')
			{
					alert('success');
			}
				else
				{
						alert("fail");
				}
			},
			error:function(data){
				alert("fail error");
			}
		});
	}
    </script>
	</body>

</html>
