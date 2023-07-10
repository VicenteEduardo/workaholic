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

                                <a href="{{ route('site.gallery') }}">
                                    <h2>Galeria de Imagens</h2>
                                </a>
                                <h3>{{ $gallery->name }}</h3>
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


            @foreach ($gallery->images as $item)

                <div class="col-lg-4 col-md-6  p-3">
                    <div class="ud-single-blog">
                        <div class="ud-blog-image ud-blog-image-single-gallery">
                            <a class="fancybox" href="/storage/{{ $item->path }}" data-fancybox="gallery1">
                                <div class="card-img-top img-fluid rounded"
                                    style='background-image:url("/storage/{{ $item->path }}");background-position:center;background-size:cover;height:200px;'>
                                </div>

                            </a>

                        </div>
                        <div class="ud-blog-content">
                            <h3 class="ud-blog-title">
                                <a href="/storage/{{ $item->cover }}">{{ $item->name }}
                                </a>
                            </h3>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</section>



@endsection
@section('CSSJS')

    {{-- FancyBox to make ImageGallery --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css" />
    {{-- FancyBox to make ImageGallery --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>

@endsection
