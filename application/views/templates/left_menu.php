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
                <li><a href="<?php echo base_url(); ?>LoginCheck/logOut"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                </li>
            </ul>
            <!-- /.dropdown-user -->
        </li>
    </ul>
    <!-- /.navbar-top-links -->

    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav in" id="side-menu">

                <li>
                    <a href="<?php echo base_url(); ?>Dashboard"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                </li>

                <li>
                    <a href="#">
                        <i class="fa fa-wrench fa-fw"></i>
                        User Manager
                        <span class="fa arrow"></span>
                    </a>
                    <ul class="nav nav-second-level" aria-expanded="true" style="">
                        <li>
                            <a href="<?php echo base_url(); ?>UserManager">User List</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url(); ?>UserManager/userCreate">User create</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="#">
                        <i class="fa fa-wrench fa-fw"></i>
                        Doctor
                        <span class="fa arrow"></span>
                    </a>

                    <ul class="nav nav-second-level" aria-expanded="true" style="">

                        <li>
                            <a href="<?php echo site_url('DocList') ?>">New Doctor Info Creation</a>
                        </li>

                        <li>
                            <a href="<?php echo site_url('DocList/doctorList') ?>">Doctor List</a>
                        </li>

                    </ul>

                </li>
                <li class="">
                    <a href="#">
                        <i class="fa fa-sitemap fa-fw"></i>
                        Drug Management
                        <span class="fa arrow"></span>
                    </a>
                    <ul class="nav nav-second-level" aria-expanded="true" style="">
                        <li class="">
                            <a href="#">
                                Drug Type
                                <span class="fa arrow"></span>
                            </a>

                            <ul class="nav nav-third-level" aria-expanded="true" style="">
                                <li>
                                    <a href="<?php echo base_url() . 'DrugManagement/drugTypelist' ?>">Drug Type List</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url() . 'DrugManagement/drugTypeCreate' ?>">Create Drug Type </a>
                                </li>
                            </ul>
                        </li>
                        
                         <li class="">
                            <a href="#">
                                Drug Category
                                <span class="fa arrow"></span>
                            </a>

                            <ul class="nav nav-third-level" aria-expanded="true" style="">
                                <li>
                                    <a href="<?php echo base_url() . 'DrugManagement/drugCategoryList' ?>">Drug Category List</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url() . 'DrugManagement/drugCategoryCreate' ?>">Create Drug Category</a>
                                </li>
                            </ul>
                        </li>
                        
                        <li class="">
                            <a href="#">
                                Drug Sub Category
                                <span class="fa arrow"></span>
                            </a>

                            <ul class="nav nav-third-level" aria-expanded="true" style="">
                                <li>
                                    <a href="<?php echo base_url() . 'DrugManagement/drugSubCategoryList' ?>">Sub Category List</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url() . 'DrugManagement/drugSubCategoryCreate' ?>">Create Sub Category</a>
                                </li>
                            </ul>
                        </li>
                        
                        <li class="">
                            <a href="#">
                                Drug Strength
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="nav nav-third-level" aria-expanded="true" style="">
                                <li>
                                    <a href="<?php echo base_url() . 'DrugManagement/drugStrengthList' ?>">Drug Strength List</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url() . 'DrugManagement/drugStrengthCreate' ?>">Create Drug Strength</a>
                                </li>
                            </ul>
                        </li>
                        
                        <li class="">
                            <a href="#">
                                Country
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="nav nav-third-level" aria-expanded="true" style="">
                                <li>
                                    <a href="<?php echo base_url() . 'DrugManagement/drugFromList' ?>">Country List</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url() . 'DrugManagement/drugFromCreate' ?>">Create Country</a>
                                </li>
                            </ul>
                        </li>

                    </ul>
                </li>

        </div>
        <!-- /.sidebar-collapse -->
    </div>
    <!-- /.navbar-static-side -->
</nav>

