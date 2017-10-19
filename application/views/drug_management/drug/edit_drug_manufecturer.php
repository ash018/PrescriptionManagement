<?php
    $dTypeId = $drugEdit[0]['DrugId'];
    $dTypeName = $drugEdit[0]['DrugName'];
    $drugCategoryId = $drugEdit[0]['DrugCategoryId'];
    $drugSubCategoryId = $drugEdit[0]['DrugSubcategoryId'];
     
    $dManuId = $dManuFe[0]['ManufacturerDrugId'];
    $dManufacturerId = $dManuFe[0]['ManufacturerId'];
    $drugTypeId = $dManuFe[0]['DrugTypeId'];
    $drugFormId = $dManuFe[0]['DrugFormId'];
    $drugId = $dManuFe[0]['DrugId'];
    $manufacturerDrugName = $dManuFe[0]['ManufacturerDrugName'];
    $drugStrengthUnitID = $dManuFe[0]['DrugStrengthUnitID'];
    $drugStrengthUnit = $dManuFe[0]['DrugStrengthUnit'];
    
?>
<div class="panel panel-default">
    <div class="panel-heading">

        Edit Manufacturer for - <?php echo $dTypeName; ?>
    </div>
    <!-- /.panel-heading -->
    <div class="panel-body">
        <div class="col-lg-6 col-md-6 col-sm-6">
            <form id="editDtype" class="form-group" method="post" enctype="multipart/form-data" action="<?php echo base_url() . 'DrugManagement/drugManufacturerUpdate'; ?>">
                <div class="row form-group">
                    <input type="hidden" class="form-control" id="DrugId" name="DrugId" value="<?php echo $dTypeId; ?>">
                    <input type="hidden" class="form-control" id="ManufacturerDrugId" name="ManufacturerDrugId" value="<?php echo $dManuId; ?>">
                </div>
                <div class="form-group">
                    <label>Drug Name</label>
                    <input readonly="readonly" type="text" class="form-control" id="DrugName" name="DrugName" value="<?php echo $dTypeName; ?>" placeholder="Drug Name" required="True">
                </div>

                <div class="form-group">
                    <div class="selection">
                        <label>Drug Category</label>
                        <select readonly="readonly" id="DrugCategoryId" name="DrugCategoryId" class="form-control" required="True">
                            <option value="0">Select</option>
                            <?php foreach ($allCategory as $catg) { ?>
                                <option value="<?php echo $catg['DrugCategoryId']; ?>" <?php
                                if ($catg['DrugCategoryId'] == $drugCategoryId) {
                                    echo 'selected="selected"';
                                }
                                ?>><?php echo $catg['DrugCategoryName'] ?></option>
                                    <?php } ?>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label>Drug Sub Category</label>
                    <div id="selectItemCategory">
                        <select readonly="readonly" id="DrugSubcategoryId" name="DrugSubcategoryId" class="form-control" required="True">
                            <option value="0">Select</option>
                            <?php foreach ($allSubCategory as $subC) { ?>
                                <option value="<?php echo $subC['DrugSubcategoryId']; ?>"<?php
                                if ($subC['DrugSubcategoryId'] == $drugSubCategoryId) {
                                    echo 'selected="selected"';
                                }
                                ?>><?php echo $subC['DrugSubcategoryName'] ?></option>
                                    <?php } ?>
                        </select>
                    </div>    
                </div>

                <div class="form-group">
                    <label>Drug Type</label>
                    <select id="DrugTypeId" name="DrugTypeId" class="form-control" required="True">
                        <option value="0">Select</option>
                        <?php foreach ($allDrugType as $dType) { ?>
                            <option value="<?php echo $dType['DrugTypeId']; ?>" <?php if($drugTypeId == $dType['DrugTypeId']){echo 'selected="selected"';}?> ><?php echo $dType['DrugTypeName'] ?></option>
                        <?php } ?>
                    </select>
                </div>

                <div class="form-group">
                    <label>Name Given By Manufacturer</label>
                    <input type="text" class="form-control" id="ManufacturerDrugName" name="ManufacturerDrugName" value="<?php echo $manufacturerDrugName;?>" placeholder="Drug Name Given By Manufacturer" required="True">
                </div>

                <div class="form-group">
                    <label>Strength</label>
                    <input type="number" step="any" class="form-control" id="DrugStrengthUnit" name="DrugStrengthUnit" value="<?php echo $drugStrengthUnit;?>" placeholder="Drug Strength Unit" required="True">
                </div>

                <div class="form-group">
                    <label>Strength Unit</label>
                    <select id="DrugStrengthUnitID" name="DrugStrengthUnitID" class="form-control" required="True">
                        <option value="0">Select</option>
                        <?php foreach ($allDrugStrengthUnit as $dStrength) { ?>
                            <option value="<?php echo $dStrength['DrugStrengthUnitId']; ?>" <?php if($drugStrengthUnitID == $dStrength['DrugStrengthUnitId']){echo 'selected="selected"';}?> ><?php echo $dStrength['DrugStrengthUnitCode'] ?></option>
                        <?php } ?>
                    </select>
                </div>

                <div class="form-group">
                    <label>Manufacturer</label>
                    <select id="ManufacturerId" name="ManufacturerId" class="form-control" required="True">
                        <option value="0">Select</option>
                        <?php foreach ($allManufacturer as $dMe) { ?>
                            <option value="<?php echo $dMe['ManufacturerId']; ?>" <?php if($dManufacturerId == $dMe['ManufacturerId']){echo 'selected="selected"';}?>><?php echo $dMe['ManufacturerName'] ?></option>
                        <?php } ?>
                    </select>
                </div>

                <div class="form-group">
                    <label>Country</label>
                    <select id="DrugFormId" name="DrugFormId" class="form-control" required="True">
                        <option value="0">Select</option>
                        <?php foreach ($allDrugForm as $dFrom) { ?>
                            <option value="<?php echo $dFrom['DrugFormId']; ?>" <?php if($drugFormId == $dFrom['DrugFormId']){echo 'selected="selected"';}?>><?php echo $dFrom['DrugFormName'] ?></option>
                        <?php } ?>
                    </select>
                </div>

                
                <button type="submit" id="saveDcategory" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
    
</div>