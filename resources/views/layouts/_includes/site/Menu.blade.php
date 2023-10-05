<div class="navbar-area">

    <div class="main-responsive-nav">
        <div class="container-fluid container-large">
            <div class="mobile-nav">
                <a href="{{ route('site.home') }}" class="logo"><img src="/site/images/logo2.png" alt="logo" /></a>
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
                            <li><a class="cart-icon" href="cart.html"><i class="flaticon-cart"></i><span>03</span></a>
                            </li>

                            <li>
                                <button type="button" class="default-button" data-toggle="modal" data-target="#exampleModal">
                                    <span>Solicitar Técnico <i
                                        class="flaticon-right-arrow"></i></span>
                                  </button>

                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
