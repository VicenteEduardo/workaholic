@extends('layouts.merge.dashboard')
@section('titulo', ' Detalhes do Utilizador')

@section('content')
    <div class="card mb-2">
        <div class="card-body">
            <h2 class="h5 page-title">
                Detalhes do Utilizador {{ $user->name }}
            </h2>
        </div>
    </div>
    <div class="card shadow mb-4">
        <div class="card-body">

            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <h2 class="h3 mb-4 page-title">{{ $user->name }}</h2>
                        <div class="row mt-5 align-items-center">
                            <div class="col-md-3 text-center mb-5">
                                <div class=" rounded-circle ml-5 bg-primary" style="height: 150px; width:150px;">
                                    <h1 class="text-white p-5 " style="font-size: 65px">{{ $user->name[0] }}</h1>
                                </div>
                            </div>
                            <div class="col">
                                <div class="row align-items-center">
                                    <div class="col-md-7">
                                        <h4 class="mb-1">{{ $user->email }}</h4>
                                        <p class="small mb-3">
                                            <span class="badge badge-dark">Data de Criação: {{ $user->created_at }}</span>
                                        </p>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-md-12">
                                        <h4 class="mb-1">
                                            <b>NÍvel de Acesso:</b>
                                            {{ $user->level }}

                                        </h4>
                                    </div>
                             
                                </div>
                            </div>
                        </div>



                    </div> <!-- /.col-12 -->
                </div> <!-- .row -->
            </div> <!-- .container-fluid -->


        </div>
    </div>


    <div class="card shadow mb-4">
        <div class="col-12 pt-4">
            <h4>Registo de Actividades</h4>
        </div>
        <div class="card-body">
            <table class="table datatables table-hover table-bordered" id="dataTable-1">
                <thead class="bg-primary">
                    <tr class="text-center">
                        <th>ID</th>
                        <th>NIVEL</th>
                        <th>IP</th>

                        <th>DATA</th>
                        <th>DESCRIÇÃO</th>
                    </tr>
                </thead>
                <tbody class="bg-white">

                    @foreach ($logs as $item)
                        <tr class="text-center text-dark">
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->level }} </td>
                            <td>{{ $item->REMOTE_ADDR }} </td>

                            <td class="text-left">{{ $item->created_at }} </td>
                            <td class="text-left">{{ $item->message }} </td>
                            {{-- <td>
                                <button type="button" class="btn btn-dark" data-toggle="modal"
                                    data-target="#logs{{ $item->id }}">
                                    VER
                                </button>
                            </td> --}}
                        </tr>
                        {{-- @include('extra.modals.logs.index') --}}
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>


@endsection
