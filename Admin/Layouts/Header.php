<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="author" content="">
      <title>Quản Lý Vera</title>
      <!-- Custom fonts for this template-->
      <link href="<?php echo base_url()?>/Public/Admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
      <!-- Page level plugin CSS-->
      <link href="<?php echo base_url()?>/Public/Admin/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
      <!-- Custom styles for this template-->
      <link href="<?php echo base_url()?>/Public/Admin/css/sb-admin.css" rel="stylesheet">
   </head>
   <body id="page-top">
      <nav class="navbar navbar-expand navbar-dark bg-dark static-top">
         <a class="navbar-brand mr-1" href="<?php echo base_url()?>/admin">Quản Lý Vera Shop</a>
         <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
         <i class="fas fa-bars"></i>
         </button>
         <!-- Navbar Search -->
         <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">

         </form>
         <!-- Navbar -->
         <ul class="navbar-nav ml-auto ml-md-0">
            <li class="nav-item dropdown no-arrow mx-1">
               <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               <i class="fas fa-bell fa-fw"></i>
               <span class="badge badge-danger">9+</span>
               </a>
               <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Something else here</a>
               </div>
            </li>
            <li class="nav-item dropdown no-arrow mx-1">
               <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               <i class="fas fa-envelope fa-fw"></i>
               <span class="badge badge-danger">7</span>
               </a>
               <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Something else here</a>
               </div>
            </li>
            <li class="nav-item dropdown no-arrow">
               <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               <i class="fas fa-user-circle fa-fw"></i>
               </a>
               <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                  <a class="dropdown-item" href="#">Settings</a>
                  <a class="dropdown-item" href="#">Activity Log</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
               </div>
            </li>
         </ul>
      </nav>
      <div id="wrapper">
         <!-- Sidebar -->
         <ul class="sidebar navbar-nav">
            <li class="nav-item">
               <a class="nav-link" href="<?php echo base_url()?>/admin">
               <i class="fas fa-fw fa-tachometer-alt"></i>
               <span>Bảng Điều Khiển</span>
               </a>
            </li>

            <li class="nav-item <?php echo isset($open) && $open == 'category' ? 'active' : ''?>">
               <a class="nav-link" href="<?php echo modules("category") ?>">
               <i class="fas fa-fw fa-folder"></i>
               <span>Các Danh Mục</span>
               </a>
            </li>

            <li class="nav-item" <?php echo isset($open) && $open == 'product' ? 'active' : ''?>>
               <a class="nav-link" href="<?php echo modules("product") ?>">
               <i class="fas fa-fw fa-archive"></i>
               <span>Các Sản Phẩm</span></a>
            </li>

            <li class="nav-item">
               <a class="nav-link" href="charts.html">
               <i class="fas fa-fw fa-user"></i>
               <span>Thành Viên</span></a>
            </li>

            <li class="nav-item">
               <a class="nav-link" href="tables.html">
               <i class="fas fa-fw fa-clipboard-check"></i>
               <span>Quản lý đơn hàng</span></a>
            </li>

            <li class="nav-item">
               <a class="nav-link" href="charts.html">
               <i class="fas fa-fw fa-user-secret"></i>
               <span>Admin</span></a>
            </li>
         </ul>
         <div id="content-wrapper">
            <div class="container-fluid">
