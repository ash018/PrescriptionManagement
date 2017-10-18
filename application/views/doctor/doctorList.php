<!DOCTYPE html>
<html lang="en">

    <?php
    // var_dump($leftMenu);
    echo $Header;
    ?>
    <body>

        <div id="wrapper">

            <?php echo $leftMenu; ?>

            <!-- Navigation -->


            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                       
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        
                        <br>
                            <?php
                            $notify = $this->session->userdata('notifyuser');

                            if (sizeof($notify) > 0 && $notify != '') {
                                if ($notify['type'] == 1) {
                                    ?>
                                    <div class="alert alert-success alert-dismissable">
                                        <button class="close" type="button" data-dismiss="alert" aria-hidden="true">×</button>
                                        <?php echo $notify['message']; ?>
                                    </div>
                                    <?php
                                }
                                if ($notify['type'] == 0) {
                                    ?>
                                    <div class="alert alert-danger alert-dismissable">
                                        <button class="close" type="button" data-dismiss="alert" aria-hidden="true">×</button>
                                    <?php echo $notify['message']; ?>
                                    </div>
                                <?php
                                }
                                $this->session->unset_userdata('notifyuser');
                            }
                            ?>
                        
                        <h1 class="page-header"> Doctor List </h1>
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
                                            <th colspan="3" style="text-align:center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        //echo $size;
                                        $x = 0;
                                        //var_dump($listView['editCheck']);
                                        $size = ($listView['size']);
                                        //while($x<$size){        

                                        $i = sizeof($listView) - 2;
                                        //var_dump(sizeof($listView));
                                        //exit();
                                        foreach ($listView as $row) {
                                            if ($i > 0) {
                                                ?>
                                            <tbody>
                                                <tr>
                                                    <td><?php echo $row['DoctorName']; ?></td>
                                                    <td><?php echo $row['DoctorRegistrationNo']; ?></td>
                                                    <td><?php echo $row['DoctorAddress']; ?></td>
                                                    <td><?php echo $row['DoctorContactNo']; ?></td>
                                                    <td><?php echo $row['DoctorEmailAddress']; ?></td>
                                                    <td>
                                                        <button id="<?php echo $row['DoctorId']; ?>" class="btn btn-info btn-adn  editDoctorGetData" style="margin-left: 30%" data-toggle="modal"
                                                                data-target="#myModal" data-node="<?php echo $row['DoctorId']; ?>">Edit
                                                        </button>
                                                    </td>
                                                    <td>

                                                        <button id="<?php echo $row['DoctorId']; ?>"  class="btn btn-primary educationDoctorGetData" data-toggle="modal" data-target="#myModalDelete" data-node="<?php echo $row['DoctorId']; ?>" style="margin-left: 20%">Education Entry</button>
                                                    </td>
                                                    
                                                    <td>
                                                        <a href="<?php echo base_url() ?>DocList/entryEduDocWithId/<?php echo $row['DoctorId'];?>" id="<?php echo $row['DoctorId']; ?>"  class="btn btn-primary educationDoctorGetData" data-toggle="modal"  data-node="<?php echo $row['DoctorId']; ?>" style="margin-left: 20%">Education Entry</a>
                                                    </td>

                                                    <td>
                                                        <button id="<?php echo $row['DoctorId']; ?>"  class="btn btn-warning detailsDoctorGetData" data-toggle="modal" data-target="#myModalDetails" data-node="<?php echo $row['DoctorId']; ?>" style="margin-left: 20%">Details</button>
                                                    </td>
                                                </tr>
                                                <?php
                                            }

                                            $i -= 1;
                                        }
                                        ?>
                                    </tbody>
                                </table>

                                <div class="modal fade" id="myModal" role="dialog">
                                    <div class="modal-dialog">

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

                                <div class="modal fade" id="myModalDelete" role="dialog">
                                    <div class="modal-dialog">

                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                <h4 class="modal-title" style="text-align: center">Enter Doctor Information</h4>
                                            </div>
                                            <div id="deleteDoctorModuleData" class="modal-body">

                                            </div>

                                        </div>

                                    </div>
                                </div>
                                
                                <div class="modal fade" id="myModalDetails" role="dialog">
                                    <div class="modal-dialog">

                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                <h4 class="modal-title" style="text-align: center">Doctor Details</h4>
                                            </div>
                                            <div id="detailsDoctorModuleData" class="modal-body">

                                            </div>

                                        </div>

                                    </div>
                                </div>

                                <div class="well">

                                </div>


                            </div>


                        </div>
                        <!-- /.panel -->
                    </div>
                    <!-- /.col-lg-12 -->
                </div>

            </div>

        </div>

        <!-- /#page-wrapper -->

        <?php echo $footer; ?>
        <script src="/PrescriptionManagementSoftware/assets/modulesupportjs/doctorManager.js"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                var baseUrl = "<?php echo base_url(); ?>";
                editDoctor(baseUrl);
                educationEntryDoctor(baseUrl);
                detailsEducationDoctor(baseUrl)
            });
        </script>

    </body>

</html>
