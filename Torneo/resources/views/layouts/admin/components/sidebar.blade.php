<div class="left-sidebar-pro">
    <nav id="sidebar" class="">
        <div class="sidebar-header">
            <a href="index.html"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
            <strong><img src="img/logo/logosn.png" alt="" /></strong>
        </div>
        <div class="nalika-profile">
            <div class="profile-dtl">
                <a href="#"><img src="https://www.bocajuniors.com.ar/rebrand/images/copas/copa-sudamericana.png" alt="" /></a>
                <h2>Admin</h2>
            </div>
            <div class="profile-social-dtl">
                <ul class="dtl-social">
                    <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter-square"></i></a></li>
                    <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="left-custom-menu-adp-wrap comment-scrollbar">
            <nav class="sidebar-nav left-sidebar-menu-pro">
                <ul class="metismenu" id="menu1">
                    <li class="active">
                        <a class="has-arrow" href="index.html">
                            <i class="fas fa-futbol"></i>
                            <span class="mini-click-non">Equipos</span>
                        </a>
                        <ul class="submenu-angle" aria-expanded="true">
                            <li><a title="Dashboard v.1" href="{{route('equipo.create')}}"><span class="mini-sub-pro">Agregar equipo</span></a></li>
                            <li><a title="Dashboard v.2" href="{{route('equipo.index')}}"><span class="mini-sub-pro">Editar equipo</span></a></li>

                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="mailbox.html" aria-expanded="false"><i class="fas fa-users"></i> <span class="mini-click-non">Jugadores</span></a>
                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a title="Inbox" href="{{route('jugador.create')}}"><span class="mini-sub-pro">Agregar jugador</span></a></li>
                            <li><a title="View Mail" href="{{route('jugador.index')}}"><span class="mini-sub-pro">Editar jugador</span></a></li>
                        </ul>
                    </li>

                    <li id="removable">
                        <a class="has-arrow" href="#" aria-expanded="false"><i class="fas fa-city"></i> <span class="mini-click-non">Localidades</span></a>
                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a title="Login" href="{{route('localidad.create')}}"><span class="mini-sub-pro">Agregar localidad</span></a></li>
                            <li><a title="Register" href="{{route('localidad.index')}}"><span class="mini-sub-pro">Editar localidad</span></a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </nav>
</div>
