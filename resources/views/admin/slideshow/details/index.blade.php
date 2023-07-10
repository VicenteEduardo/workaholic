@extends('layouts.merge.dashboard')
@section('titulo', 'Detalhes da Imagem')

@section('content')
    <div class="card mb-2">
        <div class="card-body">
            <h2 class="h5 page-title">
                <a href="{{ route('admin.slideshow.index') }}">
                    <u>Listar Slideshows</u>
                </a>
                > Imagem do Slideshow com o Ticket
                {{ $slideshow->id }}
            </h2>
        </div>
    </div>
    <div class="card shadow">
        <div class="card-body">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <h2 class="h3 m-4 page-title">{{ $slideshow->title }}</h2>


                        <div class="row align-items-center m-5">

                            <div class="col-md-12 mb-2">
                                <h5 class="mb-1">
                                    <b>Link:</b>
                                    <a href="{{ $slideshow->link }}" target="_blank">
                                        <u>{{ $slideshow->link }}</u>
                                    </a>
                                </h5>

                            </div>
                            <div class="col-md-12 mb-2">
                                <h5 class="mb-1">
                                    <p> <b>Texto do Botão:</b>
                                   {{ $slideshow->button }} </p>
                                </h5>

                            </div>
                        </div>

                        <div class="row align-items-center m-5">
                            <div class="col-md-7 mb-2">
                                <hr>
                                <p class="mb-1 text-dark"><b>Data de Cadastro:</b> {{ $slideshow->created_at }}
                                </p>
                                <p class="mb-1 text-dark"><b>Última Actualização:</b> {{ $slideshow->updated_at }}
                                </p>

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
                                <h2 class="page-title">Imagem</h2>
                            </div>

                        </div>
                        <div class="card-deck mb-4">

                            <div class="card border-0 bg-transparent">
                                <div class="card-img-top img-fluid rounded"
                                    style='background-image:url("/storage/{{ $slideshow->path }}");background-position:center;background-size:cover;height:400px;'>
                                </div>

                            </div> <!-- .card -->


                        </div> <!-- .card-deck -->


                    </div>
                </div> <!-- .row -->
            </div> <!-- .container-fluid -->
        </div>
    </div>



@endsection
