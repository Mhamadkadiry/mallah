<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{ asset('Backend/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Apex</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('Backend/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">User</a>
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
          <li class="nav-item menu-open">
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a  href="{{ route('dashboard')}}" class="nav-link ">
                  <i class="nav-icon fas fa-users"></i>
                  <p>
                    Dashboard
                  </p>
                </a>
            </li>
                <li class="nav-item">
                    <a  href="{{ route('users')}}" class="nav-link {{ request()->is('admin/users')  ? 'active' : ''}}">
                      <i class="nav-icon fas fa-users"></i>
                      <p>
                        Users
                      </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('suppliers') }}" class="nav-link">
                      <i class="nav-icon fas fa-user-cog"></i>
                      <p>
                        Suppliers
                      </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('categories') }}" class="nav-link {{ request()->is('panel/categories')  ? 'active' : ''}}">
                      <i class="nav-icon fas fa-box"></i>             
                      <p>
                        Categories
                      </p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('products') }}" class="nav-link {{ request()->is('panel/products') ? 'active' : ''}}">
                      <i class="nav-icon fas fa-shopping-basket"></i>           
                      <p>
                        Products
                      </p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <form method="POST" action="#">
                    @csrf
                      <a href="#" onclick="event.preventDefault(); this.closest('form').submit();" class="nav-link">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>
                          Logout
                        </p>
                      </a>
                    </form>
                  </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>