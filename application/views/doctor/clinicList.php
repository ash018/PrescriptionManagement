<!DOCTYPE html>
<html lang="en">

    <?php
       // var_dump($leftMenu);
        echo $Header;
    ?>
<body>

        <div id="wrapper">

            <?php echo $leftMenu;?>

            <!-- Navigation -->

             
            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                    <?php if ($listView['editCheck'] == 1) { ?>
                                <div class="alert alert-success alert-dismissable">
                                    <button class="close" type="button" data-dismiss="alert" aria-hidden="true">×</button>

                                    <?php echo 'Successfully Updated Clinic Information'; ?>
                                </div>
                            <?php } ?>

                            <?php if ($listView['editCheck'] == 0) { ?>
                                <div class="alert alert-success alert-dismissable">
                                    <button class="close" type="button" data-dismiss="alert" aria-hidden="true">×</button>

                                    <?php echo 'Successfully New Clinic Information Added'; ?>
                                </div>
                            <?php } ?>
                            
                             <?php if ($listView['editCheck'] == 3) { ?>
                                <div class="alert alert-success alert-dismissable">
                                    <button class="close" type="button" data-dismiss="alert" aria-hidden="true">×</button>

                                    <?php echo 'Successfully Deleted Doctor Information'; ?>
                                </div>
                            <?php } ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header"> Clinic List </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Basic Clinic Information 
                            </div>
                            

                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Clinic Name</th>
                                            <th>Clinic Address</th>
                                            <th>Clinic Contact Number</th>
                                            <th>Clinic Email Address</th>
                                            <th colspan="2" style="text-align:center">Action</th>
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
//                                        var_dump($listView);
//                                        exit();
                                        foreach ($listView as $row) {
                                            if ($i > 0) {
                                                ?>
                                            <tbody>
                                                <tr>
                                                    <td><?php echo $row['ClinicName']; ?></td>
                                                    <td><?php echo $row['ClinicAddress']; ?></td>
                                                    <td><?php echo $row['ClinicContactNumber']; ?></td>
                                                    <td><?php echo $row['ClinicEmailAddress']; ?></td>
                                                    <td>
                                                        <button id="<?php echo $row['ClinicId']; ?>" class="btn btn-info btn-adn  editClinicGetData" style="margin-left: 30%" data-toggle="modal"
                                                                data-target="#myModal" data-node="<?php echo $row['ClinicId']; ?>">Edit
                                                        </button>
                                                    </td>
                                                    <td>
                                                       
                                                            <button id="<?php echo $row['ClinicId']; ?>"  class="btn btn-danger deleteClinicGetData" data-toggle="modal" data-target="#myModalDelete" data-node="<?php echo $row['ClinicId']; ?>" style="margin-left: 30%">Delete</button>
                                                        </form>
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
                                                <h4 class="modal-title" style="text-align: center">Edit Clinic Information</h4>
                                            </div>
                                            <div id="editClinicModuleData" class="modal-body">

                                            </div>

                                        </div>

                                    </div>
                                </div>
                                
                                <div class="modal fade" id="myModalDelete" role="dialog">
                                    <div class="modal-dialog">

                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                <h4 class="modal-title" style="text-align: center">Delete Clinic Information</h4>
                                            </div>
                                            <div id="deleteClinicModuleData" class="modal-body">
                                                
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
                editClinic(baseUrl);
                deleteClinic(baseUrl);
            });
        </script>

    </body>

</html>
