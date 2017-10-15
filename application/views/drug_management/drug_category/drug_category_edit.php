<?php
    $dTypeId = $dCategory[0]['DrugCategoryId'];
    $dTypeName = $dCategory[0]['DrugCategoryName'];
    $isActive = $dCategory[0]['DrugCategoryIsActive'];
    
?>
<div class="panel panel-default">
    <div class="panel-heading">
        Drug Category Name - <?php echo $dTypeName;?>
    </div>
    <!-- /.panel-heading -->
    <div class="panel-body">
        <form id="editDtype" class="form-group" method="post" enctype="multipart/form-data" action="<?php echo base_url().'DrugManagement/drugCategoryUpdate' ?>">

            <div class="form-group center">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <input type="hidden" class="form-control" id="DrugCategoryId" name="DrugCategoryId" value="<?php echo $dTypeId; ?>">
                    </div>

                </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <label>Drug Category Name</label>
                        <input type="text" class="form-control" id="DrugCategoryName" name="DrugCategoryName" value="<?php echo $dTypeName; ?>" placeholder="Drug Type Name" required="True">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div id="divDcategoryName" class="alert alert-danger alert-dismissable" style="display: none;">
                    This Drug Category Already Exist in the System.
                </div>
            </div>
            

            <div class="checkbox">
                <label>
                    <input type="checkbox" value="1" <?php if ($isActive != '' && $isActive == 1) {
                         echo 'checked="True"';
                    } ?> id="DrugCategoryIsActive" name="DrugCategoryIsActive">Is Active
                </label>
            </div>

            <button type="submit" id="saveDcategory" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>

<script type="text/javascript">
            $(document).ready(function () {
                var baseUrl = "<?php echo base_url(); ?>";
                checkDrugCategoryName(baseUrl);
            });
        </script>