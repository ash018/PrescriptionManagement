<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
?>
<style>
.dropbtn {
    background-color: #4CAF50;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}


</style>
<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Prescription Management System</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        
                        <li>
                            <a href="index.html"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                      <!--  <li>
                        <a href="#">
                            <i class="fa fa-wrench fa-fw"></i>
                            Doctor
                            <span class="fa arrow"></span>
                            </a>
                            <ul class="nav nav-second-level collapse in" aria-expanded="true" style="">
                            <li>
                            <a href="panels-wells.html">Doctor List</a>
                            </li>
                            <li>
                            <a href="buttons.html">Edit Doctor Information</a>
                            </li>
                            </ul>
                        </li> -->
                        
                        <li class="dropdown">
                        <a href="#">
                            <i class="fa fa-wrench fa-fw"></i>
                            Doctor
                            <span class="fa arrow"></span>
                            </a>
                            <ul class="nav nav-second-level" aria-expanded="true" style="">
                                <li>
                                    <a href="<?php echo site_url('doctor/DocList/doctorList') ?>">Doctor List</a>
                                </li>
                                
                                <li>
                                    <a href="<?php echo site_url('doctor/welcome/doctorList') ?>">Edit Doctor Information</a>
                                </li>  
                                 
                            </ul>
                        </li>
                        
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
