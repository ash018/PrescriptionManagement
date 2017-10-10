<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>New Doctor Information</title>

    <!-- Bootstrap Core CSS -->
    <link href=<?php echo site_url('vendor/bootstrap/css/bootstrap.min.css')?> rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href=<?php echo site_url('vendor/metisMenu/metisMenu.min.css')?> rel="stylesheet">

    <!-- Custom CSS -->
    <link href=<?php echo site_url('dist/css/sb-admin-2.css')?> rel="stylesheet">
    <link href=<?php echo site_url('dist/css/test.css')?> rel="stylesheet">
    <!-- Custom Fonts -->
    <link href=<?php echo site_url('vendor/font-awesome/css/font-awesome.min.css') ?> rel="stylesheet" type="text/css">

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
            
            <!-- /.navbar-header -->

            
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="index.html"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
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
                    <h1 class="page-header">Doctor Information Creation</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Enter Information Here
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <form role="form" action="<?php echo base_url();?>DocList/doctorInfo" method="post">
                                    <div class="col-lg-6">
                                    
                                        <div class="form-group">
                                            <label>Doctor Name</label>
                                            <input class="form-control" placeholder="Doctor Name" name="DoctorName" required="">
                                        </div>
                                        <div class="form-group">
                                            <label>Doctor Address</label>
                                            <input class="form-control" placeholder="Doctor Address" name="DoctorAddress" required="">
                                        </div>
                                        <div class="form-group">
                                            <label>E-mail Address</label>
                                            <input class="form-control" placeholder="E-mail Address" name="DoctorEmailAddress">
                                        </div>
                                        
                                        
                                                
                                            
                                        
                                        
                                    
                                    </div>
                                <!-- /.col-lg-6 (nested) -->
                                <div class="col-lg-6">
                                    
                                    
                                        <div class="form-group">
                                            <label>Doctor Registration No</label>
                                            <input class="form-control" placeholder="Registration No" name="DoctorRegistrationNo">
                                        </div>
                                        <div class="form-group">
                                            <label>Contact No</label>
                                            <input class="form-control" placeholder="Contact No" name="DoctorContactNo">
                                        </div>
                                    
                                        <div class="form-group">
                                            <label></label>
                                            <!--<input class="form-control" placeholder="Contact No" name="DoctorContactNo"> -->
                                        </div>
                                    
                                        <div class="form-group">
                                            <label></label>
                                            <!--<input class="form-control" placeholder="Contact No" name="DoctorContactNo"> -->
                                        </div>
                                        
                                        <button style="float: right" type="reset" class="btn btn-bitbucket">Reset Button</button>
                                        <button style="float: right" type="submit" class="btn btn-success right">Submit Button</button>
                                        
                                    
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                                </form>
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src=<?php echo site_url('vendor/jquery/jquery.min.js')?></script>

    <!-- Bootstrap Core JavaScript -->
    <script src=<?php echo site_url('vendor/bootstrap/js/bootstrap.min.js') ?></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src=<?php echo site_url('vendor/metisMenu/metisMenu.min.js')?></script>

    <!-- Custom Theme JavaScript -->
    <script src=<?php echo site_url('dist/js/sb-admin-2.js')?></script>

</body>

</html>
