<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Doctor List</title>

    <!-- Bootstrap Core CSS -->
    <link href=<?php echo site_url('vendor/bootstrap/css/bootstrap.min.css') ?> rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href=<?php echo site_url('vendor/metisMenu/metisMenu.min.css')?> rel="stylesheet">

    <!-- DataTables CSS -->
    <link href=<?php echo site_url('vendor/datatables-plugins/dataTables.bootstrap.css') ?> rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href=<?php echo site_url('vendor/datatables-responsive/dataTables.responsive.css') ?> rel="stylesheet">

    <!-- Custom CSS -->
    <link href=<?php echo site_url('dist/css/sb-admin-2.css') ?> rel="stylesheet">

    <!-- Custom Fonts -->
    <link href=<?php echo site_url('vendor/font-awesome/css/font-awesome.min.css') ?> rel="stylesheet" type="text/css">
    
    <link href=<?php echo base_url('dist/css/test.css')?> rel="stylesheet">
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
                    <h1 class="page-header">Doctor List</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Basic Doctor Information 
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Doctor Name</th>
                                        <th>Registration Number</th>
                                        <th>Doctor Address</th>
                                        <th>Contact No</th>
                                        <th>Email Address</th>
                                        <th colspan="2" style="text-align:center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 

                                    //echo $size;
                                    $x = 0;
                                    while($x<$size){        
                                    
                                    $i = 0;    
                                    foreach($this->data as $row){
                                      if($i%2==0){  
                                    ?>
                                    <tbody>
                                    <tr>
                                        <td><?php echo $row[$x]['DoctorName'];?></td>
                                        <td><?php echo $row[$x]['DoctorRegistrationNo'];?></td>
                                        <td><?php echo $row[$x]['DoctorAddress'];?></td>
                                        <td><?php echo $row[$x]['DoctorContactNo'];?></td>
                                        <td><?php echo $row[$x]['DoctorEmailAddress'];?></td>
                                        <td>
                                            <button id="editButton" class="btn btn-info btn-adn" data-toggle="modal"
                                                data-target="#myModal">Edit
                                            </button>
                                            
                                            <div class="modal fade" id="myModal" role="dialog">
                                                <div class="modal-dialog">

                                            <!-- Modal content-->
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                            <h4 class="modal-title" style="text-align: center">Edit Doctor Information</h4>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form id="editForm" class="form-group" method="post" enctype="multipart/form-data"
                                                                  action="/managedashboard">

                                                                <div class="form-group">
                                                                    <label class="control-label" for="title">Doctor Name</label>
                                                                    <input value="<?php echo $row[$x]['DoctorName'];?>" type="text" name="title" class="form-control" data-error="Please enter title."
                                                                           required/>
                                                                    <div class="help-block with-errors"></div>
                                                                </div>

                                                                <div class="form-group">
                                                                    <label class="control-label" for="title">Registration No</label>
                                                                    <input value="<?php echo $row[$x]['DoctorRegistrationNo'];?>" type="text" name="description" class="form-control"
                                                                           data-error="Please enter description." required/>
                                                                    <div class="help-block with-errors"></div>
                                                                </div>

                                                                <div class="form-group">
                                                                    <label class="control-label" for="title">Doctor Address</label>
                                                                    <input value="<?php echo $row[$x]['DoctorAddress'];?>" type="text" name="url" class="form-control" data-error="Please enter Url."
                                                                           required/>
                                                                    <div class="help-block with-errors"></div>
                                                                </div>

                                                                <div class="form-group">
                                                                    <label class="control-label" for="title">Doctor Contact No</label>
                                                                    <input value="<?php echo $row[$x]['DoctorContactNo'];?>" type="text" name="groupId" class="form-control" data-error="Please enter GroupID"
                                                                           required/>
                                                                    <div class="help-block with-errors"></div>
                                                                </div>

                                                                <div class="form-group">
                                                                    <label class="control-label" for="title">ReportID:</label>
                                                                    <input type="text" name="reportId" class="form-control" data-error="Please enter ReportID"
                                                                           required/>
                                                                    <div class="help-block with-errors"></div>
                                                                </div>

                                                                <input type="hidden" name="actionType" value="AddDashboard">

                                                                <div class="modal-footer">
                                                                    <button type="submit" class="btn btn-primary">Add</button>
                                                                    <button type="button" class="btn btn-white" data-dismiss="modal">Cancel</button>
                                                                </div>

                                                            </form>
                                                        </div>

                                                    </div>

            </div>
        </div>
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                        </td>
                                        <td>
                                            <form class="form-horizontal" method="post" enctype=""
                                            action="">

                                                <input type="hidden" name="actionType" value="">
                                                <input type="hidden" name="dashboardId" value="">
                                                <button class="btn btn-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                    <?php  
                                           
                                            $i+=1;
                                    
                                            }
                                    }
                                           
                                            $x+=1;
                                        }
                                    
                                    ?>
                                </tbody>
                            </table>
                            <!-- /.table-responsive -->
                            <div class="well">
                               
                            </div>
                        </div>
                        
                        
                        
                        <!-- Modal -->
                        
                         
                        
                        
                        
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            
            <!-- /.row -->
            
            <!-- /.row -->
            
            <!-- /.row -->
         </div>
            
        </div>
    
        <!-- /#page-wrapper -->
           
      
        
    
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src=<?php echo site_url('vendor/jquery/jquery.min.js')?>></script>

    <!-- Bootstrap Core JavaScript -->
    <script src=<?php echo site_url('vendor/bootstrap/js/bootstrap.min.js')?>></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src=<?php echo site_url('vendor/metisMenu/metisMenu.min.js')?>></script>

    <!-- DataTables JavaScript -->
    <script src=<?php echo site_url('vendor/datatables/js/jquery.dataTables.min.js')?>></script>
    <script src=<?php echo site_url('vendor/datatables-plugins/dataTables.bootstrap.min.js')?>></script>
    <script src=<?php echo site_url('vendor/datatables-responsive/dataTables.responsive.js')?>></script>

    <!-- Custom Theme JavaScript -->
    <script src=<?php echo site_url('dist/js/sb-admin-2.js')?>></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>

</body>

</html>
