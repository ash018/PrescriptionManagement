<?php
//var_dump($doctorData[0]);
//exit();

$EducationGradeId = $doctorData[0]['EducationGradeId'];
$EducationMaxGrade = $doctorData[0]['EducationMaxGrade'];
$EducationMinGrade = $doctorData[0]['EducationMinGrade'];
$EducationShortName= $doctorData[0]['EducationShortName'];

?>
<div class="panel panel-default">
    <div class="panel-heading">
        Education - <?php echo $EducationShortName; ?>
    </div>
    <!-- /.panel-heading -->
    <div class="panel-body">
        <form id="editUser" class="form-group" method="post" enctype="multipart/form-data" action="<?php base_url() ?>updateDoctorEducationGrade">

            <div class="form-group center">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">

                        <input type="hidden" class="form-control" id="EducationGradeId" name="EducationGradeId" value="<?php echo $EducationGradeId; ?>" placeholder="Education Grade Id" required="True">
                    </div>

                </div>
            </div>

            

            <div class="form-group">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <label>Education Max Grade</label>
                        <input type="text" class="form-control" id="EducationMaxGrade" name="EducationMaxGrade" value="<?php echo $EducationMaxGrade; ?>" placeholder="Name" required="True">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <label>Education Min Grade</label>
                        <input type="text" class="form-control" id="EducationMinGrade" name="EducationMinGrade" placeholder="Registration No" value="<?php echo $EducationMinGrade; ?>">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div id="divDoctorRegistration" class="alert alert-danger" style="display: none;">
                    This Registration ID Already Exist in the system
                </div>  
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <label>Education Short Name</label>
                        <input type="text" class="form-control" id="EducationShortName" name="EducationShortName" placeholder="Education Short Name" required="True" value="<?php echo $EducationShortName; ?>">
                    </div>
                </div>
            </div>
            
            
            <div class="form-group">
                <div id="divDoctorContactNo" class="alert alert-danger" style="display: none;">
                    This Contact No Already Exist in the system
                </div>  
            </div>

            
            <button type="submit" id="editDoctorGrade" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>

<script src="/PrescriptionManagementSoftware/assets/modulesupportjs/doctorManager.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        var baseUrl = "<?php echo base_url(); ?>";
        //var prevDoctorId =  "<?php //echo $DoctorRegistrationNo; ?>";
        //var prevDoctorContactNo = "<?php //echo $DoctorContactNo; ?>";
        checkDoctorEditId(baseUrl,prevDoctorId);
        checkContactNoEditId(baseUrl,prevDoctorContactNo);
    });
</script>


