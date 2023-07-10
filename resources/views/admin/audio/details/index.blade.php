@extends('layouts.merge.dashboard')
@section('titulo', 'Detalhes da Áudio')

@section('content')
    <div class="card mb-2">
        <div class="card-body">
            <h2 class="h5 page-title">
                <a href="{{ route('admin.audio.index') }}"><u>Listar Áudios</u></a> > {{ $audio->title }}
            </h2>
        </div>
    </div>
    <div class="card shadow">
        <div class="card-body">

            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-12">
                        Título: <h2 class="h3 m-4 page-title">{{ $audio->title }}</h2>
                        <div class="row m-5 align-items-center">

                            <div class="col">
                                <div class="row align-items-center">

                                    <div class="col-md-12 mb-2">

                                        <audio autoplay="autoplay" controls="controls">
                                            <source src="/storage/{{ $audio->audio }}" type="audio/mp3" />
                                            seu navegador não suporta HTML5
                                        </audio>
                                    </div>
                                    <div class="col-md-12 mb-2">
                                        <h5 class="mb-1">
                                            <b>Data de Gravação do audio: </b>
                                            {{ $audio->dateAudio }}
                                        </h5>
                                    </div>
                                    <div class="col-md-12 mb-2">
                                        <p class="mb-1">
                                            <b>Descrição: </b> <br>
                                                {{ $audio->description }}
                                        </p>
                                    </div>


                                </div>

                                <div class="row align-items-center">
                                    <div class="col-md-7 mb-2">
                                        <hr>
                                        <p class="mb-1 text-dark"><b>Data de Cadastro:</b> {{ $audio->created_at }}
                                        </p>
                                        <p class="mb-1 text-dark"><b>Última Actualização:</b> {{ $audio->updated_at }}
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





@endsection
