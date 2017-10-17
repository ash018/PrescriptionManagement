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
                        
                        <h1 class="page-header"> Doctor Education Grade List </h1>
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
                                            <th>Education Max Grade</th>
                                            <th>Education Min Grade</th>
                                            <th>Education Short Name</th>
                                            <th>Entry By</th>
                                            <th  style="text-align:center">Action</th>
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
                                                $x+=1;
                                                ?>
                                            <tbody>
                                                <tr>
                                                    <td><?php echo $x; ?></td>
                                                    <td><?php echo $row['EducationMaxGrade']; ?></td>
                                                    <td><?php echo $row['EducationMinGrade']; ?></td>
                                                    <td><?php echo $row['EducationShortName']; ?></td>
                                                    <td><?php echo $row['EntryBy']; ?></td>
                                                    <td>
                                                        <button id="<?php echo $row['EducationGradeId']; ?>" class="btn btn-info btn-adn  editDoctorGetData" style="margin-left: 30%" data-toggle="modal"
                                                                data-target="#myModal" data-node="<?php echo $row['EducationGradeId']; ?>">Edit
                                                        </button>
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
                                                <h4 class="modal-title" style="text-align: center">Edit Doctor Education Grade List Information</h4>
                                            </div>
                                            <div id="editDoctorEducationGradeListModuleData" class="modal-body">

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
                editDoctorEducationGradeList(baseUrl);
                //deleteDoctor(baseUrl);
            });
        </script>

    </body>

</html>
