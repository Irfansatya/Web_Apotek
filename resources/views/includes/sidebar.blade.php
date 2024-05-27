<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" 
id="accordionSidebar">

<!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-shopping-basket"></i>
            </div>
        <div class="sidebar-brand-text mx-3">APOTEK</div>
    </a>

<!-- Divider -->
    <hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="/dashboard">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>

<!-- Divider -->
    <hr class="sidebar-divider">

@if ($showadmin)
    <li class="nav-item active">
        <a class="nav-link" href="{{route ('pelanggan.index') }}">
            <i class="fas fa-fw fa-users"></i>
            <span>Pelanggan</span>
        </a>
    </li>

<!-- Divider -->
    <hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="/apoteker">
            <i class="fas fa-fw fa-gift"></i>
            <span>Apoteker</span>
        </a>
    </li>

<!-- Divider -->
    <hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="/obat">
            <i class="fas fa-fw fa-th-list"></i>
            <span>Obat</span>
        </a>
    </li>

<!-- Divider -->
    <hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="/supplier">
            <i class="fas fa-fw fa-credit-card"></i>
            <span>Supplier</span>
        </a>
    </li>
@endif

<!-- Nav Item - Dashboard -->
    <li class="nav-item active">
    <a class="nav-link" href="/transaksi">
    <i class="fas fa-fw fa-credit-card"></i>
    <span>Transaksi</span></a>
    </li>
    </ul>