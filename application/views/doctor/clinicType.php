<!DOCTYPE html>
<html lang="en">

    <?php
        echo $Header;
    ?>
    <body>

        <div id="wrapper">
            <?php echo $leftMenu; ?>
            <!-- Navigation -->


            <div id="page-wrapper">
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
                        
                        <br/>
                        <h1 class="page-header">New Clinic Type</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <form role="form" action="<?php echo base_url() . 'DocList/clinicTypeSave' ?>" method="post">
                            <div class="form-group">
                                <div class="row">

                                    <?php if ($typeAdd == 1) { ?>
                                        <div class="alert alert-success alert-dismissable">
                                            <button class="close" type="button" data-dismiss="alert" aria-hidden="true">×</button>

                                            <?php echo 'Successfully Added New Clinic Type'; ?>
                                        </div>
                                    <?php } ?>

                                    <div class="form-group">
                                        <label>Clinic Type Name</label>
                                        <input type="text" class="form-control" id="ClinicType" name="ClinicType" value="" placeholder="Clinic Type Name" required="True">
                                    </div>
                                    <div class="form-group">
                                        <div id="divClinictypeName" class="alert alert-danger" style="display: none;">
                                            This Clinic Type Already Exist in the System.
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <button type="reset" class="btn btn-danger">Reset</button>
                            <button type="submit" id="saveClinictype" class="btn btn-primary">Save</button>
                        </form>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /#page-wrapper -->

        </div>
        <?php echo $footer; ?>

        <script src="/PrescriptionManagementSoftware/assets/modulesupportjs/clinicManager.js"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                var baseUrl = "<?php echo base_url(); ?>";
                checkClinicType(baseUrl);
            });
        </script>
    </body>

</html>
