<html lang="en">

<?php
   include 'header.php';
   $header = new Header();
   $header->setFirstName('Home');
   echo $header->getFirstName();
?>

<body>

    <div id="wrapper">
        <?php 
            include 'left_menu.php';
        ?>
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Blank</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
               
            </div>
            
        </div>
       
    </div>
    <?php include 'footer.php';?>
    

</body>

</html>