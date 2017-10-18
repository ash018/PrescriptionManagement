<html lang="en">
    <?php
        echo $Header;
    ?>
    <body>
        <div id="wrapper">
            <?php echo $leftMenu; ?>
            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row wrapper border-bottom white-bg page-heading">
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
                            <h1 class="page-header"><?php echo $drug[0]['DrugName'];?> Manufacturer List</h1>
                            
                            <ol class="breadcrumb">
                            <li>
                                <a href="<?php echo base_url().'Dashboard'?>">Home</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url().'DrugManagement/drugList'?>">Drug List</a>
                            </li>
                            <li class="active">
                                <strong>Drug Wise Manufacturer List</strong>
                            </li>
                        </ol>
                        </div>
                    </div>
                    <?php ?>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                   Drug - Manufacturer List
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">

                                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th class="center">SL</th>
                                                <th class="center">Manufacturer</th>
                                                <th class="center">Type</th>
                                                <th class="center">Drug</th>
                                                <th class="center">Manufacturer Drug</th>
                                                <th class="center">Strength</th>
                                                <th class="center">Unit</th>
                                                <th class="center">Country</th>
                                                <th class="center">Creation Date</th>
                                                <th class="center">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $c = 1;
                                            foreach ($dManuFacturerList as $dManu) {
                                                ?>
                                                <tr class="odd gradeX">
                                                    
                                                    <td class="center"><?php echo $c; ?></td>
                                                    <td class="center"><?php echo $dManu['ManufacturerName']; ?></td>
                                                    <td class="center"><?php echo $dManu['DrugTypeName']; ?></td>
                                                    
                                                    <td class="center"><?php echo $dManu['DrugName']; ?></td>
                                                    <td class="center"><?php echo $dManu['ManufacturerDrugName']; ?></td>
                                                    <td class="center"><?php echo $dManu['DrugStrengthUnit']; ?></td>
                                                    
                                                    <td class="center"><?php echo $dManu['DrugStrengthUnitCode']; ?></td>
                                                    <td class="center"><?php echo $dManu['DrugFormName']; ?></td>
                                                    
                                                    <td class="center"><?php echo $dManu['EntryDate']; ?></td>
                                                    <td class="center">
                                                        <input type="button" class="btn btn-outline btn-primary editDrug" data-toggle="modal" data-target="#myModal" data-node="<?php echo $dManu['ManufacturerDrugId']; ?>" value="Edit"/>
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
                                                    <h4 id="modalTitleControll" class="modal-title" style="text-align: center">Edit <?php echo $drug[0]['DrugName'];?>  Manufacture</h4>
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
                editDrugManufacturer(baseUrl);
            });
        </script>
    </body>

</html>