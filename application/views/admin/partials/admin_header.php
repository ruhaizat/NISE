<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>NIOSH/N.I.S.E</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url("assets/vendors/bootstrap/dist/css/bootstrap.min.css"); ?>" rel="stylesheet">
	<!--date picker -->
	<link href="<?php echo base_url("assets/datepicker3.css"); ?>" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url("assets/vendors/font-awesome/css/font-awesome.min.css"); ?>" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url("assets/vendors/nprogress/nprogress.css"); ?>" rel="stylesheet">
    <!-- sweet-alert --> 
    <link href="<?php echo base_url("assets/vendors/sweetalert/sweetalert.css"); ?>" rel="stylesheet">
    
    <!-- Custom Theme Style -->
    <link href="<?php echo base_url("assets/build/css/custom.min.css"); ?>" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
             <a href="<?= base_url('Admin/dashboard'); ?>" class="site_title" align=""><img src="<?= base_url('assets/images/latestlogoblue.png'); ?>"></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
                <div class="profile_pic">
                    <img src="<?= base_url('assets/images/pp.svg'); ?>" alt="..." class="img-circle profile_img">
                </div>
                <div class="profile_info">
                    <span>Selamat Datang,</span>
                    <h2><?= $this->session->userdata('nama_pengguna'); ?></h2>
                </div>
                <div class="clearfix"></div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <ul class="nav side-menu">
                  <li><a href="<?= base_url('Admin/dashboard'); ?>"><i class="fa fa-home"></i> Utama </a></li>
                  <li><a href="<?= base_url('Admin/sijilpeserta'); ?>"><i class="fa fa-file"></i>
                  Sijil</a></li>
                 
                  <?php if($this->session->userdata('kod_kumppengguna') != "5" ) : ?>
                  <li>
                    <a><i class="fa fa-user"></i>Peserta<span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                      <li><a href="<?= base_url('Admin/peserta'); ?>"><i class="fa fa-list"></i>Senarai Peserta</a></li>
                      <li><a href="#"><i class="fa fa-folder"></i>Muat Naik Pukal</a></li>
                      </ul>
                 </li>
                  <li><a><i class="fa fa-edit"></i> Pentadbiran<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?= base_url('Admin/pengguna'); ?>"><i class="fa fa-list"></i>Senarai Pengguna</a></li>
                    </ul>
                  </li>
                  <li>
                    <a><i class="fa fa-cog"></i>Selenggara<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="#"><i class="fa fa-user-plus"></i>Jenis Pengguna</a></li>
                      <li><a href="<?php echo base_url() . 'Admin/Kategorisijil';?>"><i class="fa fa-certificate"></i>Kategori Sijil</a></li>
                      <li><a href="<?php echo base_url() . 'Admin/welcome';?>"><i class="fa fa-credit-card"></i>Status Bayaran</a></li>
                      <li><a href="#"><i class="fa fa-file"></i>Status Kehadiran</a></li>
                      <li><a href="#"><i class="fa fa-edit"></i>Status Kelayakan</a></li>
                      <li><a href="#"><i class="fa fa-table"></i>Jenis Kursus</a></li>
                    </ul>
                 </li>
                  <li><a href="<?php echo base_url() . 'Admin/dashboard/logout'; ?>"><i class="fa fa-sign-out"></i> Log Keluar</a></li>
                  </li>
                  
                   
                   
                  <!--<li><a><i class="fa fa-table"></i> Vehicles <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?= base_url('admin/vehicles'); ?>">All Vehicles</a></li>
                      <li><a href="<?= base_url('admin/vehicles/soldlist'); ?>">Sold Vehicles</a></li>
                    </ul>
                  </li>
                </ul>-->
                 <?php endif; ?>
              </div>
            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
                  <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <?= $this->session->userdata('nama_pengguna'); ?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    
                    <li><a href="<?php echo base_url() . 'Admin/profil'; ?>"><i class="fa fa-user pull-right"></i> Profil Saya</a></li>
                     <li><a href="<?php echo base_url() . 'Admin/profile'; ?>"><i class="fa fa-user pull-right"></i> Profile Saya</a></li>
                    <li><a href="<?php echo base_url() . 'Admin/ChangePwd'; ?>"><i class="fa fa-key pull-right"></i> Tukar Kata Laluan</a></li>
                        <li><a href="<?php echo base_url() . 'Admin/dashboard/logout'; ?>"><i class="fa fa-sign-out pull-right"></i> Log Keluar</a></li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->