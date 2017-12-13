<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            @if(\Request::is('database/*') || \Request::is('database'))
                <!-- Upsheet Create -->
                <li class="treeview">
                    <a href="#"><i class='fa fa-address-card'></i> <span>Upsheets</span> <i class="fa fa-angle-left pull-right"></i></a>
                    <ul class="treeview-menu">
                        <li><a href="/database/upsheet">Mostrar</a></li>
                        <li><a href="/database/upsheet/create">Inserir</a></li>
                        {{--<li class="treeview">--}}
                            {{--<a href="#"><i class='fa fa-briefcase'></i> <span>Profissões</span> <i class="fa fa-angle-left pull-right"></i></a>--}}
                            {{--<ul class="treeview-menu">--}}
                                {{--<li><a href="/job/create">Inserir</a></li>--}}
                            {{--</ul>--}}
                        {{--</li>--}}
                        {{--<li class="treeview">--}}
                            {{--<a href="#"><i class='fa fa-building'></i> <span>Agências</span> <i class="fa fa-angle-left pull-right"></i></a>--}}
                            {{--<ul class="treeview-menu">--}}
                                {{--<li><a href="/agency/create">Inserir</a></li>--}}
                            {{--</ul>--}}
                        {{--</li>--}}
                        <li class="treeview">
                            <a href="#"><i class='fa fa-users'></i> <span>Supervisores</span> <i class="fa fa-angle-left pull-right"></i></a>
                            <ul class="treeview-menu">
                                <li><a href="/supervisor/create">Inserir</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#"><i class='fa fa-user'></i> <span>Operadores</span> <i class="fa fa-angle-left pull-right"></i></a>
                            <ul class="treeview-menu">
                                <li><a href="/operator/create">Inserir</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#"><i class='fa fa-handshake-o'></i> <span>Gerentes</span> <i class="fa fa-angle-left pull-right"></i></a>
                            <ul class="treeview-menu">
                                <li><a href="/manager/create">Inserir</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#"><i class='fa fa-money'></i> <span>Vendedores</span> <i class="fa fa-angle-left pull-right"></i></a>
                            <ul class="treeview-menu">
                                <li><a href="/seller/create">Inserir</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <!-- ./Upsheet Create -->
                <li class="treeview">
                    <a href="#"><i class='fa fa-users'></i><span> MEO</span></a>
                </li>
            @endif

            @if(\Request::is('rh') || \Request::is('rh/*'))
                <!-- Upsheet Create -->
                <li class="treeview">
                    <a href="/users/{{Auth::user()->id}}"><i class='fa fa-user'></i><span> Ver a minha ficha</span></a>

                </li>
                <li class="treeview">
                    <a href="/rh/collaborator/create"><i class='fa fa-pencil'></i><span> Inserir Colaborador</span></a>
                </li>
                <li class="treeview">
                    <a href="#"><i class='fa fa-users'></i><span> Lista de Colaboradores</span></a>
                </li>
                <li class="treeview">
                    <a href="#"><i class='fa fa-handshake-o'></i><span> Lista de Vendedores</span></a>
                </li>
                <!-- ./Upsheet Create -->
            @endif

        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
