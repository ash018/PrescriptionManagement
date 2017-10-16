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
                            <h1 class="page-header">New Drug Sub Category</h1>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Create Drug Sub Category
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-6">
                                            <form role="form" action="<?php echo base_url() . 'DrugManagement/drugSubCategorySave' ?>" method="post">
                                                <div class="form-group ">
                                                    <label>Drug Sub Category Name</label>
                                                    <input type="text" class="form-control" id="DrugSubcategoryName" name="DrugSubcategoryName" value="" placeholder="Drug Sub Category Name" required="True">
                                                </div>
                                                <div class="form-group">
                                                    <div id="divDcategoryName" class="alert alert-danger alert-dismissable" style="display: none;">
                                                        This Drug Sub Category Already Exist this Category. Please Try Another. in the System.
                                                    </div>
                                                </div>
                                                
                                                <div class="form-group">
                                                <div class="selection">
                                                    <label>Drug Category</label>
                                                    <select id="DrugCategoryId" name="DrugCategoryId" class="form-control" required="True">
                                                    <option value="0">Select</option>
                                                    <?php foreach ($allCategory as $catg){?>
                                                        <option value="<?php echo $catg['DrugCategoryId']?>"><?php echo $catg['DrugCategoryName']?></option>
                                                    <?php }?>
                                                    </select>
                                                </div>
                                                </div>
                                                <div class="form-group">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" value="1" id="DrugSubcategoryIsActive" name="DrugSubcategoryIsActive">Is Active
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

        <script src="/PrescriptionManagementSoftware/assets/modulesupportjs/DrugManagement/subCategory.js"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                var baseUrl = "<?php echo base_url(); ?>";
                checkDrugCategoryName(baseUrl);
            });
        </script>
    </body>
</html>
