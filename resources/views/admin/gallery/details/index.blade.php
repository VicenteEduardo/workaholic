@extends('layouts.merge.dashboard')
@section('titulo', 'Detalhes da Galeria')

@section('content')
    <div class="card mb-2">
        <div class="card-body">
            <h2 class="h5 page-title">
                <a href="{{ route('admin.gallery.index') }}"><u>Listar Galerias</u></a> > {{ $gallery->name }}
            </h2>
        </div>
    </div>
    <div class="card shadow">
        <div class="card-body">

            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <h2 class="h3 m-4 page-title">{{ $gallery->name }}</h2>
                        <div class="row m-5 align-items-center">

                            <div class="col">
                                <div class="row align-items-center">
                                    <div class="col-12 col-lg-10">
                                        <div class="row align-items-center my-4">
                                            <div class="col">
                                                <h2 class="page-title">Capa</h2>
                                            </div>

                                        </div>
                                        <div class="card-deck mb-4">

                                            <div class="card border-0 bg-transparent">
                                                <div class="card-img-top img-fluid rounded"
                                                    style='background-image:url("/storage/{{ $gallery->cover }}");background-position:center;background-size:cover;height:400px;'>
                                                </div>
                                            </div> <!-- .card -->
                                        </div> <!-- .card-deck -->
                                    </div>
                                </div>

                                <div class="row align-items-center">
                                    <div class="col-md-7 mb-2">
                                        <hr>
                                        <p class="mb-1 text-dark"><b>Data de Cadastro:</b> {{ $gallery->created_at }}
                                        </p>
                                        <p class="mb-1 text-dark"><b>Última Actualização:</b> {{ $gallery->updated_at }}
                                        </p>

                                    </div>
                                </div>
                            </div>
                        </div>



                    </div> <!-- /.col-12 -->
                </div> <!-- .row -->
            </div> <!-- .container-fluid -->


        </div>
    </div>

    <div class="card shadow mt-2">
        <div class="card-body">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-10">
                        <div class="row align-items-center my-4">
                            <div class="col">
                                <h2 class="page-title">Imagens</h2>
                            </div>
                            <div class="col-auto">
                                <a type="button" class="btn btn-lg btn-primary text-white"
                                    href="{{ url("admin/imageGallery/create/{$gallery->id}") }}">
                                    <span class="fe fe-plus fe-16 mr-3"></span>Nova Imagem
                                </a>
                            </div>
                        </div>

                        <div class="col-md-12">

                            <div class="row">

                                @foreach ($gallery->images as $item)
                                    <div class="col-md-4">


                                        <div class="card-deck mb-4">
                                            <div class="card border-0 bg-transparent">
                                                <div class="card-img-top img-fluid rounded"
                                                    style='background-image:url("/storage/{{ $item->path }}");background-position:center;background-size:cover;height:200px;'>
                                                </div>

                                            </div> <!-- .card -->
                                            <div class="col-auto pr-0">
                                                <div class="dropdown">
                                                    <button class="btn btn-sm dropdown-toggle more-vertical text-dark"
                                                        type="button" id="dr1" data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <span class="text-dark sr-only">Action</span>
                                                    </button>

                                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dr1"
                                                        style="">
                                                        <a class="dropdown-item"
                                                            href='{{ url("admin/imageGallery/delete/$item->id") }}'>{{ $item->id }}
                                                            - Eliminar</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> <!-- .card-deck -->
                                    </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div> <!-- .row -->
            </div> <!-- .container-fluid -->
        </div>
    </div>



@endsection
