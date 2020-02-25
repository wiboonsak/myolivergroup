<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>MYOLIVERGROUP</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
       

        <!-- App css -->
        <link href="<?php echo base_url('assets/css/bootstrap.min.css')?>" rel="stylesheet" type="text/css" />
         <link href="<?php echo base_url('assets/plugins/sweet-alert/sweetalert2.min.css')?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('assets/plugins/switchery/switchery.min.css')?>" rel="stylesheet" />
        <link href="<?php echo base_url('assets/plugins/summernote/summernote-bs4.css') ?>" rel="stylesheet" />
        <link href="<?php echo base_url('assets/css/icons.css')?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('assets/css/style.css')?>" rel="stylesheet" type="text/css" />
       <link href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css" rel="stylesheet" type="text/css" />
        <script src="<?php echo base_url('assets/js/modernizr.min.js')?>"></script>

    </head>

    <body>

        <!-- Navigation Bar-->
        <header id="topnav">
            <div class="topbar-main">
                <div class="container-fluid">

                    <!-- Logo container-->
                    <div class="logo">
                        <!-- Text Logo -->
                        <!-- <a href="<?php echo base_url()?>" class="logo">
                            <span class="logo-small"><i class="mdi mdi-radar"></i></span>
                            <span class="logo-large"><i class="mdi mdi-radar"></i> Highdmin</span>
                        </a> -->
                        <!-- Image Logo -->
                        <a href="<?php echo base_url('control')?>" class="logo">
                            <img src="<?php echo base_url('assets/images/logo_sm.png')?>" alt="" height="26" class="logo-small">
                            <img src="<?php echo base_url('HTML/images/logo-dark.png')?>" alt="" height="40" class="logo-large">
                        </a>

                    </div>
                    <!-- End Logo container-->


                    <div class="menu-extras topbar-custom">

                        <ul class="list-unstyled topbar-right-menu float-right mb-0">

                            <li class="menu-item">
                                <!-- Mobile menu toggle-->
                                <a class="navbar-toggle nav-link">
                                    <div class="lines">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                </a>
                                <!-- End mobile menu toggle-->
                            </li>
                            

                            

                            <?php 
                            $userID = $this->session->userdata('name'); 
                            $user_type = $this->session->userdata('user_type'); 
                             ?>

                            <li class="dropdown notification-list">
                                <a class="nav-link dropdown-toggle waves-effect nav-user" data-toggle="dropdown" href="#" role="button"
                                   aria-haspopup="false" aria-expanded="false">
                                    <img src="<?php echo base_url('assets/images/avatar-1.jpg')?>" alt="user" class="rounded-circle"> <span class="ml-1 pro-user-name"><?php echo $userID?> <i class="mdi mdi-chevron-down"></i> </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                    <!-- item-->
      <div class="dropdown-item noti-title">
                                        <h6 class="text-overflow m-0">Welcome !</h6>
                                    </div>

                                    <!-- item-->
                                    <a href="javascript:void(0);" onClick="cangePassForm()" class="dropdown-item notify-item">
                                        <i class="fi-head"></i> <span>Change Password</span>
                                    </a>
                                    <!-- item-->
                                    <a href="<?php echo base_url('logout')?>" class="dropdown-item notify-item">
                                      <span class="text-danger"><i class="fi-power"></i> <span>Logout</span></span>
                                    </a>

                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- end menu-extras -->

                    <div class="clearfix"></div>

                </div> <!-- end container -->
            </div>
            <!-- end topbar-main -->

            <div class="navbar-custom" style="background-color: #262626">
                <div class="container-fluid">
                    <div id="navigation">
                        <!-- Navigation Menu-->
                        <ul class="navigation-menu">


                            
                            <li class="has-submenu">
                                <a href="#"><i class="icon-briefcase"></i>Oliver News</a>
                                <ul class="submenu">
                                    <li>
                                        <ul>
                                            <li><a href="<?php echo base_url('Control/news_add') ?>">Add News</a></li>
                                            <li><a href="<?php echo base_url('Control/news_list') ?>">List All News</a></li>

                                        </ul>
                                    </li>

                                </ul>
                            </li>
                            <li class="has-submenu">
                                <a href="#"><i class="icon-briefcase"></i>Spa News</a>
                                <ul class="submenu">
                                    <li>
                                        <ul>
                                            <li><a href="<?php echo base_url('Control/spanews_add') ?>">Add News</a></li>
                                            <li><a href="<?php echo base_url('Control/spanews_list') ?>">List All News</a></li>

                                        </ul>
                                    </li>

                                </ul>
                            </li>
                            <li class="has-submenu">
                                <a href="#"></a>
                                
                            </li>
                            

                        </ul>
                        <!-- End navigation menu -->
                    </div> <!-- end #navigation -->
                </div> <!-- end container -->
            </div> <!-- end navbar-custom -->
        </header>
        <!-- End Navigation Bar-->
