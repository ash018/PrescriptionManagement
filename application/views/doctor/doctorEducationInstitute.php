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
                        
                        
                        <h1 class="page-header">Add Doctor Education Institute</h1>
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
                                    <form role="form" action="<?php echo base_url(); ?>DocList/doctorInstitute" method="post">
                                        <div class="col-lg-6">

                                            <div class="form-group">
                                                <label>Education Institute Name</label>
                                                <input class="form-control" placeholder="Education Institute Name" id="EducationInstituteName" name="EducationInstituteName" required="true">
                                            </div>
                                            
                                            <div class="form-group">
                                                <div id="divDoctorEducationInstitute" class="alert alert-danger" style="display: none;">
                                                        This Education Institute Already Exist in the system
                                                </div>  
                                            </div>

                                            <div class="form-group">
                                                <label>Education Institute Address</label>
                                                <input id="EducationInstituteAddress" class="form-control" placeholder="Education Institute Address" name="EducationInstituteAddress">
                                            </div>
                                            

                                            <div class="form-group">
                                                <label>Education Institute Contact No</label>
                                                <input class="form-control" placeholder="Education Institute Contact No" name="EducationInstituteContactNo" required="">
                                            </div>
                                            
                                            <div class="form-group">
                                                <label>Education Institute Email</label>
                                                <input id="EducationInstituteEmail" class="form-control" placeholder="Education Institute Email" name="EducationInstituteEmail">
                                            </div>

                                            <button id="saveDoctorInstitute" style="float: right" type="submit" class="btn btn-success right">Submit Button</button>
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
                checkDoctorEducationInstituteName(baseUrl);
                //checkContactNoId(baseUrl);
            });
        </script>
    </body>

</html>
