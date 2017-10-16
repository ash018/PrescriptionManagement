<?php
    $dTypeId = $dSubCategory[0]['DrugSubcategoryId'];
    $dTypeName = $dSubCategory[0]['DrugSubcategoryName'];
    $drugCategoryId = $dSubCategory[0]['DrugCategoryId'];
    $isActive = $dSubCategory[0]['DrugSubcategoryIsActive'];
    
?>
<div class="panel panel-default">
    <div class="panel-heading">
        Sub Category Name - <?php echo $dTypeName;?>
    </div>
    <!-- /.panel-heading -->
    <div class="panel-body">
        <form id="editDtype" class="form-group" method="post" enctype="multipart/form-data" action="<?php echo base_url().'DrugManagement/drugSubCategoryUpdate' ?>">

            <div class="form-group center">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <input type="hidden" class="form-control" id="DrugSubcategoryId" name="DrugSubcategoryId" value="<?php echo $dTypeId; ?>">
                    </div>

                </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <label>Drug Sub Category Name</label>
                        <input type="text" class="form-control" id="DrugSubcategoryName" name="DrugSubcategoryName" value="<?php echo $dTypeName; ?>" placeholder="Drug Type Name" required="True">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div id="divDcategoryName" class="alert alert-danger alert-dismissable" style="display: none;">
                    This Drug Sub Category Already Exist in the System.
                </div>
            </div>
            <div class="form-group">
            <div class="selection">
                <label>Drug Category</label>
                <select id="DrugCategoryId" name="DrugCategoryId" class="form-control" required="True">
                <option value="0">Select</option>
                <?php foreach ($allCategory as $catg){?>
                    <option <?php if($drugCategoryId == $catg['DrugCategoryId']){echo 'selected="selected"' ;}?> value="<?php echo $catg['DrugCategoryId']; ?>"><?php echo $catg['DrugCategoryName']?></option>
                <?php }?>
                </select>
            </div>
            </div>

            <div class="checkbox">
                <label>
                    <input type="checkbox" value="1" <?php if ($isActive != '' && $isActive == 1) {
                         echo 'checked="True"';
                    } ?> id="DrugSubcategoryIsActive" name="DrugSubcategoryIsActive">Is Active
                </label>
            </div>

            <button type="submit" id="saveDcategory" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>

<script type="text/javascript">
            $(document).ready(function () {
                var baseUrl = "<?php echo base_url(); ?>";
                var dsubCategoryName = "<?php echo $dTypeName;?>";
                var dCategoryId = "<?php echo $drugCategoryId;?>";
                checkDrugCategoryName(baseUrl, dsubCategoryName, dCategoryId);
            });
        </script>