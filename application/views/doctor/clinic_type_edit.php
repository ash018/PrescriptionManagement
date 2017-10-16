<?php
//var_dump($clinicData[0]);
//exit();

$clinicTypeId = $clinicData[0]['ClinicTypeId'];
$ClinicType = $clinicData[0]['ClinicType'];
?>
<div class="panel panel-default">
    <div class="panel-heading">
        Clinic - <?php echo $ClinicType; ?>
    </div>
    <!-- /.panel-heading -->
    <div class="panel-body">
        <form id="editClinic" class="form-group" method="post" enctype="multipart/form-data" action="<?php base_url() ?>updateClinicType">

            <div class="form-group center">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">

                        <input type="hidden" class="form-control" id="ClinicTypeId" name="ClinicTypeId" value="<?php echo $clinicTypeId; ?>" placeholder="Clinic Id" required="True">
                    </div>

                </div>
            </div>

            <div class="form-group center">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">

                        <input type="text" class="form-control" id="ClinicType" name="ClinicType" value="<?php echo $ClinicType; ?>" placeholder="Clinic Type" required="True">
                    </div>

                </div>
            </div>

            <div class="form-group center">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">

                        <div id="divClinictypeName" class="alert alert-danger" style="display: none;">
                            This Clinic Type Already Exist in the System.
                        </div>
                    </div>

                </div>
            </div>



            <button type="submit" id="editClinicType" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
<?php //echo $footer; ?>
<script src="/PrescriptionManagementSoftware/assets/modulesupportjs/clinicManager.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        var baseUrl = "<?php echo base_url(); ?>";
        var prevClinicTypeId = "<?php echo $ClinicType; ?>";

        checkClinicTypeEditId(baseUrl, prevClinicTypeId);

    });
</script>


