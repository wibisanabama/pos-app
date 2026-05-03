<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title', 'POS App')</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
  
  <script>
    (function() {
      const state = localStorage.getItem('sidebar-state');
      if (state === 'collapsed') {
        document.documentElement.classList.add('sidebar-collapse');
      }
    })();
  </script>
  
  <style>
    /* Custom brand layout to ensure perfect centering and smooth animation */
    .custom-brand-container {
      display: flex !important;
      justify-content: center !important;
      align-items: center !important;
      white-space: nowrap;
      overflow: hidden;
      height: calc(3.5rem + 0.5px); /* Match standard AdminLTE navbar height */
      padding: 0 !important;
      border-bottom: 1px solid #4b545c !important;
    }
    .custom-brand-img {
      float: none !important;
      margin: 0 !important;
      flex-shrink: 0;
    }
    .custom-brand-text {
      display: inline-block;
      width: 75px; /* Exact width of POS App text */
      margin-left: 0.5rem;
      transition: width 0.3s ease-in-out, margin-left 0.3s ease-in-out, opacity 0.3s ease-in-out;
      overflow: hidden;
    }
    body.sidebar-collapse .custom-brand-text {
      width: 0 !important;
      margin-left: 0 !important;
      opacity: 0 !important;
    }

    /* Custom Active Menu Highlight */
    .nav-pills .nav-link.active, 
    .nav-pills .show > .nav-link {
      background-color: rgba(255, 255, 255, 0.1) !important;
      color: #fff !important;
      box-shadow: none !important;
    }

    /* Darken hamburger icon when sidebar is collapsed */
    body.sidebar-collapse .nav-link[data-widget="pushmenu"] {
      color: rgba(0, 0, 0, 0.9) !important;
    }

    /* Disable hover animation on small-box icons */
    .small-box:hover .icon > i, 
    .small-box:hover .icon > svg {
      transform: scale(1) !important;
      -webkit-transform: scale(1) !important;
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
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/" class="nav-link {{ request()->is('/') ? 'active' : '' }}">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ route('contact') }}" class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ route('about') }}" class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}">About</a>
      </li>
    </ul>
    
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item dropdown user-menu">
        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
          <i class="fas fa-user-circle fa-lg"></i>
          <span class="ml-1 d-none d-md-inline">{{ Auth::user()->name }}</span>
        </a>
        <ul class="dropdown-menu dropdown-menu-right" style="box-shadow: none !important; border: none !important; width: 220px;">
          <!-- User image -->
          <li class="user-header bg-primary" style="box-shadow: none !important; height: 160px; padding: 25px 10px 10px 10px;">
            <i class="fas fa-user-circle fa-4x mb-2"></i>
            <p>
              {{ Auth::user()->name }}
            </p>
          </li>
          <!-- Menu Footer-->
          <li class="user-footer" style="background-color: #f8f9fa; border-top: none;">
            <span style="color: #6c757d; cursor: default;">Profile</span>
            <form action="{{ route('logout') }}" method="POST" class="float-right">
              @csrf
              <button type="submit" style="background: none; border: none; padding: 0; color: #dc3545; cursor: pointer;">Sign out</button>
            </form>
          </li>
        </ul>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary sidebar-no-expand">
    <!-- Brand Logo -->
    <div class="brand-link custom-brand-container" style="cursor: default; pointer-events: none;">
      <img src="https://adminlte.io/themes/v3/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle custom-brand-img" style="opacity: .8;">
      <span class="brand-text font-weight-bold custom-brand-text">POS App</span>
    </div>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="/" class="nav-link {{ request()->is('/') ? 'active' : '' }}">
              <i class="nav-icon fas fa-home"></i>
              <p>Home</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('contact') }}" class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}">
              <i class="nav-icon fas fa-phone-alt"></i>
              <p>Contact</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('about') }}" class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}">
              <i class="nav-icon fas fa-info-circle"></i>
              <p>About</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('orders.index') }}" class="nav-link {{ request()->routeIs('orders.*') ? 'active' : '' }}">
              <i class="nav-icon fas fa-shopping-cart"></i>
              <p>Order</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('customers.index') }}" class="nav-link {{ request()->routeIs('customers.*') ? 'active' : '' }}">
              <i class="nav-icon fas fa-users"></i>
              <p>Customer</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('categories.index') }}" class="nav-link {{ request()->routeIs('categories.*') ? 'active' : '' }}">
              <i class="nav-icon fas fa-tags"></i>
              <p>Category</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('products.index') }}" class="nav-link {{ request()->routeIs('products.*') ? 'active' : '' }}">
              <i class="nav-icon fas fa-box"></i>
              <p>Product</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('reports.daily') }}" class="nav-link {{ request()->routeIs('reports.daily') ? 'active' : '' }}">
              <i class="nav-icon fas fa-clipboard-list"></i>
              <p>Daily Report</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">@yield('page_title', 'Dashboard')</h1>
          </div>
        </div>
      </div>
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        @yield('content')
      </div>
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-inline">
      Anything you want
    </div>
    <strong>Copyright &copy; {{ date('Y') }} <span class="text-primary">POS App</span>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>

<script>
  $(function() {
    // If the pre-render script worked on html, move it to body for AdminLTE
    if ($('html').hasClass('sidebar-collapse')) {
      $('body').addClass('sidebar-collapse');
      $('html').removeClass('sidebar-collapse');
    }

    $(document).on('collapsed.lte.pushmenu', function() {
      localStorage.setItem('sidebar-state', 'collapsed');
    });
    $(document).on('shown.lte.pushmenu', function() {
      localStorage.setItem('sidebar-state', 'expanded');
    });
  });
</script>
</body>
</html>
