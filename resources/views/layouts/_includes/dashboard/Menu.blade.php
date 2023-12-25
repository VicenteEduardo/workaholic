<nav class="topnav navbar navbar-light bg-white">
    <button type="button" class="navbar-toggler text-muted mt-2 p-0 mr-3 collapseSidebar">
        <i class="fe fe-menu navbar-toggler-icon"></i>
    </button>

    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link text-muted my-2" href="#" id="modeSwitcher" data-mode="light">
                <i class="fe fe-sun fe-16"></i>
            </a>
        </li>

        <li class="nav-item dropdown">

            <a class="nav-link dropdown-toggle text-muted pr-0" href="#" id="navbarDropdownMenuLink" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="fe fe-user fe-16"></span>

            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="{{ route('admin.user.show', Auth::User()->id) }}">Perfil</a>
                <a class="dropdown-item" href="{{ route('admin.user.edit', Auth::user()->id) }}">Configurações</a>
                <a class="nav-link text-danger" href="{{ route('logout') }}"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    Terminar a Sessão
                    <i class="fas fa-sign-out-alt"></i>
                </a>
            </div>
        </li>
        <form id="logout-form" action="{{ route('logout') }}" method="POST">
            @csrf
        </form>
    </ul>
</nav>

@if (null !== Auth::user())
<aside class="sidebar-left border-right bg-white shadow" id="leftSidebar" data-simplebar>
    <a href="#" class="btn collapseSidebar toggle-btn d-lg-none text-muted ml-2 mt-3" data-toggle="toggle">
        <i class="fe fe-x"><span class="sr-only"></span></i>
    </a>
    <nav class="vertnav navbar navbar-light">
        <!-- nav bar -->
        <div class="w-100  d-flex">
            <a class="navbar-brand mx-auto  flex-fill text-center" href="{{ route('admin.home') }}">
                <img rel="icon" src="/site/images/logo2.png" style="width:220px; margin:auto" />

            </a>
        </div>

        <ul class="navbar-nav flex-fill w-100 mb-2">
            <p class="text-muted nav-heading mt-4 mb-1">
                <span>Painel</span>
            </p>
            <ul class="navbar-nav flex-fill w-100 mb-2">
                <li class="nav-item w-100">
                    <a class="nav-link" href="{{ route('admin.home') }}">
                        <i class="fe fe-home fe-16"></i>
                        <span class="ml-3 item-text">Painel</span>
                    </a>
                </li>
            </ul>
            <ul class="navbar-nav flex-fill w-100 mb-2">
                <li class="nav-item w-100">
                    <a class="nav-link" href="{{ route('site.home') }}" target="_blank">
                        <i class="fe fe-globe fe-16"></i>
                        <span class="ml-3 item-text">Site</span>
                    </a>
                </li>
            </ul>



            @if ( 'Administrador' == Auth::user()->level)



            {{-- Menu de Actualidade --}}
            <p class="text-muted nav-heading mt-4 mb-1">
                <span> Vendas </span>
            </p>
            {{-- categoria de Actualidade --}}
            <li class="nav-item dropdown">
                <a href="#Vendas" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                    <i class="fe fe-credit-card fe-16"></i>
                    <span class="ml-3 item-text">Vendas</span>
                </a>
                <ul class="collapse list-unstyled pl-4 w-100" id="Vendas">

                    <li class="nav-item">
                        <a class="nav-link pl-3" href="{{ route('admin.vendas.index') }}">
                            <span class="ml-1 item-text">Lista de Vendas</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pl-3" href="{{ route('admin.estatistica.index') }}">
                            <span class="ml-1 item-text">Estatística </span>
                        </a>
                    </li>
                </ul>
            </li>


            {{-- Menu de Actualidade --}}
            <p class="text-muted nav-heading mt-4 mb-1">
                <span> Serviços </span>
            </p>
            {{-- categoria de Actualidade --}}
            <li class="nav-item dropdown">
                <a href="#services" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                    <i class="fe fe-command fe-16"></i>
                    <span class="ml-3 item-text">Serviços</span>
                </a>
                <ul class="collapse list-unstyled pl-4 w-100" id="services">

                    <li class="nav-item">
                        <a class="nav-link pl-3" href="{{ route('admin.servicos.create') }}">
                            <span class="ml-1 item-text">Cadastrar Serviços</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pl-3" href="{{ route('admin.servicos.index') }}">
                            <span class="ml-1 item-text">Listar Serviços</span>
                        </a>
                    </li>
                </ul>
            </li>

            {{-- Menu de Actualidade --}}
            <p class="text-muted nav-heading mt-4 mb-1">
                <span> Produtos </span>
            </p>
            {{-- categoria de Actualidade --}}
            <li class="nav-item dropdown">
                <a href="#product" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                    <i class="fe fe-briefcase fe-16"></i>
                    <span class="ml-3 item-text">Produtos</span>
                </a>
                <ul class="collapse list-unstyled pl-4 w-100" id="product">

                    <li class="nav-item">
                        <a class="nav-link pl-3" href="{{ route('admin.product.create') }}">
                            <span class="ml-1 item-text">Cadastrar Produtos</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pl-3" href="{{ route('admin.product.index') }}">
                            <span class="ml-1 item-text">Listar Produtos</span>
                        </a>
                    </li>
                </ul>
            </li>
            <p class="text-muted nav-heading mt-4 mb-1">
                <span> Agentes </span>
            </p>
            {{-- categoria de Actualidade --}}
            <li class="nav-item dropdown">
                <a href="#Agentes" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                    <i class="fe fe-users fe-16"></i>
                    <span class="ml-3 item-text">Agentes</span>
                </a>
                <ul class="collapse list-unstyled pl-4 w-100" id="Agentes">

                    <li class="nav-item">
                        <a class="nav-link pl-3" href="{{ route('admin.agentes.create') }}">
                            <span class="ml-1 item-text">Cadastrar Agentes</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pl-3" href="{{ route('admin.agentes.index') }}">
                            <span class="ml-1 item-text">Listar Agentes</span>
                        </a>
                    </li>
                </ul>
            </li>

            @endif
            @if ('Analista' == Auth::user()->level || 'Editor' == Auth::user()->level || 'Administrador' ==
            Auth::user()->level)
            {{-- Menu de Actualidade --}}
            <p class="text-muted nav-heading mt-4 mb-1">
                <span> Actualidade </span>
            </p>
            {{-- categoria de Actualidade --}}
            <li class="nav-item dropdown">
                <a href="#news" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                    <i class="fe fe-rss fe-16"></i>
                    <span class="ml-3 item-text">Notícias</span>
                </a>
                <ul class="collapse list-unstyled pl-4 w-100" id="news">

                    <li class="nav-item">
                        <a class="nav-link pl-3" href="{{ route('admin.news.create') }}">
                            <span class="ml-1 item-text">Cadastrar Notícia</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pl-3" href="{{ route('admin.news.index') }}">
                            <span class="ml-1 item-text">Listar Notícias</span>
                        </a>
                    </li>
                </ul>
            </li>




            {{-- categoria de Actualidade --}}
            <li class="nav-item dropdown">
                <a href="#copartner" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                    <i class="fe fe-user-check
                    fe-16"></i>
                    <span class="ml-3 item-text">Paceiros</span>
                </a>
                <ul class="collapse list-unstyled pl-4 w-100" id="copartner">

                    <li class="nav-item">
                        <a class="nav-link pl-3" href="{{ route('admin.copartner.create') }}">
                            <span class="ml-1 item-text">Cadastrar Paceiros</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pl-3" href="{{ route('admin.copartner.index') }}">
                            <span class="ml-1 item-text">Listar Paceiros</span>
                        </a>
                    </li>
                </ul>
            </li>


            @endif

            @if ('Editor' == Auth::user()->level || 'Administrador' == Auth::user()->level)
            {{-- Menu de Multimédia --}}
            <p class="text-muted nav-heading mt-2 mb-1">
                <span>Slideshows </span>
            </p>
            <li class="nav-item dropdown">
                <a href="#slideshow" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                    <i class="fe fe-image fe-16"></i>
                    <span class="ml-3 item-text"> Slideshows</span>
                </a>
                <ul class="collapse list-unstyled pl-4 w-100" id="slideshow">

                    <li class="nav-item">
                        <a class="nav-link pl-3" href="{{ route('admin.slideshow.create') }}">
                            <span class="ml-1 item-text">Cadastrar Slideshow</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pl-3" href="{{ route('admin.slideshow.index') }}">
                            <span class="ml-1 item-text">Listar Slideshows</span>
                        </a>
                    </li>
                </ul>
            </li>


            @endif

            @if ('Administrador' == Auth::user()->level)
            {{-- Menu de Utilizadores --}}
            <p class="text-muted nav-heading mt-2 mb-1">
                <span> Utilizadores</span>
            </p>
            <li class="nav-item dropdown">
                <a href="#user" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                    <i class="fe fe-user-plus fe-16"></i>
                    <span class="ml-3 item-text"> Utilizadores</span>
                </a>
                <ul class="collapse list-unstyled pl-4 w-100" id="user">

                    <li class="nav-item">
                        <a class="nav-link pl-3" href="{{ route('register') }}">
                            <span class="ml-1 item-text">Cadastrar Utilizador</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pl-3" href="{{ route('admin.user.index') }}">
                            <span class="ml-1 item-text">Listar Utilizadores</span>
                        </a>
                    </li>
                </ul>
            </li>

            {{-- Menu de Configurações --}}
            <p class="text-muted nav-heading mt-4 mb-1">
                <span>Configurações</span>
            </p>
            <ul class="navbar-nav flex-fill w-100 mb-2">
                <li class="nav-item w-100">
                    <a class="nav-link" href="{{ route('admin.configuration.show') }}">

                        <i class="fe fe-settings fe-16"></i>
                        <span class="ml-3 item-text">Configurações</span>
                    </a>
                </li>
            </ul>
            @endif

        </ul>

    </nav>
</aside>

@endif
