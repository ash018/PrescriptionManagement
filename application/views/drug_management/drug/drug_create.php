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
                    <div class="row">
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
                            <h1 class="page-header">Add New Drug</h1>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Create Drug
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-6">
                                            <form role="form" action="<?php echo base_url() . 'DrugManagement/drugSave' ?>" method="post">
                                                <div class="form-group ">
                                                    <label>Drug Name</label>
                                                    <input type="text" class="form-control" id="DrugName" name="DrugName" value="" placeholder="Drug Name" required="True">
                                                </div>
                                                <div class="form-group">
                                                    <div id="divDcategoryName" class="alert alert-danger alert-dismissable" style="display: none;">
                                                        This Drug Already Exist this Sub Category. Please Try Another Item.
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="selection">
                                                        <label>Drug Category</label>
                                                        <select id="DrugCategoryId" name="DrugCategoryId" class="form-control" required="True">
                                                            <option value="0">Select</option>
                                                            <?php foreach ($allCategory as $catg) { ?>
                                                                <option value="<?php echo $catg['DrugCategoryId'] ?>"><?php echo $catg['DrugCategoryName'] ?></option>
                                                            <?php } ?>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label>Drug Sub Category</label>
                                                    <div id="selectItemCategory">
                                                        <select id="DrugSubcategoryId" name="DrugSubcategoryId" class="form-control" required="True">
                                                            <option value="0">Select</option>
                                                            <?php foreach ($allSubCategory as $subC) { ?>
                                                                <option value="<?php echo $subC['DrugSubcategoryId'] ?>"><?php echo $subC['DrugSubcategoryName'] ?></option>
                                                            <?php } ?>
                                                        </select>
                                                    </div>    

                                                </div>
                                                <div class="form-group">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" value="1" id="DrugIsActive" name="DrugIsActive">Is Active
                                                        </label>
                                                    </div>
                                                </div>    
                                                <button type="reset" class="btn btn-danger">Reset</button>
                                                <button type="submit" id="saveDcategory" class="btn btn-primary">Save</button>
                                            </form>
                                        </div>

                                    </div>

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
