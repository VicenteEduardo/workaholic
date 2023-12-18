@extends('layouts.merge.site')
@section('titulo', 'Oficial')
@section('content')
    <div class="home-banner">
        <div class="shape">
            <img class="shape1" src="/site/images/banner/banner-2-shape1.png" alt="image">
            <img class="shape2" src="/site/images/banner/banner-2-shape2.png" alt="image">
        </div>
        <div class="home-banner-slider-area owl-carousel">
            <div class="home-banner-single-slide">
                <div class="container-fluid container-large">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="banner-text-area banner-text-area-1">
                                <h6>Serviços de conserto de PC e celular</h6>
                                <h1>
                                    Um serviço de reparo de tecnologia mais inteligente</h1>

                                <a class="default-button" href="{{ route('site.about') }}"><span>
                                        Saber Mais<i class="flaticon-right-arrow"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="home-banner-single-slide hbs-2">
                <div class="container-fluid container-large">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="banner-text-area banner-text-area-1">
                                <h6>
                                    Serviços de conserto de PC e celular</h6>
                                <h1>Os melhores serviços de TI em toda a cidade</h1>

                                <a class="default-button" href="{{ route('site.about') }}"><span>
                                        Saber Mais<i class="flaticon-right-arrow"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="home-banner-single-slide hbs-3">
                <div class="container-fluid container-large">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="banner-text-area banner-text-area-1">
                                <h6>
                                    Serviços de conserto de PC e celular</h6>
                                <h1>Repare suas máquinas com especialistas.</h1>

                                <a class="default-button" href="{{ route('site.about') }}"><span>
                                        Saber Mais<i class="flaticon-right-arrow"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="features pt-70 pb-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="features-card-2">
                        <div class="features-card-header">
                            <span>01</span>
                            <h4>
                                Visão</h4>
                        </div>
                        <p>Tratar de cada detalhe do funcionamento da engenharia por trás de todos os nossos
                            serviços prestados é o nosso objectivo.</p>
                        <a class="read-more-btn" href="{{ route('site.about') }}">
                            consulte Mais informação <i class="flaticon-right-arrow"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="features-card-2">
                        <div class="features-card-header">
                            <span>02</span>
                            <h4>Nossa Missão</h4>
                        </div>
                        <p>É superar com excelência as necessidades dos clientes, oferecendo um serviço de confiança,
                            rigor, transparência e precisão de forma rápida e personalizada.</p>
                        <a class="read-more-btn" href="{{ route('site.about') }}">
                            consulte Mais informação <i class="flaticon-right-arrow"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="features-card-2">
                        <div class="features-card-header">
                            <span>03</span>
                            <h4>Objectivos</h4>
                        </div>
                        <p>Busca ser referência em tecnologia e automação, com excelência no serviço, foco na
                            satisfação do cliente e expansão no mercado online. </p>
                        <a class="read-more-btn" href="{{ route('site.about') }}">
                            consulte Mais informação <i class="flaticon-right-arrow"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="about pb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-img-2">
                        <img src="/site/images/about/about-2.png" alt="image">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-text-area about-text-area-2 pl-20">
                        <div class="default-section-title">
                            <span>Qualidade garantida</span>
                            <h3>Consertamos todos os tipos de computadores e Impressoras</h3>
                            <p>Somos a Workaholic SA, especialistas em tecnologia, telecomunicações e automação. Cuide da
                                produtividade do seu negócio com segurança e eficiência.
                            <ol>
                                <li>Consertamos computadores e impressoras de todos os tipos.</li>
                                <li>Equipe altamente qualificada e experiente.</li>
                                <li>Soluções personalizadas para suas necessidades.</li>
                                <li>Agilidade e compromisso com a excelência.</li>
                                <li>Expansão contínua para melhor atendê-lo.</li>
                            </ol><br>Escolha a Workaholic SA e experimente a mais alta qualidade em serviços. Entre em
                            contato agora e eleve sua produtividade para um novo nível!
                            </p>

                        </div>
                        <a class="default-button default-button-2 mt-30" href="{{ route('site.about') }}"><span>Sobre a
                                nossa empresa <i class="flaticon-right-arrow"></i></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="service ptb-100 bg-f9f9f9">
        <div class="container">
            <div class="default-section-title default-section-title-middle">
                <span>Nossos serviços</span>
                <h3>Nossos serviços</h3>
            </div>
            <div class="section-content">
                <div class="service-slider-area-2 owl-carousel">
                    @foreach ($services as $item)
                        <div class="service-card-2">
                            <div class="service-card-img-2">
                                <a href="{!! url('/servicos/' . urlencode($item->name)) !!}"><img src="/storage/{{ $item->photo }}"
                                        alt="image"></a>
                            </div>
                            <div class="service-card-text-2">
                                <div class="service-card-text-header">
                                    <i class="flaticon-mechanics"></i>
                                    <h4><a href="{!! url('/servicos/' . urlencode($item->name)) !!}">
                                            {{ $item->name }}</a></h4>
                                </div>

                                <a class="read-more-btn" href="{!! url('/servicos/' . urlencode($item->name)) !!}">
                                    consulte Mais informação <i class="flaticon-right-arrow"></i></a>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>


    <div class="working-process ptb-100">
        <div class="container">
            <div class="default-section-title default-section-title-middle">
                <span>
                    Nosso processo de reparo</span>
                <h3>Quem somos e como trabalhamos</h3>
            </div>
            <div class="section-content">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 col-sm-8 col-12">
                        <div class="working-process-card-2">
                            <span>1 </span>
                            <div class="working-process-title-2">
                                <img src="/site/images/icons/setting.png" alt="image">

                            </div>
                            <p>Realizar uma avaliação completa do equipamento ou sistema para identificar o problema
                                específico e suas causas. </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-8 col-12">
                        <div class="working-process-card-2">
                            <span>2 </span>
                            <div class="working-process-title-2">
                                <img src="/site/images/icons/web-maintenance.png" alt="image">

                            </div>
                            <p>Realizar as devidas correções, trocas de peças defeituosas, configurações ou ajustes
                                necessários para restaurar o funcionamento adequado. </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-8 col-12">
                        <div class="working-process-card-2">
                            <span>3 </span>
                            <div class="working-process-title-2">
                                <img src="/site/images/icons/certificate.png" alt="image">

                            </div>
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
                            <a class="default-button mt-30" href="{{ route('site.contact') }}"><span>
                                    Contate-nos <i class="flaticon-right-arrow"></i></span></a>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-6 col-sm-12 col-12">
                        <div class="intro-video-play-area pt-30">
                            <a class="video-popup"
                                href="{{ $configuration->youtube }}"> <i
                                    class="fas fa-play"></i></a>
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
                            <p>
                                Equipamentos Reparados</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                        <div class="fun-fact-card">
                            <i class="flaticon-experience"></i>
                            <h2><span class="odometer" data-count="200">00</span>+</h2>
                            <p>
