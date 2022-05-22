<aside class="main-sidebar">
    <section class="sidebar">
        <ul class="sidebar-menu" data-widget="tree">
            <li><a href="{{ '/' }}"><i class="iconsmind-Dashboard"></i>Dashboard</a></li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-user"></i>
                    <span>User Management</span>
                    <span class="pull-right-container">
                            <i class="fa fa-angle-right pull-right"></i>
                        </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ route('admin.permissions.index') }}"><i class="iconsmind-Arrow-Through"></i>Permissions
                        </a></li>
                    <li><a href="{{ route('admin.roles.index') }}"><i class="iconsmind-Arrow-Through"></i>Roles
                        </a></li>
                    <li><a href="{{ route('admin.users.index') }}"><i class="iconsmind-Arrow-Through"></i>Users
                        </a></li>
                </ul>
            </li>
        </ul>
    </section>
</aside>