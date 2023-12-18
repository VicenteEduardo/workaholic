<div class="navbar-area">
    <div class="main-responsive-nav">
        <div class="container-fluid container-large">
            <div class="mobile-nav">
                <a href="{{ route('site.home') }}" class="logo"><img width="68" height="30"
                        src="/site/images/logo2.png" alt="logo" /></a>
                <ul class="menu-sidebar menu-small-device">
                    <li><a class="cart-icon" href="cart.html"><i class="flaticon-cart"></i><span>03</span></a></li>
                    <li><button class="popup-button"><i class="flaticon-loupe"></i></button></li>
                    <li><a class="default-button" href="contact.html">Book Now<i class="flaticon-right-arrow"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="main-nav">
        <div class="container-fluid container-large">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="{{ route('site.home') }}">
                    <img width="100" src="/site/images/logo2.png" alt="logo" />
                </a>
                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item ">
                            <a href="#" class="nav-link  active">Home</a>

                        </li>
                        <li class="nav-item">
                            <a href="{{ route('site.services') }}" class="nav-link ">Serviços</a>

                        </li>
                        <li class="nav-item">
                            <a href="{{ route('site.produt') }}" class="nav-link ">Produtos </a>

                        </li>
                        <li class="nav-item">
                            <a href="{{ route('site.agentes') }}" class="nav-link ">Agentes </a>

                        </li>
                        <li class="nav-item">
                            <a href="{{ route('site.news') }}" class="nav-link ">Notícias </a>

                        </li>
                        <li class="nav-item">
                            <a href="{{ route('site.about') }}" class="nav-link ">Sobre Nós </a>

                        </li>
                        <li class="nav-item"><a href="{{ route('site.contact') }}" class="nav-link">Contactos</a></li>
                    </ul>
                    <div class="menu-sidebar">
                        <ul>
                            <li><a class="cart-icon" href="{{ route('cart') }}"><i class="flaticon-cart"></i><span>
                                        @if (session('cart'))
                                        {{ count(session('cart')) }}
                                        @else
                                        @endif
                                    </span></a>
                            </li>

                            <li>
                                <button type="button" class="default-button" data-toggle="modal"
                                    data-target="#exampleModal">
                                    <span>Solicitar Técnico <i class="flaticon-right-arrow"></i></span>
                                </button>

                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Solicitar Técnico</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('site.solicitarTecnico') }}" method="post">
                    @csrf
                    <div class="container">
                        <div class="row">
                            <div class="col-12"> <label for="exampleInputEmail1">Nome Completo</label>
                                <input required name="nome" type="text" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="Digite o seu nome">

                            </div>
                            <div class="col-12"> <label for="exampleInputEmail1">Telefone</label>
                                <input required name="telefone" type="text" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="Digite Seu telefone">

                            </div>
                            <div class="col-12"> <label for="exampleInputEmail1">Morada</label>
                                <input required name="endereco" type="text" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="Digite a Morada">
                            </div>
                        </div>
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                <button type="submit" class="btn btn-primary">Solicitar Técnico</button>
            </div>
        </div>
    </form>
    </div>
</div>
