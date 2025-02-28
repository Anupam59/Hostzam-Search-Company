<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <img src="{{asset('Admin/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Admin Hostzam</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{asset('Admin/dist/img/usericon.png')}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ Auth::user()->name }}</a>
            </div>
        </div>


        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                <li class="nav-item">
                    <a href="{{ url('/admin/') }}/dashboard" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>Dashboard</p>
                    </a>
                </li>

                <li class="nav-item menu-close">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Company
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>

                    <ul class="nav nav-treeview">

                        <li class="nav-item">
                            <a href="{{ url('/admin/') }}/company-list" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Company List</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ url('/admin/') }}/company-create" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Company Create</p>
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="nav-item">
                    <a href="{{ url('/admin/') }}/user-list" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>User List</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ url('/admin/') }}/logout" class="nav-link">
                        <i class="nav-icon fas fa-outdent"></i>
                        <p>Logout</p>
                    </a>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
<!-- Main Sidebar Container -->




{{--<li class="nav-item menu-open">--}}
{{--    <a href="#" class="nav-link active">--}}
{{--        <i class="nav-icon fas fa-tachometer-alt"></i>--}}
{{--        <p>--}}
{{--            Site Setup--}}
{{--            <i class="right fas fa-angle-left"></i>--}}
{{--        </p>--}}
{{--    </a>--}}

{{--    <ul class="nav nav-treeview">--}}

{{--        <li class="nav-item">--}}
{{--            <a href="#" class="nav-link active">--}}
{{--                <i class="far fa-circle nav-icon"></i>--}}
{{--                <p>Active Page</p>--}}
{{--            </a>--}}
{{--        </li>--}}

{{--        <li class="nav-item">--}}
{{--            <a href="#" class="nav-link">--}}
{{--                <i class="far fa-circle nav-icon"></i>--}}
{{--                <p>Inactive Page</p>--}}
{{--            </a>--}}
{{--        </li>--}}

{{--    </ul>--}}
{{--</li>--}}
