<?php
$dTypeId = $dStrength[0]['DrugStrengthUnitId'];
$dTypeName = $dStrength[0]['DrugStrengthUnitName'];
$dTypeCode = $dStrength[0]['DrugStrengthUnitCode'];
$isActive = $dStrength[0]['DrugStrengthUnitIsActive'];
?>
<div class="panel panel-default">
    <div class="panel-heading">
        Drug Strength Name - <?php echo $dTypeName; ?>
    </div>
    <!-- /.panel-heading -->
    <div class="panel-body">
        <form id="editDtype" class="form-group" method="post" enctype="multipart/form-data" action="<?php echo base_url() . 'DrugManagement/drugStrengthUpdate' ?>">

            <div class="form-group center">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <input type="hidden" class="form-control" id="DrugStrengthUnitId" name="DrugStrengthUnitId" value="<?php echo $dTypeId; ?>">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <label>Drug Strength Name</label>
                        <input type="text" class="form-control" id="DrugStrengthUnitName" name="DrugStrengthUnitName" value="<?php echo $dTypeName; ?>" placeholder="Drug Strength Name" required="True">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div id="divDcategoryName" class="alert alert-danger alert-dismissable" style="display: none;">
                    This Drug Strength Already Exist in the System.
                </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <label>Drug Strength Code</label>
                        <input type="text" class="form-control" id="DrugStrengthUnitCode" name="DrugStrengthUnitCode" value="<?php echo $dTypeCode; ?>" placeholder="Drug Strength Name" required="True">
                    </div>
                </div>
            </div>


            <div class="checkbox">
                <label>
                    <input type="checkbox" value="1" <?php
if ($isActive != '' && $isActive == 1) {
    echo 'checked="True"';
}
?> id="DrugStrengthUnitIsActive" name="DrugStrengthUnitIsActive">Is Active
                </label>
            </div>

            <button type="submit" id="saveDstrength" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function () {
        var baseUrl = "<?php echo base_url(); ?>";
        checkDrugCategoryName(baseUrl);
    });
</script>