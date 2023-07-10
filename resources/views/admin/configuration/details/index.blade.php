@extends('layouts.merge.dashboard')
@section('titulo', 'Ver Configurações')

@section('content')
    <div class="card mb-2">
        <div class="card-body">

            <div class="col-md-12">
                <div class="row align-items-center">
                    <div class="col">
                        <h2 class="h5 page-title">
                            Configurações
                        </h2>
                    </div>
                    <div class="col-auto">
                        @isset($configuration)
                            <a type="button" class="btn btn-sm btn-primary text-white"
                                href="{{ url("admin/configuration/edit/{$configuration->id}") }}">
                                <span class="fe fe-edit fe-16 mr-2"></span>Editar o Texto
                            </a>
                        @endisset
                    </div>
                </div>
            </div>

        </div>
    </div>
    @isset($configuration)


        <div class="card shadow">
            <div class="card-body">

                <div class="container-fluid">
                    <div class="row m-4">
                        <div class="col-md-12 mb-2">
                            <p class="mb-1 text-dark">
                                <b>Facebook:</b><br>
                                <a href="{{ $configuration->facebook }}" target="_blank"> {{ $configuration->facebook }}</a>
                            </p>
                        </div>
                        <div class="col-md-12 mb-2">
                            <p class="mb-1 text-dark">
                                <b>Instagram:</b><br>
                                <a href="{{ $configuration->instagram }}" target="_blank">
                                    {{ $configuration->instagram }}</a>
                            </p>
                        </div>
                        <div class="col-md-12 mb-2">
                            <p class="mb-1 text-dark">
                                <b>Youtube:</b><br>
                                <a href="{{ $configuration->youtube }}" target="_blank"> {{ $configuration->youtube }}</a>
                            </p>
                        </div>
                        <div class="col-md-12 mb-2">
                            <p class="mb-1 text-dark">
                                <b>twitter:</b><br>
                                <a href="{{ $configuration->twitter }}" target="_blank"> {{ $configuration->twitter }}</a>
                            </p>
                        </div>

                        <div class="col-md-12 mb-2">
                            <p class="mb-1 text-dark">
                                <b>Endereço:</b><br>
                                <a href="{{ $configuration->adress }}" target="_blank"> {{ $configuration->adress }}</a>
                            </p>
                        </div>
                        <div class="col-md-12 mb-2">
                            <p class="mb-1 text-dark">
                                <b>Telefone:</b><br>
                                {{ $configuration->telefone }}
                            </p>
                        </div>
                        <div class="col-md-12 mb-2">
                            <p class="mb-1 text-dark">
                                <b>Email:</b><br>
                                {{ $configuration->email }}
                            </p>
                        </div>
                    </div> <!-- .row -->
                    <div class="row align-items-center">
                        <div class="col-md-7 mb-2">
                            <hr>
                            <p class="mb-1 text-dark"><b>Data de Cadastro:</b> {{ $configuration->created_at }}
                            </p>
                            <p class="mb-1 text-dark"><b>Última Actualização:</b> {{ $configuration->updated_at }}
                            </p>

                        </div>
                    </div>
                </div> <!-- .container-fluid -->
            </div>
        </div>
    @endisset


@endsection
