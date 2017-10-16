<?php
$dTypeId = $dManufacturer[0]['ManufacturerId'];
$dTypeName = $dManufacturer[0]['ManufacturerName'];
$dPhone = $dManufacturer[0]['ManufacturerPhone'];
$dEmail = $dManufacturer[0]['ManufacturerEmail'];
$dWeb = $dManufacturer[0]['ManufacturerWebsite'];
$dAddress = $dManufacturer[0]['ManufacturerAddress'];
$isActive = $dManufacturer[0]['ManufacturerIsActive'];
?>
<div class="panel panel-default">
    <div class="panel-heading">
        Manufacturer - <?php echo $dTypeName; ?>
    </div>
    <!-- /.panel-heading -->
    <div class="panel-body">
        <form class="form-group" method="post" enctype="multipart/form-data" action="<?php echo base_url() . 'DrugManagement/manufacturerUpdate' ?>">

            <div class="form-group center">
                <div class="row">
                    <input type="hidden" class="form-control" id="ManufacturerId" name="ManufacturerId" value="<?php echo $dTypeId; ?>">
                </div>
            </div>

            <div class="form-group">

                <label>Manufacturer Name</label>
                <input type="text" class="form-control" id="ManufacturerName" name="ManufacturerName" value="<?php echo $dTypeName; ?>" placeholder="Drug Type Name" required="True">

            </div>

            <div class="form-group">

                <label>Manufacturer Phone</label>
                <input type="number" class="form-control" id="ManufacturerPhone" name="ManufacturerPhone" value="<?php echo $dPhone; ?>" placeholder="Phone Number">

            </div>

            <div class="form-group">

                <label>Manufacturer Email</label>
                <input type="email" class="form-control" id="ManufacturerEmail" name="ManufacturerEmail" value="<?php echo $dEmail; ?>" placeholder="Email">

            </div>

            <div class="form-group">

                <label>Manufacturer Web Address</label>
                <input type="text" class="form-control" id="ManufacturerWebsite" name="ManufacturerWebsite" value="<?php echo $dWeb; ?>" placeholder="Web Address">

            </div>

            <div class="form-group">

                <label>Manufacturer Address</label>
                <input type="text" class="form-control" id="ManufacturerAddress" name="ManufacturerAddress" value="<?php echo $dAddress; ?>" placeholder="Address">

            </div>

            <div class="checkbox">
                <label>
                    <input type="checkbox" value="1" <?php
                    if ($isActive != '' && $isActive == 1) {
                        echo 'checked="True"';
                    }
                    ?> id="ManufacturerIsActive" name="ManufacturerIsActive">Is Active
                </label>
            </div>

            <button type="submit" id="updateDrugType" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function () {
        var baseUrl = "<?php echo base_url(); ?>";
        checkDrugCategoryName(baseUrl);
    });
</script>
