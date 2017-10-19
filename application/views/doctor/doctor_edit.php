<?php
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
        <form id="editUser" class="form-group" method="post" enctype="multipart/form-data" action="<?php echo base_url();?>DocList/updateDoctor">

            <div class="form-group center">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <input type="hidden" class="form-control" id="DoctorId" name="DoctorId" value="<?php echo $doctorId; ?>" placeholder="Doctor Id" required="True">
                    </div>

                </div>
            </div>

            <div class="form-group center">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">

                        <input type="hidden" class="form-control" id="DoctorId" name="EntryBy" value="<?php echo $EntryBy; ?>" placeholder="Doctor Id" required="True">
                    </div>

                </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <label>Doctor Name</label>
                        <input type="text" class="form-control" id="DoctorName" name="DoctorName" value="<?php echo $doctorName; ?>" placeholder="Name" required="True">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <label>Registration No</label>
                        <input type="text" class="form-control" id="DoctorRegistrationNo" name="DoctorRegistrationNo" placeholder="Registration No" value="<?php echo $DoctorRegistrationNo; ?>">
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
                        <label>Doctor Address</label>
                        <input type="text" class="form-control" id="DoctorAddress" name="DoctorAddress" placeholder="Doctor Address" required="True" value="<?php echo $DoctorAddress; ?>">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <label>Contact No</label>
                        <input type="text" class="form-control" id="DoctorContactNo" name="DoctorContactNo" placeholder="Contact No" required="True" value="<?php echo $DoctorContactNo; ?>">
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
                        <input type="text" class="form-control" id="UserAddress" name="DoctorEmailAddress" placeholder="" required="True" value="<?php echo $DoctorEmailAddress; ?>">
                    </div>
                </div>
            </div>
            
            <div class="form-group">
            <label>Clinic</label>
                <select id="DoctorClinic" name="DoctorClinic[]" multiple="multipule" class="form-control">
                    <?php  foreach ($allClinic as $dFrom) { ?>
                        <option value="<?php echo $dFrom['ClinicId'];?>" <?php foreach($doctorClinic as $docCli){if($docCli['ClinicId'] == $dFrom['ClinicId']){echo 'selected="selected"';}}?>><?php echo $dFrom['ClinicName'] . '-' . $dFrom['ClinicAddress']; ?></option>
                    <?php } ?>
                </select>
            </div>
            <button type="submit" id="editDoctor" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>

<script src="/PrescriptionManagementSoftware/assets/modulesupportjs/doctorManager.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        var baseUrl = "<?php echo base_url(); ?>";
        var prevDoctorId =  "<?php echo $DoctorRegistrationNo; ?>";
        var prevDoctorContactNo = "<?php echo $DoctorContactNo; ?>";
        checkDoctorEditId(baseUrl,prevDoctorId);
        checkContactNoEditId(baseUrl,prevDoctorContactNo);
    });
</script>