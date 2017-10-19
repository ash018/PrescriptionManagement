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

                        <h1 class="page-header"> Doctor Education </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Doctor - <?php echo $listView[0]['DoctorName']; ?> 
                            </div>


                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <form class="form-group" method="post" enctype="multipart/form-data" action="<?php echo base_url(); ?>DocList/enterDoctorEducation">
                                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>Education</th>
                                                <th>Education Grade</th>
                                                <th>Education Institute</th>
                                                <th>Passing Year</th>
                                                <th>Doctor Grade</th>
                                                <th>Campus</th>
                                                <th style="text-align:center">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            //echo $size;
                                            $x = 0;
                                            //var_dump($listView['editCheck']);
                                            // $size = ($listView['size']);
                                            //while($x<$size){        

                                            $i = sizeof($listView);
                                            //var_dump(sizeof($listView));
                                            //exit();
                                            foreach ($listView as $row) {
                                                if ($i > 0) {
                                                    ?>
                                                <tbody>
                                                    <tr>
                                                        <td><select class="form-control" id="EducationId" name="EducationId">
                                                                <?php
                                                                $i = sizeof($educationData);
                                                                for ($x = 0; $x < $i; $x++) {
                                                                    ?>
                                                                    <option  value="<?php echo $educationData[$x]["EducationId"]; ?>"><?php echo $educationData[$x]["EducationName"] ?></option>
                                                                <?php } ?>
                                                            </select></td>
                                                        <td><select class="form-control" id="EducationGradeId" name="EducationGradeId">
                                                                <?php
                                                                $i = sizeof($educationGradeData) - 2;
                                                                for ($x = 0; $x < $i; $x++) {
                                                                    ?>
                                                                    <option  value="<?php echo $educationGradeData[$x]["EducationGradeId"]; ?>"><?php echo $educationGradeData[$x]["EducationShortName"] ?></option>
                                                                <?php } ?>
                                                            </select></td>
                                                        <td><select class="form-control" id="EducationInstituteId" name="EducationInstituteId">
                                                                <?php
                                                                $i = sizeof($educationInstituteData);
                                                                //for($x=0;$x<$i;$x++){
                                                                foreach ($educationInstituteData as $educationInstitute) {
                                                                    ?>
                                                                    <option value="<?php echo $educationInstitute['EducationInstituteId']; ?>"><?php echo $educationInstitute["EducationInstituteName"] ?></option>
                                                                <?php } ?>
                                                            </select></td>

                                                        <td><select class="form-control" id="PassingYear" name="PassingYear">
                                                                <?php
                                                                $i = date('Y');
                                                                for ($x = $i; $x >= 1960; $x--) {
                                                                    //foreach ($educationInstituteData as $educationInstitute) {
                                                                    ?>
                                                                    <option value="<?php echo $x; ?>"><?php echo $x ?></option>
                                                                <?php } ?>
                                                            </select></td>
                                                        <!--<td><input type="text" class="form-control" id="PassingYear" name="PassingYear"   placeholder="Passing Year" required="True"></td>-->
                                                        <td><input type="text" class="form-control" id="DoctorGrade"   placeholder="Doctor Grade" required="True"></td>
                                                        <td>
                                                            <input type="text" class="form-control" id="Campus"   placeholder="Campus" required="">
                                                        </td>


<!--                                                        <td>
                                                            <input type="button" class="btn btn-danger" value="Delete" />
                                                        </td>   -->


                                                <input id="DoctorId" name="DoctorId" type="hidden" value="<?php echo $listView[0]['DoctorId']; ?>" />


                                                </tr>
                                                <?php
                                            }

                                            $i -= 1;
                                        }
                                        ?>
                                        </tbody>
                                    </table>
                                    <div class="well">
                                        <p>
                                            <input id="addBtn" type="button" class="btn btn-primary" value="Insert New Education">
                                            <input  id="btnFormDoctorEducation" name="btnFormDoctorEducation" style="float: right;" type="submit" class="btn btn-success" value="Submit">

                                        </p>

                                    </div>
                                </form> 





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
                    editDoctor(baseUrl);
                    educationEntryDoctor(baseUrl);
                    detailsEducationDoctor(baseUrl)
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
