<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <base href="<?php if (isset($BASE_URL)) echo $BASE_URL ?>">
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="description" content="Sleek Dashboard - Free Bootstrap 4 Admin Dashboard Template and UI Kit. It is very powerful bootstrap admin dashboard, which allows you to build products like admin panels, content management systems and CRMs etc." />

  <title>Sleek - Admin Dashboard Template</title>

  <!-- GOOGLE FONTS -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500|Poppins:400,500,600,700|Roboto:400,500" rel="stylesheet" />
  <!-- <link href="assets/plugins/mdi/css/materialdesignicons.min.css" rel="stylesheet" /> -->

  <!-- PLUGINS CSS STYLE -->
  <link href="assets/plugins/nprogress/nprogress.css" rel="stylesheet" />
  <link href="assets/plugins/mdi/css/materialdesignicons.min.css" rel="stylesheet" />

  <!-- No Extra plugin used -->

  <link href="assets/plugins/jvectormap/jquery-jvectormap-2.0.3.css" rel="stylesheet" />

  <link href="assets/plugins/daterangepicker/daterangepicker.css" rel="stylesheet" />
  <link href="assets/plugins/data-tables/datatables.bootstrap4.min.css" rel="stylesheet">

  <link href="assets/plugins/toastr/toastr.min.css" rel="stylesheet" />

  <link href="assets/plugins/data-tables/responsive.datatables.min.css" rel="stylesheet" />
  <!-- SLEEK CSS -->
  <link id="sleek-css" rel="stylesheet" href="assets/css/sleek.css" />

  <!-- FAVICON -->
  <link href="assets/img/favicon.png" rel="shortcut icon" />

  <!--
    HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries
  -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  <script src="assets/plugins/nprogress/nprogress.js"></script>
</head>

