@extends('layouts.merge.site')
@section('titulo', 'Áudios')
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
                                    <h2>Áudios</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== Banner End ====== -->

    <!-- ====== Audio Start ====== -->
    <section class="ud-blog-details p-10 py-16">
        <div class="container">
            <div class="row">
                @foreach ($audios as $item)
                    <div class="col-lg-4 col-md-6 mt-5">
                        <div class="ud-blog-image">

                            <div class="ud-single-blog">
                                <div class="ud-blog-content">
                                    <audio controls="controls">
                                        <source src="/storage/{{ $item->audio }}" type="audio/mp3" />
                                        seu navegador não suporta HTML5
                                    </audio>
                                    <h3 class="ud-blog-title ">{{ $item->title }}</h3>
                                    <p>{{ $item->description }}</p>
                                </div>

                            </div>

                            </a>
                        </div>

                    </div>
                @endforeach
            </div>
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <h6>{{ $audios->links() }}</h6>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== Audio End ====== -->



@endsection
