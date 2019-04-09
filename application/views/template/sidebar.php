<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url(); ?>">
    <div class="sidebar-brand-icon rotate-n-15">
      <i class="fas fa-laptop-code"></i>
    </div>
    <div class="sidebar-brand-text mx-3">APK PENGAJUAN PENSIUN</div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider">
  <!-- Heading -->

  <div class="sidebar-heading">
    Admin
  </div>

  <!-- Nav Item - Dashboard -->
  <li class="nav-item">
    <a class="nav-link" href="<?= base_url('admin/home') ?>">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="<?= base_url('admin/guru') ?>">
    <i class="fas fa-fw fa-users"></i>
    <span>Data Guru</span></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="<?= base_url('admin/jabatan') ?>">
    <i class="fas fa-fw fa-users"></i>
    <span>Data Jabatan</span></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">
    <i class="fas fa-fw fa-list-ul"></i>
    <span>Data Pengajuan Pensiun</span></a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider">

  <!-- Heading -->
  <div class="sidebar-heading">
    Tools
  </div>

  <!-- Nav Item - Pages Collapse Menu -->
  <li class="nav-item">
    <a class="nav-link" href="<?= base_url('admin/user'); ?>">
      <i class="fas fa-fw fa-user"></i>
      <span>Profil</span></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#" data-toggle="modal" data-target="#logoutModal">
      <i class="fas fa-fw fa-sign-out-alt"></i>
      <span>Logout</span></a>
  </li>
  
  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">

  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>

</ul>
<!-- End of Sidebar -->

    