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
            <li>
                <a href="#"><i class="fa fa-university fa-fw"></i> Empresa<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="#"><i class="fa fa-heart fa-fw"></i> Quienes Sómos</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-qrcode fa-fw"></i> Recursos Humanos</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-archive fa-fw"></i> Calidad y Medioambiente</a>
                    </li>
                </ul>
                <!-- /.empresa -->
            </li>
            <li>
                <a href="#"><i class="fa fa-tasks fa-fw"></i> Actividades<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="#"><i class="fa fa-compass fa-fw"></i> Climatización</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-fire fa-fw"></i> Incendios</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-wrench fa-fw"></i> Mantenimiento</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-flash fa-fw"></i> Electricidad</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-recycle fa-fw"></i> Energía Renovable</a>
                    </li>
                </ul>
                <!-- /.actividades -->
            </li>
            <li>
                <a href="{{route('admin.contact')}}"><i class="fa fa-edit fa-fw"></i> Contacto</a>
            </li>
            <!-- /.Contacto -->
        </ul>
    </div>
</div>