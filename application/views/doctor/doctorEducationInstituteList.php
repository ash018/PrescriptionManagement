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

                        <h1 class="page-header"> Doctor Education Institute List </h1>
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
                                            <th>ID</th>
                                            <th>Education Institute Name</th>
                                            <th>Education Institute Contact No</th>
                                            <th>Education Institute Email</th>
                                            <th>Entry By</th>
                                            <th  style="text-align:center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $x = 1;
                                        foreach ($listView as $row) {
                                            ?>
                                            <tr>
                                                <td><?php echo $x; ?></td>
                                                <td><?php echo $row['EducationInstituteName']; ?></td>
                                                <td><?php echo $row['EducationInstituteContactNo']; ?></td>
                                                <td><?php echo $row['EducationInstituteEmail']; ?></td>
                                                <td><?php echo $row['EntryDate']; ?></td>
                                                <td>
                                                    <button id="<?php echo $row['EducationInstituteId']; ?>" class="btn btn-info btn-adn  editDoctorGetData" style="margin-left: 30%" data-toggle="modal"
                                                            data-target="#myModal" data-node="<?php echo $row['EducationInstituteId']; ?>">Edit
                                                    </button>
                                                </td>
                                            </tr>
                                        <?php $x++;}
                                        ?>
                                    </tbody>
                                </table>

                                <div class="modal fade" id="myModal" role="dialog">
                                    <div class="modal-dialog">

                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                <h4 class="modal-title" style="text-align: center">Edit Doctor Education Grade Information</h4>
                                            </div>
                                            <div id="editDoctorEducationInstituteListModuleData" class="modal-body">

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
                editDoctorEducationInstituteList(baseUrl);
                //deleteDoctor(baseUrl);
            });
        </script>

    </body>

</html>
