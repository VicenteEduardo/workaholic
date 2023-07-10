@extends('layouts.merge.site')
@section('titulo', ' Notícias')
@section('content')

    <div class="uni-banner blog-uni-banner">
        <div class="container-fluid container-large">
            <div class="uni-banner-text-area">
                <h1>Notícias</h1>
                <ul>
                    <li><a href="{{ route('site.home') }}">Home</a></li>
                    <li>Notícias</li>
                </ul>
            </div>
        </div>
    </div>


    <div class="blog pt-70 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row justify-content-center">
                        @foreach ($news as $item)
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="blog-card">
                                    <div class="blog-card-img">
                                        <a href="{!! url('/noticia/' . urlencode($item->title)) !!}"><img src="/storage/{{ $item->path }}"
                                                alt="image"></a>
                                    </div>
                                    <div class="blog-card-text">
                                        <span class="blog-date"><i class="flaticon-deadline"></i>
                                            {{ date('d-m-Y', strtotime($item->date)) }}</span>
                                        <h4><a href="{!! url('/noticia/' . urlencode($item->title)) !!}">{!! mb_substr($item->title, 0, 48, 'UTF-8') !!}</a></h4>

                                        <a class="read-more-btn" href="{!! url('/noticia/' . urlencode($item->title)) !!}">consulte Mais informação <i
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
                                    <b>{{ $news->links() }}</b>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="sidebar-area mt-30 pl-20">

                        <div class="sidebar-card sidebar-categories mt-30">
                            <h3>Outras Notícias</h3>
                            <ul>
                                @foreach ($lasted as $item)
                                    <li><a href="{!! url('/noticia/' . urlencode($item->title)) !!}"><span><i class="flaticon-double-chevron"></i>{!! mb_substr($item->title, 0, 48, 'UTF-8') !!}</span> </a></li>
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
