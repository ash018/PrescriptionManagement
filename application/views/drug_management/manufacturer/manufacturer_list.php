<html lang="en">

    <?php
    echo $Header;
    ?>

    <body>
        <div id="wrapper">
            <?php echo $leftMenu; ?>
            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <br/>
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
                            <h1 class="page-header">All Manufacturer</h1>
                        </div>
                    </div>
                    <?php ?>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Manufacturer
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">

                                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>SL</th>
                                                <th>Manufacturer Name</th>
                                                <th>Web Link</th>
                                                <th>Mobile Number</th>
                                                <th>Email</th>
                                                <th>Status</th>
                                                <th>Creation Date</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $c = 1; 
                                            foreach ($allManufacturer as $manF) {
                                                ?>
                                                <tr class="odd gradeX">
                                                    <td class="center"><?php echo $c; ?></td>
                                                    <td class="center"><?php echo $manF['ManufacturerName']; ?></td>
                                                    <td class="center"><?php echo $manF['ManufacturerWebsite']; ?></td>
                                                    <td class="center"><?php echo $manF['ManufacturerPhone']; ?></td>
                                                    <td class="center"><?php echo $manF['ManufacturerEmail']; ?></td>
                                                    <td class="center"><?php if($manF['ManufacturerIsActive'] == 1){echo 'Active';} else{echo 'Inactive';} ?></td>
                                                    <td class="center"><?php echo $manF['EntryDate']; ?></td>
                                                    <td class="center"><input type="button" class="btn btn-info editDTypeData" data-toggle="modal" data-target="#myModal" data-node="<?php echo $manF['ManufacturerId']; ?>" value="Edit"/></td>
                                                </tr>
                                                <?php
                                                $c++;
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
                                                    <h4 class="modal-title" style="text-align: center">Edit Manufacturer</h4>
                                                </div>
                                                <div id="editDtypeModuleData" class="modal-body">

                                                </div>

                                            </div>

                                        </div>
                                    </div>

                                </div>

                            </div>
                            <!-- /.panel -->
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>

                </div>

            </div>

        </div>
<?php echo $footer; ?>
        <script src="/PrescriptionManagementSoftware/assets/modulesupportjs/DrugManagement/manufacturer.js"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                var baseUrl = "<?php echo base_url(); ?>";
                editDrugCategory(baseUrl);

            });
        </script>
    </body>

</html>