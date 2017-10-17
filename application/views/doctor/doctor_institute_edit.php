<?php
//var_dump($doctorData[0]);
//exit();

$EducationInstituteId = $doctorData[0]['EducationInstituteId'];
$EducationInstituteName = $doctorData[0]['EducationInstituteName'];
$EducationInstituteAddress = $doctorData[0]['EducationInstituteAddress'];
$EducationInstituteContactNo = $doctorData[0]['EducationInstituteContactNo'];
$EducationInstituteEmail = $doctorData[0]['EducationInstituteEmail'];
?>
<div class="panel panel-default">
    <div class="panel-heading">
        Education Institute - <?php echo $EducationInstituteName; ?>
    </div>
    <!-- /.panel-heading -->
    <div class="panel-body">
        <form id="editUser" class="form-group" method="post" enctype="multipart/form-data" action="<?php base_url() ?>updateDoctorEducationInstitute">

            <div class="form-group center">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">

                        <input type="hidden" class="form-control" id="EducationInstituteId" name="EducationInstituteId" value="<?php echo $EducationInstituteId; ?>" placeholder="Education Grade Id" required="True">
                    </div>

                </div>
            </div>



            <div class="form-group">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <label>Education Institute Name</label>
                        <input type="text" class="form-control" id="EducationInstituteName" name="EducationInstituteName" value="<?php echo $EducationInstituteName; ?>" placeholder="Name" required="True">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div id="divDoctorEducationInstitute" class="alert alert-danger" style="display: none;">
                            This Education Institute Already Exist in the system
                        </div> 
                    </div>
                </div>
            </div>

            

            <div class="form-group">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <label>Education Institute Address</label>
                        <input type="text" class="form-control" id="EducationInstituteAddress" name="EducationInstituteAddress" placeholder="Registration No" value="<?php echo $EducationInstituteAddress; ?>">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <label>Education Institute Contact No</label>
                        <input type="text" class="form-control" id="EducationInstituteContactNo" name="EducationInstituteContactNo" placeholder="Education Short Name" required="True" value="<?php echo $EducationInstituteContactNo; ?>">
                    </div>
                </div>
            </div>


            <div class="form-group">
                <div id="divDoctorContactNo" class="alert alert-danger" style="display: none;">
                    This Contact No Already Exist in the system
                </div>  
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <label>Education Institute Email</label>
                        <input type="text" class="form-control" id="EducationInstituteEmail" name="EducationInstituteEmail" placeholder="Education Short Name" required="True" value="<?php echo $EducationInstituteEmail; ?>">
                    </div>
                </div>
            </div>


            <button type="submit" id="saveDoctorInstitute" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>

<script src="/PrescriptionManagementSoftware/assets/modulesupportjs/doctorManager.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        var baseUrl = "<?php echo base_url(); ?>";
        var prevDoctorInstitute =  "<?php echo $EducationInstituteName;   ?>";
        //var prevDoctorContactNo = "<?php //echo $DoctorContactNo;   ?>";
        checkDoctorEducationInstituteNameEdit(baseUrl,prevDoctorInstitute);
    });
</script>


