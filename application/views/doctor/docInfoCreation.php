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
                        <h1 class="page-header">Add Doctor Info</h1>
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
                                    <form role="form" action="<?php echo base_url(); ?>DocList/doctorInfo" method="post">
                                        <div class="col-lg-6">

                                            <div class="form-group">
                                                <label>Doctor Name</label>
                                                <input class="form-control" placeholder="Doctor Name" name="DoctorName" required="">
                                            </div>

                                            <div class="form-group">
                                                <label>Doctor Registration No</label>
                                                <input id="DoctorRegistrationNo" class="form-control" placeholder="Registration No" name="DoctorRegistrationNo">
                                            </div>
                                            
                                            <div class="form-group">
                                                <div id="divDoctorRegistration" class="alert alert-danger" style="display: none;">
                                                        This Registration ID Already Exist in the system
                                                </div>  
                                            </div>


                                            <div class="form-group">
                                                <label>Doctor Address</label>
                                                <input class="form-control" placeholder="Doctor Address" name="DoctorAddress" required="">
                                            </div>

                                            <div class="form-group">
                                                <label>Contact No</label>
                                                <input class="form-control" placeholder="Contact No" id="DoctorContactNo" name="DoctorContactNo">
                                            </div>
                                            
                                            <div class="form-group">
                                                <div id="divDoctorContactNo" class="alert alert-danger" style="display: none;">
                                                        This Contact No Already Exist in the system
                                                </div>  
                                            </div>

                                            <div class="form-group">
                                                <label>E-mail Address</label>
                                                <input type="email" class="form-control" placeholder="E-mail Address" name="DoctorEmailAddress">
                                            </div>

                                            
                                            <button id="saveDoctor" style="float: right" type="submit" class="btn btn-success right">Submit Button</button>
                                            <button style="float: right" type="reset" class="btn btn-bitbucket">Reset Button</button>        

                                        </div>
                                        <!-- /.col-lg-6 (nested) -->
                                        <div class="col-lg-6">
                                            
                                            <div class="form-group">
                                                <label></label>
                                                <input type="hidden" class="form-control" placeholder="E-mail Address" name="">
                                            </div> 
                                            
                                            <div class="form-group">
                                                <div id="divDoctorRegistration" class="alert alert-danger" style="display: none;">
                                                        This Registration ID Already Exist in the system
                                                </div>  
                                            </div>

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
