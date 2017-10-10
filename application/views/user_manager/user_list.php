<html lang="en">

    <?php
    echo $Header;
    ?>

    <body>
        <div id="wrapper">
            <?php echo $leftMenu;?>
            <div id="page-wrapper">
                <div class="container-fluid">
                <div class="row">
                      <div class="col-lg-12">
                          <h1 class="page-header">User</h1>
                      </div>

                  </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    All User
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                   
                                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>SL</th>
                                                <th>Name</th>
                                                <th>Phone Number</th>
                                                <th>Email</th>
                                                <th>Creation Date</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $c = 1;foreach($allUser as $user){?>
                                            <tr class="odd gradeX">
                                                <td><?php echo $c;?></td>
                                                <td><?php echo $user['UserName'];?></td>
                                                <td><?php echo $user['UserPhone'];?></td>
                                                <td class="center"><?php echo $user['UserEmail'];?></td>
                                                <td class="center"><?php echo $user['EntryDate'];?></td>
                                                <td class="center"><input type="button" class="btn btn-info" value="Edit"/></td>
                                            </tr>
                                            <?php $c++; }?>
                                        </tbody>
                                    </table>
                                    
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


    </body>

</html>

<?php
//exit(); ?>