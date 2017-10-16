<?php
//var_dump($doctorEducationData[0]);
//exit();

$EducationId = $doctorEducationData[0]['EducationId'];
$EducationName = $doctorEducationData[0]['EducationName'];
$EducationShortName = $doctorEducationData[0]['EducationShortName'];
$EducationWeight = $doctorEducationData[0]['EducationWeight'];

?>
<div class="panel panel-default">
    <div class="panel-heading">
        Education - <?php echo $EducationName; ?>
    </div>
    <!-- /.panel-heading -->
    <div class="panel-body">
        <form id="editUser" class="form-group" method="post" enctype="multipart/form-data" action="<?php base_url() ?>updateDoctorEducation">

            <div class="form-group center">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">

                        <input type="hidden" class="form-control" id="EducationId" name="EducationId" value="<?php echo $EducationId; ?>" placeholder="EducationId" required="True">
                    </div>

                </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <label>Education Name</label>
                        <input type="text" class="form-control" id="EducationName" name="EducationName" value="<?php echo $EducationName; ?>" placeholder="Name" required="True">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <label>Education Short Name</label>
                        <input type="text" class="form-control" id="EducationShortName" name="EducationShortName" placeholder="Education Short Name" value="<?php echo $EducationShortName; ?>">
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
                        <label>Education Weight</label>
                        <input type="number" min="1" max="5" class="form-control" id="EducationWeight" name="EducationWeight" placeholder="Education Weight" required="True" value="<?php echo $EducationWeight; ?>">
                    </div>
                </div>
            </div>
            
            <button type="submit" id="editDoctorEducation" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>

<script src="/PrescriptionManagementSoftware/assets/modulesupportjs/doctorManager.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        var baseUrl = "<?php echo base_url(); ?>";
        var prevDoctorId =  "<?php echo $DoctorRegistrationNo; ?>";
        var prevDoctorContactNo = <?php echo $DoctorContactNo; ?>;
        checkDoctorEditId(baseUrl,prevDoctorId);
        checkContactNoEditId(baseUrl,prevDoctorContactNo);
    });
</script>


