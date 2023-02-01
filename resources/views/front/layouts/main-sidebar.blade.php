 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="{{asset('front')}}/assetss/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Yammy</span>
    </a>
    <!-- Sidebar -->

    <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">

      <div class="info">
        <a href="#" class="d-block">{{Auth::user()->name}}</a>
      </div>
    </div>

    <!-- SidebarSearch Form -->
    <div class="form-inline">
      <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-sidebar">
            <i class="fas fa-search fa-fw"></i>
          </button>
        </div>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview"" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item menu-open">
          <a href="{{url('/dashboard')}}" class="nav-link active">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>

        <li class="nav-item">
          <a href="{{url('/')}}" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>Yammy Website</p>
          </a>
        </li>
        <span style="font-size:18px;color:rgb(0, 38, 255);">Main Categorie</span>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-book"></i>
            <p>
              Pages
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{url('/order')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Order</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{url('/addgallary')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>New Photo Gallary</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{url('/newchief')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>New Chief</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{url('/message')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Message</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{url('/addmenu')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Add menu</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{url('/user')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Users</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-header">LABELS</li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon far fa-circle text-danger"></i>
            <p class="text">Important</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon far fa-circle text-warning"></i>
            <p>Warning</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon far fa-circle text-info"></i>
            <p>Informational</p>
          </a>
        </li>
      </ul>

    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
