<?php
//var_dump($educationInstituteData);
//exit();

$doctorId = $doctorData[0]['DoctorId'];
$doctorName = $doctorData[0]['DoctorName'];
$DoctorRegistrationNo = $doctorData[0]['DoctorRegistrationNo'];
$DoctorAddress = $doctorData[0]['DoctorAddress'];
$DoctorContactNo = $doctorData[0]['DoctorContactNo'];
$DoctorEmailAddress = $doctorData[0]['DoctorEmailAddress'];
$EntryBy = $doctorData[0]['EntryBy'];
?>
<div class="panel panel-default">
    <div class="panel-heading">
        Doctor - <?php echo $doctorName; ?>
    </div>
    <!-- /.panel-heading -->
    <div class="panel-body">
        <form id="editUser" class="form-group" method="post" enctype="multipart/form-data" action="<?php base_url() ?>enterDoctorEducation">

            <div class="form-group center">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">

                        <input type="hidden" class="form-control" id="DoctorId" name="DoctorId" value="<?php echo $doctorId; ?>" placeholder="Doctor Id" required="True">
                    </div>

                </div>
            </div>

            <div class="form-group">
                <label>Education</label>
                <select class="form-control" id="EducationId" name="EducationId">
                    <?php
                    $i = sizeof($educationData);
                    for ($x = 0; $x < $i; $x++) {
                        ?>
                        <option  value="<?php echo $educationData[$x]["EducationId"]; ?>"><?php echo $educationData[$x]["EducationName"] ?></option>
                    <?php } ?>
                </select>
            </div>

            <div class="form-group">
                <label>Education Grade</label>
                <select class="form-control" id="EducationGradeId" name="EducationGradeId">
                    <?php
                    $i = sizeof($educationGradeData) - 2;
                    for ($x = 0; $x < $i; $x++) {
                        ?>
                        <option  value="<?php echo $educationGradeData[$x]["EducationGradeId"]; ?>"><?php echo $educationGradeData[$x]["EducationShortName"] ?></option>
                    <?php } ?>
                </select>
            </div>

            <div class="form-group">
                <label>Education Institute</label>
                <select class="form-control" id="EducationInstituteId" name="EducationInstituteId">
                    <?php
                    $i = sizeof($educationInstituteData);
                    //for($x=0;$x<$i;$x++){
                    foreach ($educationInstituteData as $educationInstitute) {
                        ?>
                        <option value="<?php echo $educationInstitute['EducationInstituteId']; ?>"><?php echo $educationInstitute["EducationInstituteName"] ?></option>
                    <?php } ?>
                </select>
            </div>

            <div class="form-group">
                <label>Passing Year</label>
                <div class="row">
                    <div class="col-sm-12">

                        <input type="text" class="form-control" id="PassingYear" name="PassingYear"  placeholder="Passing Year" required="True">
                    </div>

                </div>
            </div>


            <div class="form-group">
                <label>Doctor Grade</label>
                <div class="row">
                    <div class="col-sm-12">

                        <input type="text" class="form-control" id="DoctorGrade" name="DoctorGrade"  placeholder="Doctor Grade" required="True">
                    </div>

                </div>
            </div>

            <div class="form-group">
                <label>Campus</label>
                <div class="row">
                    <div class="col-sm-12">

                        <input type="text" class="form-control" id="Campus" name="Campus"  placeholder="Campus" required="">
                    </div>

                </div>
            </div>
            <table id="myTable">
                <tr>
                    <td><div class="form-group">
                <label>Passing Year</label>
                <div class="row">
                    <div class="col-sm-12">

                        <input type="text" class="form-control" id="PassingYear" name="PassingYear"  placeholder="Passing Year" required="True">
                    </div>

                </div>
            </div></td>
                    <td>Row1 cell2</td>
                </tr>
                <tr>
                    <td>Row2 cell1</td>
                    <td>Row2 cell2</td>
                </tr>
                <tr>
                    <td>Row3 cell1</td>
                    <td>Row3 cell2</td>
                </tr>
            </table>
            <br>
            <button type="submit" id="editUser" class="btn btn-danger">Enter</button>
            <button onClick="myFunction()"  id="addEdu" class="btn btn-primary">Add Row</button>
        </form>
    </div>
</div>

<script>
function myFunction() {
    var table = document.getElementById("myTable");
    var row = table.insertRow(-1);
    var cell1 = row.insertCell(-1);
    var cell2 = row.insertCell(-1);
    cell1.innerHTML = "";
    cell2.innerHTML = "NEW CELL2";
}
</script>
