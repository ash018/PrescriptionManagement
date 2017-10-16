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
                            
                            
                             
                        
                        
                        
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header"> Doctor Education List </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Basic Doctor Education Information 
                            </div>


                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Education Name</th>
                                            <th>Education Short Name</th>
                                            <th>Education Weight</th>
                                            <th>Entry By</th>
                                            <th>Action</th>
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
                                        $x = 0;
                                        //var_dump(sizeof($listView));
                                        //exit();
                                        foreach ($listView as $row) {
                                            if ($i > 0) {
                                                $x += 1;
                                                ?>
                                            <tbody>
                                                <tr>
                                                    <td><?php echo $x; ?></td>
                                                    <td><?php echo $row['EducationName']; ?></td>
                                                    <td><?php echo $row['EducationShortName']; ?></td>
                                                    <td><?php echo $row['EducationWeight']; ?></td>
                                                    <td><?php echo $row['EntryBy']; ?></td>
                                                    <td>
                                                        <button id="<?php echo $row['EducationId']; ?>" class="btn btn-info btn-adn  editDoctorGetData" style="margin-left: 0%" data-toggle="modal"
                                                                data-target="#myModal" data-node="<?php echo $row['EducationId']; ?>">Edit
                                                        </button>
                                                    </td>
        <!--                                                    <td>
                                                       
                                                            <button id="<?php //echo $row['DoctorId'];  ?>"  class="btn btn-danger deleteDoctorGetData" data-toggle="modal" data-target="#myModalDelete" data-node="<?php //echo $row['DoctorId'];  ?>" style="margin-left: 30%">Delete</button>
                                                        </form>
                                                    </td>-->
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
                                            <div id="editDoctorEducationModuleData" class="modal-body">

                                            </div>

                                        </div>

                                    </div>
                                </div>

                                <div class="modal fade" id="myModalDelete" role="dialog">
                                    <div class="modal-dialog">

                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                <h4 class="modal-title" style="text-align: center">Delete Doctor Information</h4>
                                            </div>
                                            <div id="deleteDoctorModuleData" class="modal-body">

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
                editDoctorEducation(baseUrl);
                //deleteDoctor(baseUrl);
            });
        </script>

    </body>

</html>
