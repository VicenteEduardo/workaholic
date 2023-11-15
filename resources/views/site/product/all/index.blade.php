@extends('layouts.merge.site')
@section('titulo', ' Produtos')
@section('content')

    <div class="uni-banner blog-uni-banner">
        <div class="container-fluid container-large">
            <div class="uni-banner-text-area">
                <h1>Produtos</h1>
                <ul>
                    <li><a href="{{ route('site.produt') }}">Home</a></li>
                    <li>Produtos</li>
                </ul>
            </div>
        </div>
    </div>


    <div class="blog pt-70 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row justify-content-center">
                        @foreach ($products as $item)
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="blog-card">
                                    <div class="blog-card-img">
                                        <a href="{!! url('/produtos/' . urlencode($item->name)) !!}"><img src="/storage/{{ $item->photo }}"
                                                alt="image"></a>
                                    </div>
                                    <div class="blog-card-text">
                                        <span class="blog-date"><i class="flaticon-deadline"></i>
                                            Preço:{!! number_format($item->price, 2, ',', '.') . ' ' . 'KZ' !!}</span>
                                        <h4><a href="{!! url('/produtos/' . urlencode($item->name)) !!}">{!! mb_substr($item->name, 0, 48, 'UTF-8') !!}</a></h4>
                                        <p class="btn-holder"><a href="{{ route('add.to.cart', $item->id) }}" class="btn btn-warning btn-block text-center" role="button">Adcionar ao Carrinho</a> </p>
                                        <a class="read-more-btn" href="{!! url('/produtos/' . urlencode($item->name)) !!}">consulte Mais informação <i
                                                class="flaticon-right-arrow"></i></a>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <div class="paginations mt-30">
                        <div class="col-12">
                            <div class="row justify-content-center">
                                <div class="col-lg-4 py-5">
                                    <b>{{ $products->links() }}</b>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="sidebar-area mt-30 pl-20">

                        <div class="sidebar-card sidebar-categories mt-30">
                            <h3>Outros Produtos</h3>
                            <ul>
                                @foreach ($lasted as $item)
                                    <li><a href="{!! url('/produtos/' . urlencode($item->name)) !!}"><span><i
                                                    class="flaticon-double-chevron"></i>{!! mb_substr($item->name, 0, 48, 'UTF-8') !!}</span> </a>
                                    </li>
                                @endforeach

                            </ul>
                        </div>
                        <div class="sidebar-card sidebar-download mt-30">
                            <h3>Solicitar Produto</h3>
                            <p>Na Workaholic SA, nossa paixão é impulsionar o sucesso do seu negócio por meio de soluções
                                tecnológicas de ponta. Simplificamos sua jornada para o topo, oferecendo qualidade e
                                eficiência incomparáveis. Não perca mais tempo. Converse conosco agora para transformar sua
                                empresa e alcançar o sucesso que você merece. Sua trajetória rumo ao êxito começa aqui! .
                            </p>


                            <a class="default-button" href="{{ $configuration->telefone }}"> <span><i
                                        class="fas fa-phone"></i>
                                    Ligue para nós:{{ $configuration->telefone }}</span> </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
