<html lang="en">

    <?php
    echo $Header;
    ?>

    <body>
        <div id="wrapper">
            <?php
            //include 'left_menu.php';
            echo $leftMenu;
            ?>
            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <?php $notify = $this->session->userdata('notifyuser');
                            if (sizeof($notify) > 0 && $notify != '') {
                                
                                if ($notify['type'] == 1) {
                                    ?>
                                    <div class="alert alert-success alert-dismissable">
                                        <button class="close" type="button" data-dismiss="alert" aria-hidden="true">×</button>
                                        <?php echo $notify['message'];?>
                                    </div>
                                <?php }
                                if ($notify['type'] == 0) {
                                    ?>
                                    <div class="alert alert-danger alert-dismissable">
                                        <button class="close" type="button" data-dismiss="alert" aria-hidden="true">×</button>
                                        <?php echo $notify['message'];?>
                                    </div>
                                <?php }
                                $this->session->unset_userdata('notifyuser');
                            }
                            ?>


                            <h1 class="page-header">New User</h1>
                        </div>




                    </div>
                    <?php
                    //$this->session->unset_userdata('notifyuser');
                    //$this->session->unset_userdata('userdata');
                    ?>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Create User
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <form role="form" action="<?php base_url() ?>userSave" method="post">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-6 col-sm-6">
                                                            <label>User Id</label>
                                                            <input type="text" class="form-control" id="UserId" name="UserId" placeholder="User Id" required="True">
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-6">
                                                            <div id="divUserId" class="alert alert-danger" style="display: none;">
                                                                This User Id Already Exist in the system
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-6 col-sm-6">
                                                            <label>Name</label>
                                                            <input type="text" class="form-control" id="UserName" name="UserName" placeholder="Name" required="True">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-6 col-sm-6">
                                                            <label>Email</label>
                                                            <input type="email" class="form-control" id="UserEmail" name="UserEmail" placeholder="Email">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-6 col-sm-6">
                                                            <label>Mobile Number</label>
                                                            <input type="number" maxlength="11" class="form-control" id="UserPhone" name="UserPhone" placeholder="Mobile Number" required="True">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-6 col-sm-6">
                                                            <label for="Password">Password</label>
                                                            <input type="password" class="form-control" id="Password" name="Password" placeholder="Password" required="True">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-6 col-sm-6">
                                                            <label for="UserAddress">Address</label>
                                                            <input type="text" class="form-control" id="UserAddress" name="UserAddress" placeholder="Address" required="True">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-6 col-sm-6">
                                                            <label>Selects Doctor</label>
                                                            <select class="form-control" id="DoctorId" name="DoctorId"  required="True">
                                                                <option value="0" selected="selected">Select</option>
                                                                <?php foreach ($allDoctor as $doctor) { ?>
                                                                    <option value="<?php echo $doctor['DoctorId']; ?>"><?php echo $doctor['DoctorName']; ?></option>
                                                                <?php } ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" value="1" id="IsAdmin" name="IsAdmin">Is Admin
                                                    </label>
                                                </div>


                                                <button type="reset" class="btn btn-danger">Reset</button>
                                                <button type="submit" id="saveUser" class="btn btn-primary">Save</button>
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

        <script src="/PrescriptionManagementSoftware/assets/modulesupportjs/userManager.js"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                var baseUrl = "<?php echo base_url(); ?>";
                checkUserId(baseUrl);
            });
        </script>
    </body>


</html>
