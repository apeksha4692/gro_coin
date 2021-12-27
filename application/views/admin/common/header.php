<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
        <!-- Twitter meta-->
        <meta property="twitter:card" content="summary_large_image">
        <meta property="twitter:site" content="@pratikborsadiya">
        <meta property="twitter:creator" content="@pratikborsadiya">
        <!-- Open Graph Meta-->
        <meta property="og:type" content="website">
        <meta property="og:site_name" content="Vali Admin">
        <meta property="og:title" content="Vali - Free Bootstrap 4 admin theme">
        <meta property="og:url" content="http://pratikborsadiya.in/blog/vali-admin">
        <meta property="og:image" content="http://pratikborsadiya.in/blog/vali-admin/hero-social.png">
        <meta property="og:description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
        <!--<title>Job Portal</title>-->
        <title>GRO LOYALTY (GROL)</title>
        <meta charset="utf-8">
        
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Main CSS-->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assest/admin/css/main.css">
        <!-- Font-icon css-->
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

      <!------------------------ Data table For pdf,export-------------------------------->
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css">

        <script src="<?php echo base_url(); ?>assest/admin/js/jquery-3.3.1.min.js"></script>
        <script src="<?php echo base_url(); ?>assest/admin/toastr.min.js"></script>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assest/admin/toastr.min.css">


        <style type="text/css">
          .parsley-errors-list {
               list-style-type: none;
               padding-left: 0;
               color: #ff0000;
               }
        </style>

          <style type="text/css">
       /* CSS used here will be applied after bootstrap.css */
        .badge-notify{
           background:red;
           position:relative;
           top: -13px;
           left: 28px;
        }

        .badge {
            display: inline-block;
            min-width: 10px;
            padding: 4px 7px;
            font-size: 11px;
            font-weight: 700;
            color: #fff;
            text-align: center;
            white-space: nowrap;
            vertical-align: baseline;
            background-color: #1b2a47;
            border-radius: 10px;
        }
        .head-center {
    text-align: center;
    width: 100%;
    vertical-align: c;
    /* display: flex; */
    vertical-align: middle;
    align-items: center;
    /* justify-items: center; */
    color: #FFF;
    margin-top: 11px;
    text-transform: uppercase;
    font-size: 8px;
}
   </style>
   </head>
  <body class="app sidebar-mini">
    <!-- Navbar-->
    <header class="app-header">
        <a class="app-header__logo" href="<?php echo site_url('admin/dashboard');?>">
            BGRO LOYALTY (GROL)
             <!-- <img src="<?php echo base_url(); ?>uploads/logo_1.jpeg" alt="logo" width="70px">  -->
        </a>
        <a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
        <div class="head-center"> <h2><?php echo $title; ?> </h2></div>
      <!-- Navbar Right Menu-->
        <ul class="app-nav">

          <li class="nav-item dropdown">
      <a class="app-nav__item" href="" id="navbarDropdown_1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <?php echo ucwords($this->session->userdata('site_lang'));?>
      </a>
      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="app-notification__item " data-lang="en" onclick="changeLang('english')">
            <?php echo $this->lang->line('english'); ?>                                 </a>
          <a class="app-notification__item" data-lang="hi" onclick="changeLang('arabic')">
            <?php echo $this->lang->line('arabic'); ?>                                 </a>
      </div>
  </li>


            <!-- <li class="app-search">
              <input class="app-search__input" type="search" placeholder="Search">
              <button class="app-search__button"><i class="fa fa-search"></i></button>
            </li> -->
            <!--Notification Menu-->
            <!-- <li class="dropdown">
                <a class="app-nav__item" href="<?php echo site_url('admin/notification')?>" id="notify">
                 <i class="fa fa-bell-o fa-lg"></i>
                </a>
            </li> -->
        <!-- User Menu-->
        <li class="dropdown">
          <a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
            <ul class="dropdown-menu settings-menu dropdown-menu-right">
                <li>
                    <a class="dropdown-item" href="<?php echo base_url().'admin/profile'?>">
                        <i class="fa fa-user fa-lg"></i> Profile
                    </a>
                </li>
                <li>
                    <a class="dropdown-item" href="<?php echo base_url().'admin/logout'?>">
                        <i class="fa fa-sign-out fa-lg"></i> Logout
                    </a>
                </li>
            </ul>
        </li>
      </ul>
    </header>

    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar">
   <div class="app-sidebar__user">
      <?php if(!empty($getAdminData->profile_image))
       {
         $admin_img = base_url().'uploads/admin/'.$getAdminData->profile_image;
       }else{
         $admin_img =  base_url().'/uploads/default.png';
       }
     ?>
      <img class="app-sidebar__user-avatar" src="<?php echo $admin_img; ?>" alt="User Image" width="50px" height="50px;">
      <div>
         <p class="app-sidebar__user-name"><?php echo $getAdminData->name ?></p>
         <!--<p class="app-sidebar__user-designation"><?php echo $getAdminData->email ?></p>-->
      </div>
   </div>
   <ul class="app-menu">
      <?php
         // $active = $this->uri->segment(3);
         $last = $this->uri->total_segments();
         $record_num = $this->uri->segment($last);
         $record_num1 = $this->uri->segment($last-1);
         $record_num2 = $this->uri->segment($last-2);
         ?>

      <li><a class="app-menu__item" href="https://rinkeby.etherscan.io/address/0xbeac042e394a9e073e6837ae36ae8e4f142b5f64" target="_blank"> <span class="app-menu__label">View Etherscan</span></a></li>

      <li><a <?php if($record_num=='dashboard'){ ?>class="app-menu__item active"<?php }else{ ?>class="app-menu__item "<?php } ?>  href="<?php echo site_url('admin/dashboard');?>"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>


       <style type="text/css">
         li.treeview{
            color: #fff !important;
         }
      </style>

        <li>
          <?php 
              if($record_num=='user_transaction_list'){
                  $user_transaction_list_class= "app-menu__item active";
              }else{
                  $user_transaction_list_class= "app-menu__item";
              }
           ?>
           
          <a class="<?= $user_transaction_list_class;?>"  href="<?php echo site_url('admin/user_transaction_list');?>">
           <i class="app-menu__icon fa fa-user-o"></i>
            <span class="app-menu__label">User Transaction</span>
         </a>
      </li> 
      
      <!--   <li>
          <?php 
              if($record_num=='notification'){
                  $notification_class= "app-menu__item active";
              }else{
                  $notification_class= "app-menu__item";
              }
           ?>
           
          <a class="<?= $notification_class;?>"  href="<?php echo site_url('admin/notification');?>">
           <i class="app-menu__icon fa fa-bell fa-fw"></i>
            <span class="app-menu__label">Notification</span>
         </a>
      </li>  -->
         


         <li <?php if($record_num=='about_us' || $record_num=='privacy_policy' || $record_num=='terms_condition' || $record_num=='contactus_list' || $record_num=='change_banner_status') { ?>class="treeview is-expanded" <?php }else{ ?>class="treeview"<?php } ?>>
         <a class="app-menu__item" data-toggle="treeview">
            <i class="app-menu__icon fa fa-sitemap"></i>
            <span class="app-menu__label">CMS </span>
            <i class="treeview-indicator fa fa-angle-right"></i>
         </a>
         <ul class="treeview-menu">
            <li>
               <a <?php if($record_num=='about_us'){ ?>class="treeview-item active"<?php }else{ ?>class="treeview-item"<?php } ?> href="<?php echo site_url('admin/cms/about_us');?>">
                  About Us
               </a>
            </li>

            <li>
               <a <?php if($record_num=='privacy_policy'){ ?>class="treeview-item active"<?php }else{ ?>class="treeview-item"<?php } ?> href="<?php echo site_url('admin/cms/privacy_policy');?>">
                  Privacy Policy 
               </a>
            </li>

            <li>
               <a <?php if($record_num=='terms_condition'){ ?>class="treeview-item active"<?php }else{ ?>class="treeview-item"<?php } ?> href="<?php echo site_url('admin/cms/terms_condition');?>">
                  Terms and Condition 
               </a>
            </li>

            <li>
               <a <?php if($record_num=='contact_information'){ ?>class="treeview-item active"<?php }else{ ?>class="treeview-item"<?php } ?> href="<?php echo site_url('admin/cms/contact_information');?>">
                  Contact Information
               </a>
            </li>

           <!--  <li>
               <a <?php if($record_num=='change_banner_status'){ ?>class="treeview-item active"<?php }else{ ?>class="treeview-item"<?php } ?> href="<?php echo site_url('admin/cms/change_banner_status');?>">
                  Change Banner Status
               </a>
            </li> -->
            
         </ul>
      </li> 
   </ul>
</aside>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript">
    // $(document).ready(function () {
    //      setInterval(function(){ notification(); }, 1000);
    // });
    
    // function notification() {
    //     $.ajax({
    //         url: '<?php echo site_url("admin/notification_count"); ?>',
    //         type: "POST",
    //         success: function (response) {
    //             // console.log(response);
    //             $('#notify').html('<span class="badge badge-notify">'+response+'</span><i class="fa fa-bell fa-fw"></i> ');
    //         }
    //     });
    // }
    
    function isNumberKey(evt) {
        var charCode = (evt.which) ? evt.which : event.keyCode;
        if ((charCode < 48 || charCode > 57))
            return false;

        return true;
    }
</script>