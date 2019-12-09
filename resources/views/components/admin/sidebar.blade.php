<aside class="main-sidebar sidebar-light-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <span class="brand-text font-weight-light">{{ config('app.name', 'Hoaia') }}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('vendor/adminlte/dist/img/user2-160x160.jpg') }}"
                     class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Alexander Pierce</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{ route('admin.root') }}"
                       class="nav-link {{ ($slot == 'dashboard') ? 'active': '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>

                <li class="nav-item has-treeview">
                    <a href="#"
                       class="nav-link {{ ($slot == 'forest') ? 'active': '' }}">
                        <i class="nav-icon fas fa-air-freshener"></i>
                        <p>
                            Hutan
                        </p>
                    </a>
                </li>

                <li class="nav-item has-treeview">
                    <a href="{{ route('admin.donation') }}"
                       class="nav-link {{ ($slot == 'donation') ? 'active': '' }}">
                        <i class="nav-icon fas fa-archive"></i>
                        <p>
                            Donasi
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#"
                       class="nav-link {{ ($slot == 'message') ? 'active': '' }}">
                        <i class="nav-icon far fa-envelope"></i>
                        <p>Pesan</p>
                    </a>
                </li>

                <li class="nav-header">Konfirmasi</li>
                <li class="nav-item">
                    <a href="#"
                       class="nav-link {{ ($slot == 'volunteer') ? 'active': '' }}">
                        <i class="nav-icon fas fa-user-alt"></i>
                        <p>Volunteer</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#"
                       class="nav-link {{ ($slot == 'pay-donation') ? 'active': '' }}">
                        <i class="nav-icon fas fa-money-bill-alt"></i>
                        <p>Sumbangan</p>
                    </a>
                </li>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
