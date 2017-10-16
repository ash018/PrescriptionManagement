<?php
//var_dump($clinicData[0]);
//exit();

$clinicId = $clinicData[0]['ClinicId'];
$clinicName = $clinicData[0]['ClinicName'];

$ClinicAddress = $clinicData[0]['ClinicAddress'];
$ClinicContactNumber = $clinicData[0]['ClinicContactNumber'];
$ClinicEmailAddress = $clinicData[0]['ClinicEmailAddress'];
$EntryBy = $clinicData[0]['EntryBy'];
?>
<div class="panel panel-default">
    <div class="panel-heading">
        Clinic - <?php echo  $clinicName;?>
    </div>
    <!-- /.panel-heading -->
    <div class="panel-body">
        <form id="editUser" class="form-group" method="post" enctype="multipart/form-data" action="<?php base_url() ?>deleteClinic">

            <div class="form-group center">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        
                        <input type="hidden" class="form-control" id="ClinicId" name="ClinicId" value="<?php echo $clinicId; ?>" placeholder="Doctor Id" required="True">
                    </div>

                </div>
            </div>
            
            <div class="form-group center">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        
                        <h3>You Sure you want to delete all the information regarding <?php echo $clinicName?> ?</h3>
                    </div>

                </div>
            </div>
            
            
            <button type="submit" id="editUser" class="btn btn-danger">Delete</button>
        </form>
    </div>
</div>
<!--
            <div class="form-group">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <label>Selects Doctor</label>
                        <select class="form-control" id="DoctorId" name="DoctorId"  required="True">
                            <option value="0" //<?php //if ($doctorId == 0) {
//                                echo 'selected="selected"';
//                            } ?> >Select</option>
                            //<?php //foreach ($allDoctor as $doctor) { ?>
                                <option value="//<?php //echo $doctor['DoctorId']; ?>" <?php //if ($doctorId != 0 && $doctorId == $doctor['DoctorId']) {
//                                echo 'selected="selected"';
//                            } ?>><?php //echo $doctor['DoctorName']; ?></option>
                            //<?php //} ?>
                        </select>
                    </div>
                </div>
            </div>

            <div class="checkbox">
                <label>
                    <input type="checkbox" value="1" <?php //if ($isAdmin != '' && $isAdmin == 1) {echo 'checked="True"';
//} ?> id="IsAdmin" name="IsAdmin">Is Admin
                </label>
            </div>

            <button type="submit" id="editUser" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>