<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element">
                    <span>
                        <a class="page-scroll" href="/"><img alt="Logo" class="img-responsive" style="margin-top: -25px" src="/img/log-admin-topnav.png"></a>
                    </span><br>
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="clear">
                            <span class="block m-t-xs">
                                <span>
                                    <center><img alt="image" align="middle" width="30%" class="img-circle img-responsive" src="img/log-admin-topnav-min.png"/></center>
                                <strong class="font-bold">Samuel Escarpato</strong>
                            </span> <span class="text-muted text-xs block">Perfil <b class="caret"></b></span>
                        </span>
                    </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li><a href="#">Logout</a></li>
                    </ul>
                </div>
                <div class="logo-element">
                    <span>
                        <a class="page-scroll" href="/"><img alt="Logo" class="img-responsive" style="margin-left:18px" src="/img/log-admin-topnav-min.png"></a>
                    </span>
                </div>
            </li>
            <li>
                <a href="{{ url('/') }}" title="Ver página"><i class="fa fa-laptop"></i> <span class="nav-label">Ver página</span></a>
            </li>
            <li>
                <a href="{{ url('/admin/minor') }}" title="Ver panel"><i class="fa fa-desktop"></i> <span class="nav-label">Panel</span> </a>
            </li>
            <li>
                <a title="Gestión de contenido"><i class="fa fa-cogs"></i> <span class="nav-label">Gestión de contenido</span><span class="fa arrow"></span> </a>
                <ul class="nav nav-second-level">
                    <li>
                        <a  href="{{ url('/admin/minor') }}">
                            <i class="fa fa-photo"></i> <span class="nav-label">Sliders</span>
                        </a>
                    </li>   
                    <li>
                        <a  href="{{ url('/admin/benefits') }}">
                            <i class="fa fa-book"></i> <span class="nav-label">Beneficios</span>
                        </a>
                    </li>
                    <li>
                        <a  href="{{ url('/admin/minor') }}">
                            <i class="fa fa-folder-open"></i> <span class="nav-label">Productos</span>
                        </a>
                    </li>
                    <li>
                        <a  href="{{ url('/admin/minor') }}">
                            <i class="fa fa-users"></i> <span class="nav-label">Testimonios</span>
                        </a>
                    </li>
                    <li>
                        <a  href="{{ url('/admin/whoares') }}">
                            <i class="fa fa-file-text-o"></i> <span class="nav-label">Quienes somos</span>
                        </a>
                    </li>
                    <li>
                        <a  href="{{ url('/admin/steps') }}">
                            <i class="fa fa-cube"></i> <span class="nav-label">Pasos</span>
                        </a>
                    </li>
                    <li>
                        <a  href="{{ url('/admin/contacts/') }}">
                            <i class="fa fa-address-card"></i> <span class="nav-label">Contácto</span>
                        </a>
                    </li>
                    <li>
                        <a  href="{{ url('/admin/footers/') }}">
                            <i class="fa fa-sticky-note-o"></i> <span class="nav-label">Pie de página</span>
                        </a>
                    </li>
                </ul>
            </li>
            
            
            
            
            <li>
                <a href="{{ route('categories.index') }}" title="Categorias"><i class="fa fa-tags"></i> <span class="nav-label">Categorias</span> </a>
            </li>
            <li>
                <a href="{{ route('tags.index') }}" title="Etiquetas"><i class="fa fa-tags"></i> <span class="nav-label">Etiquetas</span> </a>
            </li>
            <li>
                <a href="{{ url('/admin/products') }}" title="Productos"><i class="fa fa-briefcase"></i> <span class="nav-label">Productos</span> </a>
            </li>
            <li>
                <a href="{{ url('/admin/minor') }}" title="Aliados"><i class="fa fa-user"></i> <span class="nav-label">Aliados</span> </a>
            </li>
            <li>
                <a href="{{ url('/admin/messages') }}" title="Mensajes"><i class="fa fa-envelope"></i> <span class="nav-label">Mensajes</span> </a>
            </li>
            <li>
                <a href="{{ url('/admin/users') }}" title="Usuarios"><i class="fa fa-user-circle"></i> <span class="nav-label">Usuarios</span> </a>
            </li>
        </ul>
    </div>
</nav>
