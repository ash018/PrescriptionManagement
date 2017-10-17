<?php
$dTypeId = $dAppMethod[0]['DrugApplicationMethodId'];
$dTypeName = $dAppMethod[0]['DrugApplicationMethodName'];
$isActive = $dAppMethod[0]['DrugApplicationMethodIsActive'];
?>
<div class="panel panel-default">
    <div class="panel-heading">
        Application Method Name - <?php echo $dTypeName; ?>
    </div>
    <!-- /.panel-heading -->
    <div class="panel-body">
        <form id="editDtype" class="form-group" method="post" enctype="multipart/form-data" action="<?php echo base_url() . 'DrugManagement/drugAppMethodUpdate' ?>">

            <div class="form-group center">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <input type="hidden" class="form-control" id="DrugApplicationMethodId" name="DrugApplicationMethodId" value="<?php echo $dTypeId; ?>">
                    </div>

                </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <label>Drug Type Name</label>
                        <input type="text" class="form-control" id="DrugApplicationMethodName" name="DrugApplicationMethodName" value="<?php echo $dTypeName; ?>" placeholder="Drug Type Name" required="True">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div id="divDtypeName" class="alert alert-danger" style="display: none;">
                    This Method Name Already Exist in the System.
                </div>
            </div>

            <div class="checkbox">
                <label>
                    <input type="checkbox" value="1" <?php
                    if ($isActive != '' && $isActive == 1) {
                        echo 'checked="True"';
                    }
                    ?> id="DrugApplicationMethodIsActive" name="DrugApplicationMethodIsActive">Is Active
                </label>
            </div>

            <button type="submit" id="saveDtype" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function () {
        var baseUrl = "<?php echo base_url(); ?>";
        checkDrugTypeName(baseUrl);
    });
</script>
