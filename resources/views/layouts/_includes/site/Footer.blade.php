<div class="newsletter ptb-100" style="background-color:#6bc9d2;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5">
                <div class="newsletter-text-area">
                    <h3>
                        Junte-se à nossa newsletter</h3>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="newsletter-form-area pt-30">
                    <form class="newsletter-form" data-toggle="validator">
                        <div class="input-group">
                            <input type="email" class="input-newsletter form-control" placeholder="Your Email"
                                name="EMAIL" required autocomplete="off">
                            <button class="default-button" type="submit"><span><i
                                        class="flaticon-paper-plane"></i></span></button>
                        </div>
                    </form>
                    <div id="validator-newsletter" class="form-result"></div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="footer ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="footer-logo-area">
                    <a href="index.html"><img src="/site/images/logo2.png" alt="logo" width="100"></a>
                    <p>Workaholic SA é nome comercial da empresa W. Suntec – Sistemas Automáticos uma
                        empresa voltada ao ramo da tecnologia na área de telecomunicações e automação.</p>
                    <div class="footer-social-area">
                        <ul>
                            <li><a href="https://www.facebook.com/" target="_blank"><i
                                        class="fab fa-facebook-f"></i></a></li>
                            <li><a href="https://twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="https://www.instagram.com/" target="_blank"><i
                                        class="fab fa-instagram"></i></a></li>
                            <li><a href="https://www.pinterest.com/" target="_blank"><i
                                        class="fab fa-pinterest-p"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="footer-links footer-lp footer-services">
                    <h3>
                        Serviços</h3>
                    <ul>
                        @foreach ($services as $item)
                            <li><a href="{!! url('/servicos/' . urlencode($item->name)) !!}">{!! mb_substr($item->name, 0, 25, 'UTF-8') !!}...</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="footer-links footer-lp">
                    <h3>
                        Links Úteis</h3>
                    <ul>
                        <li><a href="{{ route('site.home') }}">Home</a></li>
                        <li><a href="{{ route('site.services') }}l">Serviços</a></li>
                        <li><a href="{{ route('site.produt') }}">Produtos</a></li>
                        <li><a href="{{ route('site.news') }}">Notícias</a></li>
                        <li><a href="{{ route('site.contact') }}">Contactos</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="footer-links footer-contact">
                    <h3>
                        Entrar em contato</h3>
                    <div class="footer-contact-card">
                        <i class="flaticon-phone-call"></i>
                        <h6>Telefone</h6>
                        <p><a href="tel:123456778">{{ $configuration->telefone }}</a></p>
                    </div>
                    <div class="footer-contact-card">
                        <i class="flaticon-email"></i>
                        <h6>Email</h6>
                        <p>{{ $configuration->email }}</p>
                    </div>
                    <div class="footer-contact-card">
                        <i class="flaticon-location"></i>
                        <h6>Localização</h6>
                        <p>{{ $configuration->adress }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="copyright">
    <div class="container">
        <p>Copyright @
            <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
            <script>
                document.write(new Date().getFullYear())
            </script>. <strong></strong> Todos os direitos reservados por <a target="_blank"
                href="#!">VRLIDENTIDADE</a>
        </p>
    </div>
</div>


<div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
</div>


<div class="popup">
    <div class="popup-content">
        <div class="close-btn" id="popup-close">
            <span></span>
            <span></span>
        </div>
        <form>
            <div class="input-group search-box">
                <input type="text" class="form-control" placeholder="Search">
                <button class="btn" type="submit"><i class="fas fa-search"></i></button>
            </div>
        </form>
    </div>
</div>


<script src="/site/js/jquery.min.js"></script>
<script src="/site/js/jquery-ui.min.js"></script>
<script src="/site/js/bootstrap.bundle.min.js"></script>
<script src="/site/js/meanmenu.js"></script>
<script src="/site/js/owl.carousel2.thumbs.js"></script>
<script src="/site/js/owl.carousel.min.js"></script>
<script src="/site/js/magnific-popup.min.js"></script>
<script src="/site/js/TweenMax.js"></script>
<script src="/site/js/nice-select.min.js"></script>
<script src="/site/js/form-validator.min.js"></script>
<script src="/site/js/contact-form-script.js"></script>
<script src="/site/js/ajaxchimp.min.js"></script>
<script src="/site/js/appear.min.js"></script>
<script src="/site/js/swiper-bundle.min.js"></script>
<script src="/site/js/tilt.js"></script>
<script src="/site/js/odometer.min.js"></script>
<script src="/site/js/custom.js"></script>
</body>

<!-- Mirrored from templates.hibootstrap.com/repa/default/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Jun 2023 13:14:41 GMT -->

</html>
