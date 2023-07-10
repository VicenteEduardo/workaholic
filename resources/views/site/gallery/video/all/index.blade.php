@extends('layouts.merge.site')
@section('titulo', ' Vídeos')
@section('content')

    <!-- ====== Banner Start ====== -->
    <section class="ud-page-banner">
        <div class="banner-area-wrapper">
            <div class="banner-area text-left">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="banner-content-wrapper">
                                <div class="banner-content">
                                    <h2>Galeria de Vídeos</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== Banner End ====== -->

    <br><br>
    <section class="ud-blog-details p-10 py-16">

        <div class="container">

            <div class="row">
                @foreach ($videos as $item)
                    <div class="col-lg-4 col-md-6 p-3">
                        <div class="ud-single-blog">
                            <iframe class="img-responsive img-center" width="auto" height="200" src="{{ $item->link }}"
                                frameborder="0"
                                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>

                            <div class="ud-blog-content">
                                <h5 class="ud-blog-title">{{ $item->title }}</h5>
                                <p class="ud-blog-desc">
                                    {{ $item->description }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <h6>{{ $videos->links() }}</h6>
                </div>
            </div>
        </div>
    </section>

@endsection
