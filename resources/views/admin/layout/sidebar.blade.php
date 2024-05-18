<style>
    .main-sidebar {
    background-color: black;

.nav-sidebar .nav-item:hover {
    background-color: #333;
}


.nav-sidebar .nav-item:hover a {
    color: #fff;
}

}
</style>

<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        {{-- <img src="{{asset('admin-assets/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> --}}
        <span class="brand-text font-weight-bold ml-5 ">ADMIN PANEL</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                    with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="/admin/dashboard#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                {{-- <li class="nav-item">
                    <a href="categories.html" class="nav-link">
                        <i class="nav-icon fas fa-file-alt"></i>
                        <p>Category</p>
                    </a>
                </li> --}}
                <li class="nav-item">
                    <a href="/admin/tours" class="nav-link">
                        <i class="fas fa-map-marker-alt" style="margin-right: 16px;"></i>
                        <p>Tours</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="/admin/products" class="nav-link">
                        <i class="nav-icon fas fa-tag"></i>
                        <p>Products</p>

                    </a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <!-- <i class="nav-icon fas fa-tag"></i> -->
                        <i class="fas fa-truck nav-icon"></i>
                        <p>Shipping</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/orders/show" class="nav-link">
                        <i class="nav-icon fas fa-shopping-bag"></i>
                        <p>Orders</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="users.html" class="nav-link">
                        <i class="nav-icon  fas fa-users"></i>
                        <p>Users</p>
                    </a>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
 </aside>
