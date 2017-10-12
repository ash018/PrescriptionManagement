<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
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
                            <a href="panels-wells.html">Panels and Wells</a>
                        </li>
                        <li>
                            <a href="buttons.html">Buttons</a>
                        </li>
                    </ul>
                </li>
                <!-- Multi Level Drop Down Menu-->

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
                                    <a href="<?php base_url()?>drugTypelist">Drug Type List</a>
                                </li>
                                <li>
                                    <a href="<?php base_url()?>drugTypeCreate">Create Drug Type </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Second Level Item</a>
                        </li>
                        <li class="">
                            <a href="#">
                                Third Level
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="nav nav-third-level" aria-expanded="true" style="">
                                <li>
                                    <a href="#">Third Level Item</a>
                                </li>
                                <li>
                                    <a href="#">Third Level Item</a>
                                </li>
                                <li>
                                    <a href="#">Third Level Item</a>
                                </li>
                                
                            </ul>
                        </li>
                    </ul>
                </li>
                
                

            </ul>
        </div>
        <!-- /.sidebar-collapse -->
    </div>
    <!-- /.navbar-static-side -->
</nav>
