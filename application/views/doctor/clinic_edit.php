<?php
//var_dump($clinicData[0]);
//exit();

$clinicId = $clinicData[0]['ClinicId'];
$clinicName = $clinicData[0]['ClinicName'];
$ClinicRegistrationNo = $clinicData[0]['ClinicRegistrationNo'];
$ClinicAddress = $clinicData[0]['ClinicAddress'];
$ClinicContactNumber = $clinicData[0]['ClinicContactNumber'];
$ClinicEmailAddress = $clinicData[0]['ClinicEmailAddress'];
$EntryBy = $clinicData[0]['EntryBy'];
?>
<div class="panel panel-default">
    <div class="panel-heading">
        Clinic - <?php echo $clinicName; ?>
    </div>
    <!-- /.panel-heading -->
    <div class="panel-body">
        <form id="editClinic" class="form-group" method="post" enctype="multipart/form-data" action="<?php base_url() ?>updateClinic">

            <div class="form-group center">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">

                        <input type="hidden" class="form-control" id="DoctorId" name="ClinicId" value="<?php echo $clinicId; ?>" placeholder="Clinic Id" required="True">
                    </div>

                </div>
            </div>

            <div class="form-group center">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">

                        <input type="hidden" class="form-control" id="ClinicId" name="EntryBy" value="<?php echo $EntryBy; ?>" placeholder="Doctor Id" required="True">
                    </div>

                </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <label>Clinic Name</label>
                        <input type="text" class="form-control" id="ClinicName" name="ClinicName" value="<?php echo $clinicName; ?>" placeholder="Name" required="True">
                    </div>
                </div>
            </div>
            
            
            <div class="form-group">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <label>Clinic Registration No</label>
                        <input type="text" class="form-control" id="ClinicRegistrationNo" name="ClinicRegistrationNo" placeholder="Clinic Registration No" required="True" value="<?php echo $ClinicRegistrationNo; ?>">
                    </div>
                </div>
            </div>
            

            <div class="form-group">
                <div id="divClinicRegistration" class="alert alert-danger" style="display: none;">
                    This Registration ID Already Exist in the system
                </div>  
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <label>Clinic Address</label>
                        <input type="text" class="form-control" id="ClinicAddress" name="ClinicAddress" placeholder="Clinic Address" required="True" value="<?php echo $ClinicAddress; ?>">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <label>Contact No</label>
                        <input type="text" class="form-control" id="ClinicContactNumber" name="ClinicContactNumber" placeholder="Contact No" required="True" value="<?php echo $ClinicContactNumber; ?>">
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
                        <label for="UserAddress">E-mail Address</label>
                        <input type="text" class="form-control" id="UserAddress" name="ClinicEmailAddress" placeholder="" required="True" value="<?php echo $ClinicEmailAddress; ?>">
                    </div>
                </div>
            </div>
            <button type="submit" id="editClinic" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
<?php //echo $footer;?>
<script src="/PrescriptionManagementSoftware/assets/modulesupportjs/clinicManager.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        var baseUrl = "<?php echo base_url(); ?>";
        var prevClinicId =  "<?php echo $ClinicRegistrationNo; ?>";
        //var prevDoctorContactNo = "<?php //echo $DoctorContactNo; ?>";
        checkClinicEditId(baseUrl,prevClinicId);
        //checkDoctorEditId(baseUrl,prevClinicId);
        //checkContactNoEditId(baseUrl,prevDoctorContactNo);
//        checkDoctorId(baseUrl);
    });
</script>


<!--
            <div class="form-group">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <label>Selects Doctor</label>
                        <select class="form-control" id="DoctorId" name="DoctorId"  required="True">
                            <option value="0" //<?php
//if ($doctorId == 0) {
//                                echo 'selected="selected"';
//                            } 
?> >Select</option>
                            //<?php //foreach ($allDoctor as $doctor) { ?>
                                <option value="//<?php //echo $doctor['DoctorId']; ?>" <?php
//if ($doctorId != 0 && $doctorId == $doctor['DoctorId']) {
//                                echo 'selected="selected"';
//                            } 
?>><?php //echo $doctor['DoctorName'];  ?></option>
                            //<?php //}  ?>
                        </select>
                    </div>
                </div>
            </div>

            <div class="checkbox">
                <label>
                    <input type="checkbox" value="1" <?php //if ($isAdmin != '' && $isAdmin == 1) {echo 'checked="True"';
//} 
?> id="IsAdmin" name="IsAdmin">Is Admin
                </label>
            </div>

            <button type="submit" id="editUser" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>