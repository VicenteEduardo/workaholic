@extends('layouts.merge.site')
@section('titulo', 'Pesquisar')
@section('content')

    <!-- Blog Start -->
    <div class="blog-area pt-50">
        <div class="container">
            <div class="row">

                <div class="col-lg-12">


                    <form class="row" action="{{ route('site.search.find') }}">
                        @csrf

                        <input type="text" id="rcorners2" placeholder="Digite sua pesquisa..."
                            value="{{ isset($search) ? $search : '' }}" name="search" required class="form-control py-2">

                        <button class="btn btn-dark" id="buttonbtn" type="submit"> <svg xmlns="http://www.w3.org/2000/svg"
                                width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                <path
                                    d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                            </svg></i></button>

                    </form>
                    @if ($errors->any())
                        <small class="mt-1 mb-4 text-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </small>
                    @endif
                </div>


                <div class="col-lg-12 my-5">
                    <div class="row">
                        {{-- news --}}
                        @isset($news)
                            @foreach ($news as $item)
                                <div class="col-12 my-3">
                                    <a class="text-dark" href="{!! url('/noticia/' . urlencode($item->title)) !!}">
                                        <b>{{ $item->title }}</b class="mb-2"> <br>
                                        <small>{!! html_entity_decode(mb_substr($item->body, 0, 250, 'UTF-8')) !!}...</small>
                                    </a>
                                    <br>
                                    <a href="{{ route('site.news') }}"><span class="badge bg-dark mt-2">Notícias</span></a>

                                    <hr class="pt-0">
                                </div>
                            @endforeach
                        @endisset



                        {{-- events --}}
                        @isset($events)
                            @foreach ($events as $item)
                                <div class="col-12 my-3">
                                    <a class="text-dark" href="{!! url('/evento/' . urlencode($item->title)) !!}">
                                        <b>{{ $item->title }}</b> <br>
                                        <small>{!! html_entity_decode(mb_substr($item->body, 0, 250, 'UTF-8')) !!}...</small>
                                    </a>
                                    <br>
                                    <a href="{{ route('site.event') }}"><span class="badge bg-dark mt-2">Eventos</span></a>

                                    <hr class="pt-0">
                                </div>
                            @endforeach
                        @endisset
                        {{-- events --}}




                        {{-- definitions --}}
                        @isset($definitions)
                            @foreach ($definitions as $item)
                                <div class="col-12 my-3">
                                    <a class="text-dark" href="{{ route('site.definition') }}">
                                        <b>{{ $item->title }}</b> <br>
                                        <small>{!! html_entity_decode(mb_substr($item->definition, 0, 250, 'UTF-8')) !!}...</small>
                                    </a>
                                    <br>
                                    <a href="{{ route('site.definition') }}"><span class="badge bg-dark mt-2">Breve Historial
                                            da ReMA</span></a>

                                    <hr class="pt-0">
                                </div>
                            @endforeach
                        @endisset
                        {{-- definitions --}}





                        {{-- MediaLibrarie --}}
                        @isset($mediaLibraries)
                            @foreach ($mediaLibraries as $item)
                                <div class="col-12 my-3">
                                    <a class="text-dark" href="{!! url('/mediatecas/' . urlencode($item->provinces)) !!}">
                                        <b>{{ $item->provinces }}</b>
                                    </a>
                                    <br>
                                    <a href="{{ route('site.mediaLibrarires') }}"><span
                                            class="badge bg-dark mt-2">Mediatecas</span></a>
                                    <hr class="pt-0">
                                </div>
                            @endforeach
                        @endisset
                        {{-- events --}}




                        @isset($annonces)
                            @foreach ($annonces as $item)
                                <div class="col-12 my-3">
                                    <a class="text-dark" href="{!! url('/anuncios/' . urlencode($item->title)) !!}">
                                        <b>{{ $item->title }}</b> <br>
                                        <small>{!! html_entity_decode(mb_substr($item->body, 0, 250, 'UTF-8')) !!}...</small>
                                    </a>
                                    <br>
                                    <a href="{{ route('site.announcent') }}"><span
                                            class="badge bg-dark mt-2">Anúncios</span></a>
                                    <hr class="pt-0">
                                </div>
                            @endforeach
                        @endisset

                        {{-- galleries --}}
                        @isset($galleries)
                            @foreach ($galleries as $item)
                                <div class="col-12 my-3">
                                    <a class="text-dark" href="{!! route('site.gallery.show', urlencode($item->name)) !!}">
                                        <b>{{ $item->name }}</b>
                                    </a>
                                    <br>
                                    <a href="{{ route('site.gallery') }}"><span class="badge bg-dark mt-2">Galeria de
                                            Fotos</span></a>
                                    <hr class="pt-0">
                                </div>
                            @endforeach
                        @endisset

                        {{-- slideshows --}}
                        @isset($slideshows)
                            @foreach ($slideshows as $item)
                                <div class="col-12 my-3">
                                    <a class="text-dark" href="{{ $item->link }}">
                                        <b>{{ $item->title }}</b>
                                    </a>
                                    <br>
                                    <a href="{{ route('site.home') }}">
                                        <span class="badge bg-dark mt-2">Notícias em Destaque</span>
                                    </a>
                                    <hr class="pt-0">
                                </div>
                            @endforeach
                        @endisset

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('CSSJS')
    <style>
        #rcorners2 {
            width: 700px;
            height: 50px;
        }

        #buttonbtn {
            display: block;
            width: 50px;
            height: 50px;
            margin-left: -50px;
        }

    </style>
@endsection
