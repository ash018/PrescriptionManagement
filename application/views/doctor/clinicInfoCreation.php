<!DOCTYPE html>
<html lang="en">

    <?php
       // var_dump($leftMenu);
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
                        <h1 class="page-header">Add Clinic Information</h1>
                        
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                New Clinic 
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <form role="form" action="<?php echo base_url(); ?>DocList/clinicInfo" method="post">
                                        <div class="col-lg-6">

                                            <div class="form-group">
                                                <label>Clinic Name</label>
                                                <input class="form-control" placeholder="Clinic Name" name="ClinicName" required="">
                                            </div>

                                            <div class="form-group">
                                                <label>Clinic Address</label>
                                                <input class="form-control" placeholder="Clinic Address" name="ClinicAddress" required="">
                                            </div>

                                            <div class="form-group">
                                                <label>Clinic Contact No</label>
                                                <input class="form-control" placeholder="Clinic Contact No" id="ClinicContactNumber" name="ClinicContactNumber">
                                            </div>
                                            

                                            <div class="form-group">
                                                <label>Clinic E-mail Address</label>
                                                <input type="email" class="form-control" placeholder="E-mail Address" name="ClinicEmailAddress">
                                            </div>

                                            <button type="reset" class="btn btn-danger">Reset</button>     
                                            <button id="saveDoctor" type="submit" class="btn btn-primary right">Submit</button>
                                            

                                        </div>
                                        
                                    </form>
                                </div>
                                <!-- /.row (nested) -->
                            </div>
                            <!-- /.panel-body -->
                        </div>
                        <!-- /.panel -->
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /#page-wrapper -->

        </div>
        <?php echo $footer; ?>
        
        <script src="/PrescriptionManagementSoftware/assets/modulesupportjs/doctorManager.js"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                var baseUrl = "<?php echo base_url(); ?>";
                checkDoctorId(baseUrl);
                checkContactNoId(baseUrl);
            });
        </script>
    </body>

</html>
