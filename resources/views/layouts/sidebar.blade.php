<div class="sidebar">
    <!-- Sidebar user (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="info">
        <a href={{route('profile')}} class="d-block">Frisaranda Diouf</a>
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
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item">
          <a href={{route('dashboard')}} class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>

        <li class="nav-item">
          <a href={{route('profile')}} class="nav-link">
            <i class="nav-icon far fa-image"></i>
            <p>
              Profile
            </p>
          </a>
        </li>

        <li class="nav-item">
          <a href={{route('college')}} class="nav-link">
            <i class="nav-icon fas fa-book"></i>
            <p>
              Pengalaman Kuliah
            </p>
          </a>
        </li>
    </nav>
    <!-- /.sidebar-menu -->
</div>