Cliente Feliz</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                        <div class="fun-fact-card">
                            <i class="flaticon-expert"></i>
                            <h2><span class="odometer" data-count="{{ count($agentes) }}">00</span>+</h2>
                            <p>
                                Equipe Especialistas</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="team bg-f9f9f9 ptb-100">
        <div class="container">
            <div class="default-section-title default-section-title-middle">
                <span>Especialistas em Reparos</span>
                <h3>Conheça os membros da nossa equipe de especialistas</h3>
            </div>
            <div class="section-content">
                <div class="team-slider-area-2 owl-carousel">
                    @foreach ($agentes as $item)
                        <div class="team-card-2">
                            <div class="team-card-img">
                                <img src="/storage/{{ $item->foto }}" alt="image">
                            </div>
                            <div class="team-card-text-2">
                                <div class="team-card-text-intro">
                                    <h4>{{ $item->name }}</h4>
                                    <p>{{ $item->specification }}</p>
                                </div>

                            </div>
                        </div>
                    @endforeach


                </div>
            </div>
        </div>
    </div>






    <div class="blog ptb-100 bg-f9f9f9">
        <div class="container">
            <div class="default-section-title default-section-title-middle">
                <span>
                    Notícias Recentes</span>
                <h3>
                    Deve ler a postagem do blog</h3>
            </div>
            <div class="section-content">
                <div class="row justify-content-center">

                    @foreach ($news as $item)
                        <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                            <div class="blog-card blog-card-2">
                                <div class="blog-card-img">
                                    <a href="{!! url('/noticia/' . urlencode($item->title)) !!}"><img src="/storage/{{ $item->path }}"
                                            alt="image"></a>
                                </div>
                                <div class="blog-card-text">
                                    <span class="blog-date"><i class="flaticon-deadline"></i>
                                        {{ date('d-m-Y', strtotime($item->date)) }}</span>
                                    <h4><a href="{!! url('/noticia/' . urlencode($item->title)) !!}">{!! mb_substr($item->title, 0, 48, 'UTF-8') !!}</a>
                                    </h4>
                                    <a class="read-more-btn" href="{!! url('/noticia/' . urlencode($item->title)) !!}">
                                        consulte Mais informação <i class="flaticon-right-arrow"></i></a>
                                </div>
                            </div>
                        </div>
                    @endforeach


                </div>
            </div>
        </div>
    </div>






@endsection
