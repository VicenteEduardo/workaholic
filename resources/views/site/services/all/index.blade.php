@extends('layouts.merge.site')
@section('titulo', ' Serviços')
@section('content')

    <div class="uni-banner blog-uni-banner">
        <div class="container-fluid container-large">
            <div class="uni-banner-text-area">
                <h1>Serviços</h1>
                <ul>
                    <li><a href="{{ route('site.services') }}">Home</a></li>
                    <li>Serviços</li>
                </ul>
            </div>
        </div>
    </div>


    <div class="blog pt-70 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row justify-content-center">
                        @foreach ($services as $item)
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="blog-card">
                                    <div class="blog-card-img">
                                        <a href="{!! url('/servicos/' . urlencode($item->name)) !!}"><img src="/storage/{{ $item->photo }}"
                                                alt="image"></a>
                                    </div>
                                    <div class="blog-card-text">
                                        <span class="blog-date"><i class="flaticon-deadline"></i>
                                          Preço:{!! number_format($item->price, 2, ',', '.') . ' ' . 'KZ' !!}</span>
                                        <h4><a href="{!! url('/servicos/' . urlencode($item->name)) !!}">{!! mb_substr($item->name, 0, 48, 'UTF-8') !!}</a></h4>

                                        <a class="read-more-btn" href="{!! url('/servicos/' . urlencode($item->name)) !!}">consulte Mais informação <i
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
                                    <b>{{ $services->links() }}</b>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="sidebar-area mt-30 pl-20">

                        <div class="sidebar-card sidebar-categories mt-30">
                            <h3>Outros Serviços</h3>
                            <ul>
                                @foreach ($lasted as $item)
                                    <li><a href="{!! url('/servicos/' . urlencode($item->name)) !!}"><span><i class="flaticon-double-chevron"></i>{!! mb_substr($item->name, 0, 48, 'UTF-8') !!}</span> </a></li>
                                @endforeach

                            </ul>
                        </div>
                        <div class="sidebar-card sidebar-download mt-30">
                            <h3>Nosso Folheto</h3>
                            <p>Alienum phaedrum torquatos nec eu vis de peri culis ex nihil is in mei. Mei an pericula
                                hincar tem ei est.</p>
                            <a class="default-button" href="/site/hello.doc"> <span><i class="flaticon-pdf"></i>
                                    Download PDF Now!</span> </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
