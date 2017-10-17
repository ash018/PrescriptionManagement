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
                            <h1 class="page-header">Drug List</h1>
                        </div>
                    </div>
                    <?php ?>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    All Drug
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">

                                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th class="center">SL</th>
                                                <th class="center">Drug Name</th>
                                                <th class="center">Drug Sub Category</th>
                                                <th class="center">Status</th>
                                                <th class="center">Creation Date</th>
                                                <th class="center">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $c = 1;
                                            foreach ($allDrug as $dsub) {
                                                ?>
                                                <tr class="odd gradeX">
                                                    <td class="center"><?php echo $c; ?></td>
                                                    <td class="center"><?php echo $dsub['DrugName']; ?></td>
                                                    <td class="center"><?php echo $dsub['DrugSubcategoryName']; ?></td>
                                                    <td class="center"><?php
                                                        if ($dsub['DrugIsActive'] == 1) {
                                                            echo 'Active';
                                                        } else {
                                                            echo 'Inactive';
                                                        }
                                                        ?></td>
                                                    <td class="center"><?php echo $dsub['EntryDate']; ?></td>
                                                    <td class="center">
                                                        <input type="button" class="btn btn-primary editDrug" data-toggle="modal" data-target="#myModal" data-node="<?php echo $dsub['DrugId']; ?>" value="Edit"/>
                                                        <input type="button" class="btn btn-info drugDetail" data-toggle="modal" data-target="#myModal" data-node="<?php echo $dsub['DrugId']; ?>" value="view"/>
                                                        <input type="button" class="btn  btn-warning addManufacturer" data-toggle="modal" data-target="#myModal" data-node="<?php echo $dsub['DrugId']; ?>" value="Add Manufacturer"/>
                                                    </td>
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
                                                    <h4 id="modalTitleControll" class="modal-title" style="text-align: center"></h4>
                                                </div>
                                                <div id="editDcategoryModuleData" class="modal-body">

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
        <script src="/PrescriptionManagementSoftware/assets/modulesupportjs/DrugManagement/drug.js"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                var baseUrl = "<?php echo base_url(); ?>";
                editDrug(baseUrl);
                drugDetails(baseUrl);
                addManufacturer(baseUrl);    

            });
        </script>
    </body>

</html>