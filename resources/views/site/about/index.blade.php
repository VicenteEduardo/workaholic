@extends('layouts.merge.site')
@section('titulo', 'Sobre Nós')
@section('content')

    <div class="uni-banner">
        <div class="container-fluid container-large">
            <div class="uni-banner-text-area">
                <h1>
                    Sobre nós</h1>
                <ul>
                    <li><a href="{{ route('site.home') }}">Home</a></li>
                    <li>
                        Sobre nós</li>
                </ul>
            </div>
        </div>
    </div>


    <div class="about ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-text-area pr-20">
                        <div class="default-section-title">
                            <span>
                                Sobre nós</span>
                            <h3>
                                Workaholic SA</h3>
                            <p>Workaholic SA é nome comercial da empresa W. Suntec – Sistemas Automáticos uma
                                empresa voltada ao ramo da tecnologia na área de telecomunicações e automação.
                                Nos dias de hoje tratar dos meios de Tecnologia e informação da sua empresa é cuidar
                                da produtividade do teu negocio, nos apresentamos como a referencia e indicação para que
                                com segurança e eficiência, na manutenção de uma relação de confiança ajudemos a cuidar e
                                contribui para a produtividade do seu negocio.</p>
                            <p>Os principais seguimentos de venda da empresa além das redes retalhistas é o canal
                                online.
                                A workaholic tem apostado num plano de restruturação e expansão com
                                O objectivo de melhorar a forma como chegar ao consumidor. .</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-img-area">
                        <img src="assets/images/about/about1.jpg" alt="image">
                        <div class="about-img-text">
                            <i class="flaticon-badge"></i>
                            <h4>
                                4 anos</h4>
                            <p>
                                de experiências</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="services ptb-100 bg-f9f9f9">
        <div class="container">
            <div class="default-section-title default-section-title-middle">
                <span>
                    Nossos serviços</span>
                <h3>
                    O que oferecemos aos nossos clientes</h3>

            </div>
            <div class="section-content">
                <div class="row justify-content-center">
                    @foreach ($services as $item)
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="service-card">
                                <div class="service-card-img">
                                    <a href="{!! url('/servicos/' . urlencode($item->name)) !!}"><img src="/storage/{{ $item->photo }}"
                                            alt="image"></a>
                                </div>
                                <div class="service-card-text-area">
                                    <i class="flaticon-repairing-service main-icon"></i>
                                    <h4><a href="{!! url('/servicos/' . urlencode($item->name)) !!}"> {{ $item->name }}</a></h4>

                                    <a class="read-more-btn" href="{!! url('/servicos/' . urlencode($item->name)) !!}">Read More <i
                                            class="flaticon-right-arrow"></i></a>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
                <div class="section-footer-button">
                    <a class="default-button default-button-2 mt-30" href="{{ route('site.services') }}"><span>Todos
                            Serviços <i class="flaticon-right-arrow"></i></span></a>
                </div>
            </div>
        </div>
    </div>


    <div class="working-process working-process-1 ptb-100">
        <div class="container">
            <div class="default-section-title default-section-title-middle">
                <span>Nosso processo de reparo</span>
                <h3>
                    Quem somos e como trabalhamos</h3>
                <p> superar com excelência as necessidades dos clientes, oferecendo um serviço de confiança,
                    rigor, transparência e precisão de forma rápida e personalizada, assente em ferramenta e
                    equipamentos certificados e actualizados com a evolução e a exigência do actual mercado.</p>
            </div>
            <div class="section-content">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="working-process-card">
                            <h6>1 passo Diagnóstico</h6>
                            <span class="dot"></span>
                            <h4 Caminhe, entrego e pego</h4>
                                <p>Realizar uma avaliação completa do equipamento ou sistema para identificar o problema
                                    específico e suas causas.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="working-process-card">
                            <h6>2 passo Reparo e Manutenção</h6>
                            <span class="dot"></span>

                            <p>Realizar as devidas correções, trocas de peças defeituosas, configurações ou ajustes
                                necessários para restaurar o funcionamento adequado.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="working-process-card">
                            <h6> 3 Teste e Verificação</h6>
                            <span class="dot"></span>

                            <p>Após o reparo, realizar testes para verificar o funcionamento adequado e configurar o
                                equipamento ou sistema para garantir seu desempenho otimizado..</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="ff-intro ff-intro-1">
        <div class="container">
            <div class="intro-video-area ptb-100">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-md-6 col-sm-12 col-12">
                        <div class="intro-video-text-area">
                            <div class="default-section-title color-title">
                                <h3>
                                    Cuidado rápido e excelente para seus computadores</h3>
                            </div>
                            <a class="default-button mt-30" href="{{ route('site.produt') }}"><span>Nossos Produtos <i
                                        class="flaticon-right-arrow"></i></span></a>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-6 col-sm-12 col-12">
                        <div class="intro-video-play-area pt-30">
                            <a class="video-popup" href="{{ $configuration->youtube }}">
                                <i class="fas fa-play"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="fun-fact-area">
                <div class="row justify-content-center">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                        <div class="fun-fact-card">
                            <i class="flaticon-success"></i>
                            <h2><span class="odometer" data-count="125">00</span>+</h2>
                            <p>Equipamentos Reparados</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                        <div class="fun-fact-card">
                            <i class="flaticon-experience"></i>
                            <h2><span class="odometer" data-count="200">00</span>+</h2>
                            <p>
                                cliente feliz</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                        <div class="fun-fact-card">
                            <i class="flaticon-expert"></i>
                            <h2><span class="odometer" data-count="{{ $agentesCount }}">00</span>+</h2>
                            <p>
                                Equipe Especialistas</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="team ptb-100">
        <div class="container">
            <div class="default-section-title default-section-title-middle">
                <span>Especialistas em Reparos</span>
                <h3>Conheça os membros da nossa equipe de especialistas</h3>

            </div>
            <div class="section-content">
                <div class="row justify-content-center">
                    @foreach ($agentes as $item)
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="team-card">
                                <div class="team-card-img">
                                    <img src="/storage/{{ $item->foto }}" alt="image">
                                </div>
                                <div class="team-card-text">
                                    <h4>{{ $item->name }}</h4>
                                    <p>{{ $item->specification }}</p>
                                    <div class="social-icons">
                                        @if (1 == 0)
                                            <ul>
                                                <li><a href="https://www.facebook.com/" target="_blank"><i
                                                            class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="https://twitter.com/" target="_blank"><i
                                                            class="fab fa-twitter"></i></a></li>
                                                <li><a href="https://www.instagram.com/" target="_blank"><i
                                                            class="fab fa-instagram"></i></a></li>
                                                <li><a href="https://www.pinterest.com/" target="_blank"><i
                                                            class="fab fa-pinterest-p"></i></a></li>
                                            </ul>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach


                </div>
            </div>
        </div>
    </div>



    <div class="testimonials ptb-100">
        <div class="container">
            <div class="default-section-title default-section-title-middle">
                <span>
                    Testemunhos</span>
                <h3>
                    O que nossos clientes dizem</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis,
                    pulvinar dapibus leo.</p>
            </div>
            <div class="section-content">
                <div class="testimonial-slider-area owl-carousel">
                    <div class="testimonial-card">
                        <p>‘’A Workaholic SA foi a minha salvação! Como empreendedor digital, meus computadores são minha
                            principal ferramenta de trabalho. Quando enfrentei problemas com uma impressora crucial para
                            minha produção, entrei em contato com a equipe da Workaholic. Eles foram rápidos, eficientes e
                            resolveram o problema em um piscar de olhos. Agora, sei que posso contar com eles sempre que
                            precisar!’’</p>
                        <div class="testimonial-intro-area">
                            <img src="/site/user.png" alt="image">
                            <div class="testimonial-card-intro-text">
                                <h6>João Santos</h6>
                                <span>Empreendedor Digital</span>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-card">
                        <p>‘’Recomendo a Workaholic SA de olhos fechados! Como gerente de TI, tive o prazer de contar com
                            seus serviços para a montagem de uma rede estruturada em nossa empresa. A equipe foi altamente
                            profissional, configurou nossos servidores com maestria e corrigiu problemas existentes. Eles
                            superaram nossas expectativas e agora somos mais produtivos do que nunca!’’</p>
                        <div class="testimonial-intro-area">
                            <img src="/site/user.png" alt="image">
                            <div class="testimonial-card-intro-text">
                                <h6>Ana Rodrigues</h6>
                                <span>Gerente de TI</span>
                            </div>
                        </div>
                    </div>

                    <div class="testimonial-card">
                        <p>‘’A Workaholic SA é nossa parceira de confiança! Tenho uma loja e precisei instalar um sistema de
                            CCTV para garantir a segurança do local. Os técnicos da Workaholic montaram e configuraram tudo
                            sem causar transtornos. Agora, posso monitorar o estabelecimento remotamente e tenho total
                            tranquilidade. Obrigado, Workaholic!.’’</p>
                        <div class="testimonial-intro-area">
                            <img src="/site/user.png" alt="image">
                            <div class="testimonial-card-intro-text">
                                <h6>Lucas Ferreira</h6>
                                <span>Proprietário de Loja</span>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-card">
                        <p>‘’A Workaholic SA é a melhor escolha para soluções de telecomunicações! Como diretora
                            administrativa, precisávamos de uma central telefônica moderna e eficiente. Eles montaram e
                            configuraram a central VOIP e nos forneceram soluções de vídeo e áudio conferências. Nosso setor
                            de comunicação nunca esteve tão eficiente e produtivo!.’’</p>
                        <div class="testimonial-intro-area">
                            <img src="/site/user.png" alt="image">
                            <div class="testimonial-card-intro-text">
                                <h6>Juliana Almeida</h6>
                                <span>Diretora Administrativa</span>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-card">
                        <p>‘’A Workaholic SA foi nossa resposta para o controle de ponto biométrico! Como coordenador de
                            recursos humanos, busquei uma solução para otimizar o registro de ponto dos funcionários. Eles
                            montaram e configuraram o controle biométrico em nossa empresa, proporcionando mais precisão e
                            agilidade. Estamos muito satisfeitos com o resultado!.’’</p>
                        <div class="testimonial-intro-area">
                            <img src="/site/user.png" alt="image">
                            <div class="testimonial-card-intro-text">
                                <h6>Pedro Lima</h6>
                                <span>Coordenador de Recursos Humanos</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
