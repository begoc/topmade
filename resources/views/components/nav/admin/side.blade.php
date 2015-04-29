<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li class="sidebar-search">
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                </div>
                <!-- /input-group -->
            </li>
            <li>
                <a href="{{route('dashboard')}}"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
            </li>
            <!-- /.empresa -->
            <li>
                <a href="{{route('admin.article', 'company')}}"><i class="fa fa-university fa-fw"></i> Empresa</a>
            </li>
            <!-- /.empresa -->
            <li>
                <a href="{{route('admin.article', 'activities')}}"><i class="fa fa-tasks fa-fw"></i> Actividades</a>
            </li>
            <!-- /.actividades -->
            <li>
                <a href="{{route('admin.article', 'clients')}}"><i class="fa fa-users fa-fw"></i> Clientes</a>
            </li>
            <!-- /.clientes -->
            <li>
                <a href="{{route('admin.contact')}}"><i class="fa fa-edit fa-fw"></i> Contacto</a>
            </li>
            <!-- /.Contacto -->
        </ul>
    </div>
</div>