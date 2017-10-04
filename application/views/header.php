<?php
    class Header {
        private $title;
        
        public function setFirstName($title){
             $this->title = $title;
        }

        public function getFirstName(){
            $head = '<head>
                    <meta charset="utf-8">
                    <meta http-equiv="X-UA-Compatible" content="IE=edge">
                    <meta name="viewport" content="width=device-width, initial-scale=1">
                    <meta name="description" content="">
                    <meta name="author" content="">

                    <title>'.$this->title.'</title>

                    <!-- Bootstrap Core CSS -->
                    <link href="/PrescriptionManagementSoftware/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

                    <!-- MetisMenu CSS -->
                    <link href="/PrescriptionManagementSoftware/assets/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

                    <!-- Custom CSS -->
                    <link href="/PrescriptionManagementSoftware/assets/dist/css/sb-admin-2.css" rel="stylesheet">

                    <!-- Morris Charts CSS -->
                    <link href="/PrescriptionManagementSoftware/assets/vendor/morrisjs/morris.css" rel="stylesheet">

                    <!-- Custom Fonts -->
                    <link href="/PrescriptionManagementSoftware/assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">


                </head>';
             return $head;
        }
    }
    
?>