@extends('layouts.merge.site')
@section('titulo', ' Imagens')
@section('content')

    <section class="ud-page-banner">
        <div class="banner-area-wrapper">
            <div class="banner-area text-left">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="banner-content-wrapper">
                                <div class="banner-content">
                                    <h2>Galeria de Imagens</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br>

    <section class="ud-blog-details p-10 py-16">
        <div class="container">
            <div class="row">
                @foreach ($galleries as $item)
                    <div class="col-lg-4 col-md-6 p-3">
                        <div class="ud-single-blog">
                            <div class="ud-blog-image ud-blog-image-single-gallery">
                                <a class="fancybox" href="{!! route('site.gallery.show', urlencode($item->name)) !!}">
                                    <div class="card-img-top img-fluid rounded"
                                        style='background-image:url("/storage/{{ $item->cover }}");background-position:center;background-size:cover;height:200px;'>
                                    </div>

                                </a>

                            </div>
                            <div class="ud-blog-content">
                                <h3 class="ud-blog-title mt-2">
                                    <a href="{!! route('site.gallery.show', urlencode($item->name)) !!}">{{ $item->name }}
                                    </a>
                                </h3>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="col-12">
                <div class="row justify-content-center py-5">
                    <div class="col-lg-4">
                        <h6>{{ $galleries->links() }}</h6>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
