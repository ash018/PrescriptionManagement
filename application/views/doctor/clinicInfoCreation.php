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
                        
                        <h1 class="page-header">Add Clinic Info</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Enter Information Here
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

                                            
                                            <button id="saveDoctor" style="float: right" type="submit" class="btn btn-success right">Submit Button</button>
                                            <button style="float: right" type="reset" class="btn btn-bitbucket">Reset Button</button>     

                                        </div>
                                        <!-- /.col-lg-6 (nested) -->
                                        <div class="col-lg-6">
                                            
                                            

                                        </div>
                                        <!-- /.col-lg-6 (nested) -->
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
