<aside class="main-sidebar elevation-4" style="background-color: #FF7F50;">
  <!-- Brand Logo -->
  <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
        <img alt="Avatar"  class="img-circle elevation-2" src="WhatsApp Image 2023-10-09 at 10.55.10_1b2d920e.jpg">
        </div>
        <div class="info">
        <a href="{{ route('Pemasukan.edit', Auth::user()->id) }}" class="d-block">{{ Auth::user()->name }}</a>
        </div>
      </div>

  <!-- Sidebar -->
  <div class="sidebar mt-2">
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
          <a href="{{ route('dashboard') }}" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="/Pemasukan/create" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
              Form Pemasukan
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="/Pengeluaran/create" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
              Form Pengeluaran
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="/Hutang/create" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
              Form Hutang
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="/Piutang/create" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
              Form Piutang
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="/RencanaBudget/create" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
              Form RencanaBudget
            </p>
          </a>
          <li class="nav-item">
            <a href="/DanaDarurat/create" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Form DanaDarurat
              </p>
            </a>
        </li>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
  <!-- Control sidebar content goes here -->
  <div class="p-3">
    <h5>Title</h5>
    <p>Sidebar content</p>
  </div>
</aside>
<!-- /.control-sidebar -->