<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>GRO LOYALTY (GROL) | Dashboard</title>
        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet"
            href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <!-- AOS CSS file  -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assest/website1/css/aos.css">
        <!-- Font Awesome Icons -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assest/website1/css/all.css">
        <!-- Bootstrap CSS file  -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assest/website1/css/bootstrap.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assest/website1/css/adminlte.min.css">
        <!-- Custom Css  -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assest/website1/css/main.css">

        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
        <script src="<?php echo base_url(); ?>assest/website1/js/jquery.min.js"></script>
        
        <script type="text/javascript" src="<?php echo base_url(); ?>assest/parsley.min.js"></script>

        <script src="<?php echo base_url(); ?>assest/toastr.min.js"></script>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assest/toastr.min.css">

        <style type="text/css">
            .parsley-errors-list{
                color: red;
                list-style-type: none;
                padding: 0;
                margin: 0;
            }
        </style>
        <style>
            .stack-box span.fr{
            float: right;
            font-size: 12px !important;
            }
            .stack-box .connect{
            float: right;
            border-radius: 20px;
            padding: 7px 20px;
            background-color: #27B5E7;
            color: #fff !important;
            }
            .stack-box .connect1{
            float: right;
            border-radius: 20px;
            padding: 7px 20px;
            background-color: #5dc2e7;
            color: #fff !important;
            }
            h2{
            color:#27B5E7 !important ;
            }
            .stack-box label{
            font-size: 12px !important;
            font-weight: bold !important;
            }
            p{
            color: rgb(39, 38, 38) !important;
            line-height: 0px !important;
            font-size: 12px !important;
            }
            .mtt-3{
            color: #666 !important;
            margin-top: -12px !important;
            }
            .home-box div {
            line-height: 2 !important;
            }
            .connect:hover{
            color: #27B5E7 !important;
            background-color: #b3e4f5;
            }
            .connect1:hover{
            color: #27B5E7 !important;
            background-color: #b3e4f5;
            }

            .buy_Btn{
                background: #43b5e7;
                color: #fff;
                padding: 3px 11px;
                box-shadow: 0px 0px 5px 0px #00000069;
                border-radius: 25px;
            }

            .nav-link.active{
                background: #43b5e7 !important;
                color: #fff !important;                 
            }
            @media screen and (max-width:375px){
                .buy_Btn{
                    font-size: 12px;
                }
            }
        </style>
    </head>
    <body class="hold-transition sidebar-mini">
        <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="javascript:;" role="button"><i class="fas fa-bars"></i></a>
                </li>

            </ul>
            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="javascript:;" role="button">
                    <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li> -->

                <!-- <li class="nav-item mr-2">
                    <a class="btn connect btn-block buy_Btn nav_item" href="https://pancakeswap.finance/swap" role="button" target="_blank">Buy Now</a>
                </li> -->

                <li class="nav-item mr-2">

                    <button class="btn connect btn-block buy_Btn nav_item enableEthereumButton" >Connect to Wallet</button>

                    <!-- <span class="showAccount"></span> -->
                    <!-- <a class="btn connect btn-block buy_Btn nav_item enableEthereumButton" href="https://pancakeswap.finance/swap" role="button" target="_blank">Connect to Wallet</a> -->
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->
        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
             <?php
                 // $active = $this->uri->segment(3);
                 $last = $this->uri->total_segments();
                 $record_num = $this->uri->segment($last);
                 $record_num1 = $this->uri->segment($last-1);
                 $record_num2 = $this->uri->segment($last-2);
            ?>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <a href="<?php echo site_url('/');?>" style="color: #007bff;">
                            GRO LOYALTY (GROL)
                            <!--<img src="<?php echo base_url(); ?>assest/website1/images/bharat-nft1.png" class="img-circle " alt="User Image">-->
                        </a>
                    </div>
                </div>
                <!-- SidebarSearch Form -->
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
                            with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="https://testnet.bscscan.com/address/0xF884ef0b1cF9f4Ff7a03c1d3Cc77b3f05E65aEc8" class="nav-link" target="_blank">
                                <!-- <img class="nav-icon" src="<?php echo base_url(); ?>assest/website1/images/home.png" alt=""> -->
                                <p>
                                    View BSCSCAN
                                </p>
                            </a>
                        </li>

                         <?php 
                          if($last=='/'){
                              $buy_class= "nav-link active";
                          }else{
                              $buy_class= "nav-link";
                          }
                       ?>

                        <li class="nav-item">
                            <a href="<?php echo site_url('/');?>" class="<?= $buy_class;?>">
                                <!-- <img class="nav-icon" src="<?php echo base_url(); ?>assest/website1/images/home.png" alt=""> -->
                                <p>
                                    Buy
                                </p>
                            </a>
                        </li>

                        <?php 
                          if($record_num=='dashboard'){
                              $staking_class= "nav-link active";
                          }else{
                              $staking_class= "nav-link";
                          }
                       ?>

                        <li class="nav-item">
                            <a href="<?php echo site_url('dashboard');?>" class="<?= $staking_class;?>">
                                <!-- <img class="nav-icon" src="<?php echo base_url(); ?>assest/website1/images/home.png" alt=""> -->
                                <p>
                                    Staking
                                </p>
                            </a>
                        </li>

                       

                        <li class="nav-item">
                            <a href="https://pancakeswap.finance/pools" class="nav-link" target="_blank">
                                <!-- <img class="nav-icon" src="<?php echo base_url(); ?>assest/website1/images/home.png" alt=""> -->
                                <p>
                                    Liquidity Pool
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>
        <!-- Content Wrapper. Contains page content -->

