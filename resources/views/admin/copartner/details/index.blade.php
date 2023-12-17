@extends('layouts.merge.dashboard')
@section('titulo', 'Detalhes do Parceiro')

@section('content')
    <div class="card mb-2">
        <div class="card-body">
            <h2 class="h5 page-title">
                <a href="{{ route('admin.copartner.index') }}"><u>Listar Parceiros</u></a> > {{ $copartner->name }}
            </h2>
        </div>
    </div>
    <div class="card shadow">
        <div class="card-body">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <h2 class="h3 m-4 page-title">{{ $copartner->name }}</h2>
                        <div class="row m-5 align-items-center">
                            <div class="col">
                                <div class="row align-items-center">
                                   

                                    <div class="col-md-12 mb-2">
                                        <h5 class="mb-1">
                                            <b>Descrição do Parceiro:</b>
                                        </h5>
                                        <p class="text-dark text-justify">{!! html_entity_decode($copartner->body) !!}</p>

                                    </div>

                                </div>

                                <div class="row align-items-center">
                                    <div class="col-md-7 mb-2">
                                        <hr>
                                        <p class="mb-1 text-dark"><b>Data de Cadastro:</b> {{ $copartner->created_at }}
                                        </p>
                                        <p class="mb-1 text-dark"><b>Última Actualização:</b> {{ $copartner->updated_at }}
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
                                <h2 class="page-title">Capa</h2>
                            </div>

                        </div>
                        <div class="card-deck mb-4">
                            <div class="card border-0 bg-transparent">
                                <div class="card-img-top img-fluid rounded"
                                    style='background-image:url("/storage/{{ $copartner->photo }}");background-position:center;background-size:cover;height:400px;'>
                                </div>
                            </div> <!-- .card -->


                        </div> <!-- .card-deck -->


                    </div>
                </div> <!-- .row -->
            </div> <!-- .container-fluid -->
        </div>
    </div>



@endsection
