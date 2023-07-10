@extends('layouts.merge.site')
@section('titulo', 'Notícia')
@section('content')
    <div class="uni-banner blog-uni-banner">
        <div class="container-fluid container-large">
            <div class="uni-banner-text-area">
                <h1>{{ $service->name }}</h1>
                <ul>
                    <li><a href="{{ route('site.services') }}">Serviços</a></li>
                    <li>{{ $service->name }}</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="blog-details ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="details-page-text-area blog-details-text-area">
                        <img class="details-page-main-img" src="/storage/{{ $service->photo }}" alt="image">
                        <span class="blog-date"><i class="flaticon-deadline"></i>
                            Preço :{!! number_format($service->price, 2, ',', '.') . ' ' . 'KZ' !!}</span>
                        <h3>{{ $service->name }}</h3>
                        <p> {!! html_entity_decode($service->description) !!}
                        </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="sidebar-area pt-30 pl-20">

                        <div class="sidebar-card sidebar-categories mt-30">
                            <h3>Outros Serviços</h3>
                            <ul>
                                @foreach ($lasted as $item)
                                    <li><a href="{!! url('/servicos/' . urlencode($item->name)) !!}"><span><i
                                                    class="flaticon-double-chevron"></i>{!! mb_substr($item->name, 0, 48, 'UTF-8') !!}</span> </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="sidebar-card sidebar-download mt-30">
                            <h3>Nosso Folheto</h3>
                            <p>Alienum phaedrum torquatos nec eu vis de peri culis ex nihil is in mei. Mei an pericula
                                hincar tem ei est.</p>
                            <a class="default-button" href="assets/hello.doc"> <span><i class="flaticon-pdf"></i>
                                    Download PDF Now!</span> </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