<body class="header-fixed sidebar-fixed sidebar-dark header-light" id="body">
  <script>
    NProgress.configure({
      showSpinner: false
    });
    NProgress.start();
  </script>

  <div id="toaster"></div>

  <div class="wrapper">
    <!-- Github Link -->
    <a href="https://github.com/tafcoder/sleek-dashboard" target="_blank" class="github-link">
      <svg width="70" height="70" viewBox="0 0 250 250" aria-hidden="true">
        <defs>
          <linearGradient id="grad1" x1="0%" y1="75%" x2="100%" y2="0%">
            <stop offset="0%" style="stop-color: #896def; stop-opacity: 1" />
            <stop offset="100%" style="stop-color: #482271; stop-opacity: 1" />
          </linearGradient>
        </defs>
        <path d="M 0,0 L115,115 L115,115 L142,142 L250,250 L250,0 Z" fill="url(#grad1)"></path>
      </svg>
      <i class="mdi mdi-github-circle"></i>
    </a>

    <!--
          ====================================
          ——— LEFT SIDEBAR WITH FOOTER
          =====================================
        -->
    <aside class="left-sidebar bg-sidebar">
      <div id="sidebar" class="sidebar">
        <!-- Aplication Brand -->
        <div class="app-brand">
          <a href="dashboard.php" title="Sleek Dashboard">
            <svg class="brand-icon" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid" width="30" height="33" viewBox="0 0 30 33">
              <g fill="none" fill-rule="evenodd">
                <path class="logo-fill-blue" fill="#7DBCFF" d="M0 4v25l8 4V0zM22 4v25l8 4V0z" />
                <path class="logo-fill-white" fill="#FFF" d="M11 4v25l8 4V0z" />
              </g>
            </svg>
            <span class="brand-name text-truncate">Sleek Dashboard</span>
          </a>
        </div>
        <!-- begin sidebar scrollbar -->
        <div class="sidebar-scrollbar">
          <!-- sidebar menu -->
          <ul class="nav sidebar-inner" id="sidebar-menu">
            <li class="active">
              <a class="sidenav-item-link" href="dashboard.php" data-toggle="collapse" data-target="#dashboard" aria-expanded="false" aria-controls="dashboard">
                <i class="mdi mdi-view-dashboard-outline"></i>
                <span class="nav-text">Dashboard</span>
              </a>
            </li>


            <li class="has-sub">
              <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#users" aria-expanded="false" aria-controls="users">
                <i class="mdi mdi-account-box-outline"></i>
                <span class="nav-text">Usuários</span> <b class="caret"></b>
              </a>
              <ul class="collapse" id="users" data-parent="#sidebar-menu">
                <div class="sub-menu">
                  <li>
                    <a class="sidenav-item-link" href="users/">
                      <span class="nav-text">Lista</span>
                    </a>
                  </li>

                  <li>
                    <a class="sidenav-item-link" href="users/add.php">
                      <span class="nav-text">Registrar</span>
                    </a>
                  </li>
                </div>
              </ul>
            </li>

            <li class="has-sub">
              <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#products" aria-expanded="false" aria-controls="products">
                <i class="mdi mdi-cart-outline"></i>
                <span class="nav-text">Produtos</span> <b class="caret"></b>
              </a>
              <ul class="collapse" id="products" data-parent="#sidebar-menu">
                <div class="sub-menu">
                  <li>
                    <a class="sidenav-item-link" href="products/">
                      <span class="nav-text">Lista</span>
                    </a>
                  </li>

                  <li>
                    <a class="sidenav-item-link" href="products/add.php">
                      <span class="nav-text">Registrar</span>
                    </a>
                  </li>
                </div>
              </ul>
            </li>
          </ul>
        </div>


      </div>
    </aside>

    <div class="page-wrapper">
      <!-- Header -->
      <header class="main-header" id="header">
        <nav class="navbar navbar-static-top navbar-expand-lg">
          <!-- Sidebar toggle button -->
          <button id="sidebar-toggler" class="sidebar-toggle">
            <span class="sr-only">Toggle navigation</span>
          </button>
          <!-- search form -->
          <div class="search-form d-none d-lg-inline-block">
            <div class="input-group">
              <button type="button" name="search" id="search-btn" class="btn btn-flat">
                <i class="mdi mdi-magnify"></i>
              </button>
              <input type="text" name="query" id="search-input" class="form-control" placeholder="'button', 'chart' etc." autofocus autocomplete="off" />
            </div>
            <div id="search-results-container">
              <ul id="search-results"></ul>
            </div>
          </div>

          <div class="navbar-right">
            <ul class="nav navbar-nav">
              <li class="dropdown notifications-menu">
                <button class="dropdown-toggle" data-toggle="dropdown">
                  <i class="mdi mdi-bell-outline"></i>
                </button>
                <ul class="dropdown-menu dropdown-menu-right">
                  <li class="dropdown-header">You have 5 notifications</li>
                  <li>
                    <a href="#">
                      <i class="mdi mdi-account-plus"></i> New user registered
                      <span class="font-size-12 d-inline-block float-right"><i class="mdi mdi-clock-outline"></i> 10 AM</span>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="mdi mdi-account-remove"></i> User deleted
                      <span class="font-size-12 d-inline-block float-right"><i class="mdi mdi-clock-outline"></i> 07 AM</span>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="mdi mdi-chart-areaspline"></i> Sales report is
                      ready
                      <span class="font-size-12 d-inline-block float-right"><i class="mdi mdi-clock-outline"></i> 12 PM</span>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="mdi mdi-account-supervisor"></i> New client
                      <span class="font-size-12 d-inline-block float-right"><i class="mdi mdi-clock-outline"></i> 10 AM</span>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="mdi mdi-server-network-off"></i> Server
                      overloaded
                      <span class="font-size-12 d-inline-block float-right"><i class="mdi mdi-clock-outline"></i> 05 AM</span>
                    </a>
                  </li>
                  <li class="dropdown-footer">
                    <a class="text-center" href="#"> View All </a>
                  </li>
                </ul>
              </li>
              <li class="right-sidebar-in right-sidebar-2-menu">
                <i class="mdi mdi-settings mdi-spin"></i>
              </li>
              <!-- User Account -->
              <li class="dropdown user-menu">
                <button href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                  <img src="assets/img/user/user.png" class="user-image" alt="User Image" />
                  <span class="d-none d-lg-inline-block">Abdus Salam</span>
                </button>
                <ul class="dropdown-menu dropdown-menu-right">
                  <!-- User image -->
                  <li class="dropdown-header">
                    <img src="assets/img/user/user.png" class="img-circle" alt="User Image" />
                    <div class="d-inline-block">
                      Abdus Salam
                      <small class="pt-1">iamabdus@gmail.com</small>
                    </div>
                  </li>

                  <li>
                    <a href="#">
                      <i class="mdi mdi-account"></i> My Profile
                    </a>
                  </li>
                  <li>
                    <a href="#"> <i class="mdi mdi-email"></i> Message </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="mdi mdi-diamond-stone"></i> Projects
                    </a>
                  </li>
                  <li class="right-sidebar-in">
                    <a href="#">
                      <i class="mdi mdi-settings"></i> Setting
                    </a>
                  </li>

                  <li class="dropdown-footer">
                    <a href="index.php">
                      <i class="mdi mdi-logout"></i> Log Out
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <div class="content-wrapper">