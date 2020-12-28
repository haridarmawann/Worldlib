 <!-- Sidebar -->
 <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
      <div class="sidebar-brand-text mx-3">Nomads Admin</div>
    </a>
    
    <!-- Divider -->
    <hr class="sidebar-divider my-0">
    
    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
      <a class="nav-link" href="{{ route('home')}}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/country">
        <i class="fas fa-fw fa-flag"></i>
        <span>Negara</span></a>
    </li>
    
    <li class="nav-item">
        <a class="nav-link" href="">
        <i class="fas fa-fw fa-building"></i>
        <span>Museum</span></a>
    </li>
    
    <li class="nav-item">
      <a class="nav-link" href="">
        <i class="fas fa-fw fa-dice-d6"></i>
        <span>Item</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('artist.index')}}">
          <i class="fas fa-fw fa-user"></i>
          <span>Artist</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="">
          <i class="fas fa-fw fa-dice-d6"></i>
          <span>Jenis</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="">
          <i class="fas fa-fw fa-dice-d6"></i>
          <span>Article</span></a>
      </li>
    
    <!-- Divider -->
    <hr class="sidebar-divider my-2">
    
    
    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline mt-2">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
    
    </ul>
    <!-- End of Sidebar -->