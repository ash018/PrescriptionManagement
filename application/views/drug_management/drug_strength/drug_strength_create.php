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
                            <h1 class="page-header">New Drug Strength</h1>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Create Drug Strength
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-6">
                                            <form role="form" action="<?php echo base_url() . 'DrugManagement/drugStrengthSave' ?>" method="post">
                                                <div class="form-group ">
                                                    <label>Drug Strength Name</label>
                                                    <input type="text" class="form-control" id="DrugStrengthUnitName" name="DrugStrengthUnitName" value="" placeholder="Drug Strength Name" required="True">
                                                </div>
                                                <div class="form-group">
                                                    <div id="divDcategoryName" class="alert alert-danger alert-dismissable" style="display: none;">
                                                        This Drug Strength Already Exist in the System.
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <label>Drug Strength Code</label>
                                                    <input type="text" class="form-control" id="DrugStrengthUnitCode" name="DrugStrengthUnitCode" value="" placeholder="Drug Strength Code" required="True">
                                                </div>

                                                <div class="form-group">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" value="1" id="DrugStrengthUnitIsActive" name="DrugStrengthUnitIsActive">Is Active
                                                        </label>
                                                    </div>
                                                </div>    
                                                <button type="reset" class="btn btn-danger">Reset</button>
                                                <button type="submit" id="saveDstrength" class="btn btn-primary">Save</button>
                                            </form>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>
            </div>

        </div>
        <?php echo $footer; ?>

        <script src="/PrescriptionManagementSoftware/assets/modulesupportjs/DrugManagement/drugStrength.js"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                var baseUrl = "<?php echo base_url(); ?>";
                checkDrugCategoryName(baseUrl);
            });
        </script>
    </body>
</html>
