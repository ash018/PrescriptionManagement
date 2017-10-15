<?php
    $dTypeId = $dCountry[0]['DrugFormId'];
    $dTypeName = $dCountry[0]['DrugFormName'];
    $isActive = $dCountry[0]['DrugFormIsActive'];
?>
<div class="panel panel-default">
    <div class="panel-heading">
        Country Name - <?php echo $dTypeName; ?>
    </div>
    <!-- /.panel-heading -->
    <div class="panel-body">
        <form id="editDtype" class="form-group" method="post" enctype="multipart/form-data" action="<?php echo base_url() . 'DrugManagement/drugFromUpdate' ?>">

            <div class="form-group center">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <input type="hidden" class="form-control" id="DrugFormId" name="DrugFormId" value="<?php echo $dTypeId; ?>">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <label>Drug Strength Name</label>
                        <input type="text" class="form-control" id="DrugFormName" name="DrugFormName" value="<?php echo $dTypeName; ?>" placeholder="Country Name" required="True">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div id="divDcategoryName" class="alert alert-danger alert-dismissable" style="display: none;">
                    This Country Already Exist in the System.
                </div>
            </div>

           


            <div class="checkbox">
                <label>
                    <input type="checkbox" value="1" <?php
if ($isActive != '' && $isActive == 1) {
    echo 'checked="True"';
}
?> id="DrugFormIsActive" name="DrugFormIsActive">Is Active
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