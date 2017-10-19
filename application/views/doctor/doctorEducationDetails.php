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

                        <h1 class="page-header"> Doctor Education Details </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Doctor - <?php if (sizeof($listView) > 0) echo $listView[0]['DoctorName']; ?> 
                            </div>


                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Education</th>
                                            <th>Education Grade</th>
                                            <th>Education Institute</th>
                                            <th>Passing Year</th>
                                            <th>Campus</th>
                                            <th style="text-align:center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        //echo $size;
                                        $x = 0;
//                                        var_dump($listView['editCheck']);
//                                         $size = ($listView['size']);
                                        //while($x<$size){        

                                        $i = sizeof($listView);
//                                            var_dump(($listView));
//                                            exit();
                                        foreach ($listView as $row) {
                                            //for($x=0;$x<=$i;$x++){ 
                                            if ($i > 0) {
                                                //$x+=1;
                                                ?>
                                            <tbody>
                                                <tr>
                                                    <td><?php echo $listView[$x]['EducationName']; ?>  </td>
                                                    <td><?php echo $listView[$x]['DoctorGrade']; ?></td>
                                                    <td><?php echo $listView[$x]['EducationInstituteName']; ?></td>
                                                    <td><?php echo $listView[$x]['PassingYear']; ?></td>
                                                    <td><?php echo $listView[$x]['Campus']; ?></td>
                                                    <td>
                                                        <button id="<?php //echo $row['DoctorId'];  ?>" class="btn btn-info btn-adn  editDoctorEducationDetails" style="margin-left: 30%" data-toggle="modal"
                                                                data-target="#myModal" data-node-doctor="<?php echo $row['DoctorId'];  ?>" data-node-education="<?php echo $row['EducationId'];  ?>">Edit
                                                        </button>

                                                    </td>
                                            <input type="hidden" id="DoctorId" name="DoctorId" type="hidden" value="<?php //echo $listView[0]['DoctorId'];   ?>" />

                                            </tr>
                                            <?php
                                            $x += 1;
                                        }

                                        $i -= 1;
                                    }
                                    ?>
                                    </tbody>
                                </table>
                                <div class="well">


                                </div>

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




                            </div>


                        </div>
                        <!-- /.panel 
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
                    editDoctorEducationDetails(baseUrl);
                });
                $('#dataTables-example').on('click', 'input[type="button"]', function () {
                    $(this).closest('tr').remove();
                })
                $('#addBtn').click(function () {
                    var educationId = $("#EducationId").select().val();
                    var educationGradeId = $("#EducationGradeId").select().val();
                    var educationInstituteId = $("#EducationInstituteId").select().val();
                    var passingYearId = $("#PassingYear").select().val();

                    var educationName = $("#EducationId option[value='" + educationId + "']").text();
                    var educationNameGrade = $("#EducationGradeId option[value='" + educationGradeId + "']").text();
                    var educationNameInstitute = $("#EducationInstituteId option[value='" + educationInstituteId + "']").text();
                    var passingYearName = $("#PassingYear option[value='" + passingYearId + "']").text();
                    var DoctorGradeName = $("#DoctorGrade").val();
                    var CampusName = $("#Campus").val();
                    console.log('educationId' + passingYearId + ' educationName ' + CampusName);
                    $('#dataTables-example').append('<tr><td><input class="form-control" readonly="readonly" name="education[]" value="' + educationName + '">\n\
                                                        <input type="hidden" class="form-control" readonly="readonly" name="educationId[]" value="' + educationId + '"></td>\n\
                                                         <td><input class="form-control" readonly="readonly" name="educationGrade[]" value="' + educationNameGrade + '">\n\
    \n\                                                  <input type="hidden" class="form-control" readonly="readonly" name="educationGradeId[]" value="' + educationGradeId + '"></td>\n\
                                                         <td><input class="form-control" readonly="readonly" name="educationInstitute[]" value="' + educationNameInstitute + '">\n\
    \n\                                                  <input type="hidden" class="form-control" readonly="readonly" name="educationInstituteId[]" value="' + educationInstituteId + '"></td>\n\
                                                         <td><input readonly="readonly" type="text" class="form-control" name="passingYear[]" value="' + passingYearName + '"  placeholder="Passing Year" required="True"></td>\n\
                                                         <td><input readonly="readonly" type="text" class="form-control" value="' + DoctorGradeName + '"  name="DoctorGrade[]"  placeholder="Doctor Grade" required="True"></td>\n\
                                                         <td><input type="text" readonly="readonly" class="form-control" name="Campus[]"  placeholder="Campus" value="' + CampusName + '" required=""></td>\n\
                                                         <td><input type="button" value="Delete" /></td></tr>')
                    //passingYearId = $("#PassingYear").select().val().empty();
                    var x = document.getElementById("EducationId");
                    x.remove(x.selectedIndex);

                });
            </script>



    </body>

</html>
