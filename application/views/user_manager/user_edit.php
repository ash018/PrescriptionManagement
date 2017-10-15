<?php
$userId = $userData[0]['UserId'];
$password = $userData[0]['Password'];
$userName = $userData[0]['UserName'];
$userEmail = $userData[0]['UserEmail'];
$userPhone = $userData[0]['UserPhone'];
$userAddress = $userData[0]['UserAddress'];
$isAdmin = $userData[0]['IsAdmin'];
$doctorId = $userData[0]['DoctorId'];
?>
<div class="panel panel-default">
    <div class="panel-heading">
        User - <?php echo $userId;?>
    </div>
    <!-- /.panel-heading -->
    <div class="panel-body">
        <form id="editUser" class="form-group" method="post" enctype="multipart/form-data" action="<?php echo base_url().'UserManager/updateUser' ?>">

            <div class="form-group center">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        
                        <input type="hidden" class="form-control" id="UserId" name="UserId" value="<?php echo $userId; ?>" placeholder="User Id" required="True">
                    </div>

                </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <label>Name</label>
                        <input type="text" class="form-control" id="UserName" name="UserName" value="<?php echo $userName; ?>" placeholder="Name" required="True">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <label>Email</label>
                        <input type="email" class="form-control" id="UserEmail" name="UserEmail" placeholder="Email" value="<?php echo $userEmail; ?>">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <label>Mobile Number</label>
                        <input type="number" maxlength="11" class="form-control" id="UserPhone" name="UserPhone" placeholder="Mobile Number" required="True" value="<?php echo $userPhone; ?>">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <label for="Password">Password</label>
                        <input type="password" class="form-control" id="Password" name="Password" placeholder="Password" required="True" value="">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <label for="UserAddress">Address</label>
                        <input type="text" class="form-control" id="UserAddress" name="UserAddress" placeholder="Address" required="True" value="<?php echo $userAddress; ?>">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <label>Selects Doctor</label>
                        <select class="form-control" id="DoctorId" name="DoctorId"  required="True">
                            <option value="0" <?php if ($doctorId == 0) {
                                echo 'selected="selected"';
                            } ?> >Select</option>
                            <?php foreach ($allDoctor as $doctor) { ?>
                                <option value="<?php echo $doctor['DoctorId']; ?>" <?php if ($doctorId != 0 && $doctorId == $doctor['DoctorId']) {
                                echo 'selected="selected"';
                            } ?>><?php echo $doctor['DoctorName']; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
            </div>

            <div class="checkbox">
                <label>
                    <input type="checkbox" value="1" <?php if ($isAdmin != '' && $isAdmin == 1) {
    echo 'checked="True"';
} ?> id="IsAdmin" name="IsAdmin">Is Admin
                </label>
            </div>

            <button type="submit" id="editUser" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>