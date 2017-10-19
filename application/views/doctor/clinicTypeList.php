<!DOCTYPE html>
<html lang="en">

    <?php
        echo $Header;
    ?>
    <body>

        <div id="wrapper">

            <?php echo $leftMenu; ?>

            <!-- Navigation -->


            <div id="page-wrapper">

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
                        <h1 class="page-header"> Clinic Type List </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Clinic Type
                            </div>


                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>SL</th>
                                            <th>Clinic Type</th>
                                            <th>Entry Date</th>
                                            <th  style="text-align:center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $x = 1;
                                        foreach ($listView as $row) {
                                            ?>
                                            <tr>
                                                <td><?php echo $x; ?></td>
                                                <td><?php echo $row['ClinicType']; ?></td>
                                                <td><?php echo $row['EntryDate']; ?></td>
                                                <td>
                                                    <button id="<?php echo $row['ClinicTypeId']; ?>" class="btn btn-info btn-adn  editClinicTypeGetData" style="margin-left: 30%" data-toggle="modal"
                                                            data-target="#myModal" data-node="<?php echo $row['ClinicTypeId']; ?>">Edit
                                                    </button>
                                                </td>

                                            </tr>
                                            <?php $x++;
                                        }
                                        ?>
                                    </tbody>
                                </table>

                                <div class="modal fade" id="myModal" role="dialog">
                                    <div class="modal-dialog">

                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                <h4 class="modal-title" style="text-align: center">Edit Clinic Type</h4>
                                            </div>
                                            <div id="editClinicTypeModuleData" class="modal-body">

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
        <script src="/PrescriptionManagementSoftware/assets/modulesupportjs/clinicManager.js"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                var baseUrl = "<?php echo base_url(); ?>";
                editClinicType(baseUrl);
                //deleteDoctor(baseUrl);
            });
        </script>

    </body>

</html>
