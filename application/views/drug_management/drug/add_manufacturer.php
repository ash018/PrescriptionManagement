<?php
    $dTypeId = $drug[0]['DrugId'];
    $dTypeName = $drug[0]['DrugName'];
    $drugCategoryId = $drug[0]['DrugCategoryId'];
    $drugSubCategoryId = $drug[0]['DrugSubcategoryId'];
    $isActive = $drug[0]['DrugIsActive'];
?>
<html lang="en">

    <?php
    echo $Header;
    ?>
    <body>
        <div id="wrapper">
            <?php
            echo $leftMenu;
            ?>
            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row wrapper border-bottom white-bg page-heading">
                        <div class="col-lg-12">
                            <br>
                            <?php
                            $notify = $this->session->userdata('notifyuser');

                            if (sizeof($notify) > 0 && $notify != '') {
                                if ($notify['type'] == 1) {
                                    ?>
                                    <div class="alert alert-success alert-dismissable">
                                        <button class="close" type="button" data-dismiss="alert" aria-hidden="true">×</button>
                                        <?php echo $notify['message']; ?>
                                    </div>
                                    <?php
                                }
                                if ($notify['type'] == 0) {
                                    ?>
                                    <div class="alert alert-danger alert-dismissable">
                                        <button class="close" type="button" data-dismiss="alert" aria-hidden="true">×</button>
                                        <?php echo $notify['message']; ?>
                                    </div>
                                    <?php
                                }
                                $this->session->unset_userdata('notifyuser');
                            }
                            ?>
                            <h1 class="page-header">Add Drug Manufacturer</h1>
                            <ol class="breadcrumb">
                            <li>
                                <a href="<?php echo base_url().'Dashboard'?>">Home</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url().'DrugManagement/drugList'?>">Drug List</a>
                            </li>
                            <li class="active">
                                <strong>Drug Manufacturer</strong>
                            </li>
                        </ol>
                        </div>
                    </div>
                 
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    
                                    Add Manufacturer for - <?php echo $dTypeName; ?>
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <form id="editDtype" class="form-group" method="post" enctype="multipart/form-data" action="<?php echo base_url().'DrugManagement/drugManufacturerSave'; ?>">
                                            <div class="row form-group">
                                                <input type="hidden" class="form-control" id="DrugId" name="DrugId" value="<?php echo $dTypeId; ?>">
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
                                                        <option value="<?php echo $dType['DrugTypeId']; ?>"><?php echo $dType['DrugTypeName'] ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label>Name Given By Manufacturer</label>
                                                <input type="text" class="form-control" id="ManufacturerDrugName" name="ManufacturerDrugName" value="" placeholder="Drug Name Given By Manufacturer" required="True">
                                            </div>
                                            
                                            <div class="form-group">
                                                <label>Strength</label>
                                                <input type="number" step="any" class="form-control" id="DrugStrengthUnit" name="DrugStrengthUnit" value="" placeholder="Drug Strength Unit" required="True">
                                            </div>
                                            
                                            <div class="form-group">
                                                <label>Strength Unit</label>
                                                <select id="DrugStrengthUnitID" name="DrugStrengthUnitID" class="form-control" required="True">
                                                    <option value="0">Select</option>
                                                    <?php foreach ($allDrugStrengthUnit as $dStrength) { ?>
                                                        <option value="<?php echo $dStrength['DrugStrengthUnitId']; ?>"><?php echo $dStrength['DrugStrengthUnitCode'] ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label>Manufacturer</label>
                                                <select id="ManufacturerId" name="ManufacturerId" class="form-control" required="True">
                                                    <option value="0">Select</option>
                                                    <?php foreach ($allManufacturer as $dMe) { ?>
                                                        <option value="<?php echo $dMe['ManufacturerId']; ?>"><?php echo $dMe['ManufacturerName'] ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label>Country</label>
                                                <select id="DrugFormId" name="DrugFormId" class="form-control" required="True">
                                                    <option value="0">Select</option>
                                                    <?php foreach ($allDrugForm as $dFrom) { ?>
                                                        <option value="<?php echo $dFrom['DrugFormId']; ?>"><?php echo $dFrom['DrugFormName'] ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>

                                            <button type="reset" class="btn btn-danger">Reset</button>
                                            <button type="submit" id="saveDcategory" class="btn btn-primary">Save</button>
                                        </form>
                                    </div>
                                </div>
                                <!-- /.panel -->
                            </div>
                            <!-- /.col-lg-12 -->
                        </div>

                    </div>
                </div>

            </div>
        <?php echo $footer; ?>

            <script src="/PrescriptionManagementSoftware/assets/modulesupportjs/DrugManagement/drug.js"></script>
            <script type="text/javascript">
                $(document).ready(function () {
                    var baseUrl = "<?php echo base_url(); ?>";
                    checkDrugCategoryName(baseUrl);
                    subCategoryAccordingtoCategory(baseUrl);
                });
            </script>
    </body>
</html>
