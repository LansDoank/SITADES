<ul class="navbar-nav bg-klipaa sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="text-white font-semibold flex items-center justify-center" href="index.html">
        <img class="w-12" src="/img/sitamu.png" alt="">
        <p class="text-2xl font-semibold m-0">
            Sitamu
        </p>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="{{request()->is('admin/dashboard') ? 'active' : ''}} nav-item">
        <a class="nav-link" href="/admin/dashboard">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Features
    </div>

    <!-- Nav Item - Pages Collapse Menu -->


    <!-- Nav Item - Tables -->
    <li class="{{request()->is('admin/visitor') ? 'active' : ''}} nav-item">
        <a class="nav-link" href="/admin/visitor">
            <i class="fas fa-fw fa-table"></i>
            <span class="">Data Tamu</span></a>
    </li>
    <li class="{{request()->is('admin/receptionist') ? 'active' : ''}} nav-item">
        <a class="nav-link" href="/admin/receptionist">
            <i class="fas fa-fw fa-table"></i>
            <span class="font-normal text-white">Resepsionis</span></a>
    </li>
    <li class="{{request()->is('admin/master_data') ? 'active' : ''}} nav-item">
        <a class="nav-link" href="/admin/master_data">
            <i class="fas fa-fw fa-table"></i>
            <span class="font-normal text-white">Master Data</span></a>
    </li>
    <li class="{{request()->is('admin/qr_code') ? 'active' : ''}} nav-item">
        <a class="nav-link" href="/admin/qr_code">
            <i class="fas fa-fw fa-table"></i>
            <span class="font-normal text-white">Qr Code</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">
</ul>