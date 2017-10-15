<?php
    $dTypeId = $dType[0]['DrugTypeId'];
    $dTypeName = $dType[0]['DrugTypeName'];
    $isActive = $dType[0]['DrugTypeIsActive'];
    
?>
<div class="panel panel-default">
    <div class="panel-heading">
        Drug Type Name - <?php echo $dTypeName;?>
    </div>
    <!-- /.panel-heading -->
    <div class="panel-body">
        <form id="editDtype" class="form-group" method="post" enctype="multipart/form-data" action="<?php echo base_url().'DrugManagement/drugTypeUpdate' ?>">

            <div class="form-group center">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <input type="hidden" class="form-control" id="DrugTypeId" name="DrugTypeId" value="<?php echo $dTypeId; ?>">
                    </div>

                </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <label>Drug Type Name</label>
                        <input type="text" class="form-control" id="DrugTypeName" name="DrugTypeName" value="<?php echo $dTypeName; ?>" placeholder="Drug Type Name" required="True">
                    </div>
                </div>
            </div>
            

            <div class="checkbox">
                <label>
                    <input type="checkbox" value="1" <?php if ($isActive != '' && $isActive == 1) {
                         echo 'checked="True"';
                    } ?> id="DrugTypeIsActive" name="DrugTypeIsActive">Is Active
                </label>
            </div>

            <button type="submit" id="updateDrugType" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>