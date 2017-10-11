<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Doctor List</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Bootstrap Core CSS -->
    <link href="/PrescriptionManagementSoftware/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
   <!-- <link href="/PrescriptionManagementSoftware/assets/vendor/metisMenu/metisMenu.min.css" rel="stylesheet"> -->

    <!-- DataTables CSS -->
    <link href="/PrescriptionManagementSoftware/assets/vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="/PrescriptionManagementSoftware/assets/vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/PrescriptionManagementSoftware/assets/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="/PrescriptionManagementSoftware/assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    
   <!-- <link href=<?php// echo base_url('dist/css/test.css')?> rel="stylesheet"> -->
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
                        <?php if($listView['editCheck']==1){ ?>
                            <div class="alert alert-success alert-dismissable">
                                            <button class="close" type="button" data-dismiss="alert" aria-hidden="true">×</button>

                                            <?php echo 'Successfully Updated Doctor Information';  ?>
                             </div>
                        <?php }?>
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
                                    //var_dump($listView['editCheck']);
                                    $size=($listView['size']);
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
                                            <button id="<?php echo $row[$x]['DoctorId'];?>" class="btn btn-info btn-adn  editDoctorGetData" style="margin-left: 30%" data-toggle="modal"
                                                data-target="#myModal" data-node="<?php echo $row[$x]['DoctorId'];?>">Edit
                                            </button>
                                            
                                            
                                            
                                            
                                         
                                        </td>
                                        <td>
                                            <form class="form-horizontal" method="post" enctype=""
                                            action="">

                                                <input type="hidden" name="actionType" value="">
                                                <input type="hidden" name="dashboardId" value="">
                                                <button class="btn btn-danger" style="margin-left: 30%">Delete</button>
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
                            
                            <div class="modal fade" id="myModal" role="dialog">
                                        <div class="modal-dialog">

                                            <!-- Modal content-->
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title" style="text-align: center">Edit Doctor Information</h4>
                                                </div>
                                                <div id="editDoctorModuleData" class="modal-body">

                                                </div>

                                            </div>

                                        </div>
                                    </div>
                            
                            
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
    <script src="/PrescriptionManagementSoftware/assets/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/PrescriptionManagementSoftware/assets/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <!--<script src="/PrescriptionManagementSoftware/assets/vendor/metisMenu/metisMenu.min.js"></script> -->

    <!-- DataTables JavaScript -->
    <script src="/PrescriptionManagementSoftware/assets/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="/PrescriptionManagementSoftware/assets/vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="/PrescriptionManagementSoftware/assets/vendor/datatables-responsive/dataTables.responsive.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="/PrescriptionManagementSoftware/assets/dist/js/sb-admin-2.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
       // $('#dataTables-example').DataTable({
         //   responsive: true
        //});
    });
    </script>
    
    <script>
        
//        $(".btn-info").click(function() {
//            //var id = parseInt(this.id,10)+mod;
//            var id = this.id;
//            //var tem = "<?php// echo $listView[0]['DoctorName'];?>";
//           
//            alert(id);
//            console.log("ID:"+id);
//            //document.getElementById("ModalDoctorName").value="<?php //echo $listView[$abc]['DoctorName']?>";
        
        });
     </script>
     <script src="/PrescriptionManagementSoftware/assets/modulesupportjs/doctorManager.js"></script>
     <script type="text/javascript">
            $(document).ready(function () {
                var baseUrl = "<?php echo base_url(); ?>";
                editDoctor(baseUrl);
            });
      </script>

</body>

</html>
