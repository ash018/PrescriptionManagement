<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Doctor List ?></title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
</head>
<body>

<div class="container">
	<h1>Doctor List</h1>

         <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
            <thead
                <tr>
                    <th>Doctor Name</th>
                    <th>Registration Number</th>
                    <th>Doctor Address</th>
                </tr>
            </thead>
            
                
            <?php 

                    //echo $size;
                    $i = 0;
                    for ($x=0; $x<$size; $x++){
                        foreach($this->data as $row){
                 ?>
            <tbody>
            <tr>
                <td><?php echo $row[$x]['DoctorName'];?></td>
                <td><?php echo $row[$x]['DoctorRegistrationNo'];?></td>
                <td><?php echo $row[$x]['DoctorAddress'];?></td>
            </tr>
             <?php               
                        }
                    }
                ?>
            </tbody>
        </table>

	
</div>
    
   

</body>
</html>