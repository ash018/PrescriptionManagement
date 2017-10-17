<?php
    $dTypeId = $drugEdit[0]['DrugId'];
    $dTypeName = $drugEdit[0]['DrugName'];
    $drugCategoryId = $drugEdit[0]['DrugCategoryId'];
    $drugSubCategoryId = $drugEdit[0]['DrugSubcategoryId'];
    $isActive = $drugEdit[0]['DrugIsActive'];
?>
<div class="panel panel-default">
    <div class="panel-heading">
        Drug - <?php echo $dTypeName; ?>
    </div>
    <!-- /.panel-heading -->
    <div class="panel-body">
        <form id="editDtype" class="form-group" method="post" enctype="multipart/form-data" action="<?php echo base_url() . 'DrugManagement/drugUpdate'; ?>">

            <div class="form-group center">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <input type="hidden" class="form-control" id="DrugId" name="DrugId" value="<?php echo $dTypeId; ?>">
                    </div>

                </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <label>Drug Name</label>
                        <input type="text" class="form-control" id="DrugName" name="DrugName" value="<?php echo $dTypeName; ?>" placeholder="Drug Name" required="True">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div id="divDcategoryName" class="alert alert-danger alert-dismissable" style="display: none;">
                    This Drug Already Exist in the System.
                </div>
            </div>
            <div class="form-group">
                <div class="selection">
                    <label>Drug Category</label>
                    <select id="DrugCategoryId" name="DrugCategoryId" class="form-control" required="True">
                        <option value="0">Select</option>
                        <?php foreach ($allCategory as $catg) { ?>
                            <option value="<?php echo $catg['DrugCategoryId']; ?>" <?php if ($catg['DrugCategoryId'] == $drugCategoryId) {
                            echo 'selected="selected"';
                        } ?>><?php echo $catg['DrugCategoryName'] ?></option>
<?php               } ?>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label>Drug Sub Category</label>
                <div id="selectItemCategory">
                    <select id="DrugSubcategoryId" name="DrugSubcategoryId" class="form-control" required="True">
                        <option value="0">Select</option>
                        <?php foreach ($allSubCategory as $subC) { ?>
                            <option value="<?php echo $subC['DrugSubcategoryId']; ?>"<?php if ($subC['DrugSubcategoryId'] == $drugSubCategoryId) {
                            echo 'selected="selected"';
                        } ?>><?php echo $subC['DrugSubcategoryName'] ?></option>
<?php               } ?>
                    </select>
                </div>    
            </div>
            <div class="form-group">
                <div class="checkbox">
                    <label>
                        <input type="checkbox" value="1" <?php
                        if ($isActive != '' && $isActive == 1) {
                            echo 'checked="True"';
                        }
                        ?> id="DrugIsActive" name="DrugIsActive">Is Active
                    </label>
                </div>
            </div>

            <button type="submit" id="saveDcategory" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function () {
        var baseUrl = "<?php echo base_url(); ?>";
        var drugName = "<?php echo $dTypeName; ?>";
        var dSubCategoryId = "<?php echo $drugSubCategoryId; ?>";
        //checkDrugCategoryName(baseUrl);
        subCategoryAccordingtoCategory(baseUrl);

        checkDrugName(baseUrl, drugName, dSubCategoryId);
    });
</script>