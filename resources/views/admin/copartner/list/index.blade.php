@extends('layouts.merge.dashboard')
@section('titulo', 'Lista de Parceiros')

@section('content')
    <div class="card mb-2">
        <div class="card-body">
            <h2 class="h5 page-title">
                Lista de Parceiros
            </h2>
        </div>
    </div>
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="col-md-4">
                <div class="card-body">
                    <div class="d-flex justify-content-left">
                        <i class="mdi mdi-poll-box icon-lg text-primary d-flex align-items-center"></i>
                        <div class="d-flex flex-column ms-4">
                            <span class="d-flex flex-column">
                                <p class="mb-0">Quantidade de Parceiros Cadastradas</p>
                                <h4 class="font-weight-bold">{{ $copartner }}</h4>
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="table-responsive">
            <table class="table  datatables table-hover table-bordered" id="dataTable-1">
                <thead class="bg-primary">
                    <tr class="text-center">
                        <th>ID</th>
                        <th>Nome</th>

                        <th>ACÇÕES</th>
                    </tr>
                </thead>
                <tbody class="bg-white">

                    @foreach ($copartners as $item)
                        <tr class="text-center text-dark">
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->name }} </td>

                            @csrf
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-primary btn-sm dropdown-toggle" type="button"
                                        id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        <i class="fa fa-clone fa-sm" aria-hidden="true"></i>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a href='{{ url("admin/parceiros/show/{$item->id}") }}'
                                            class="dropdown-item">Detalhes</a>

                                        <a href='{{ url("admin/parceiros/edit/{$item->id}") }}'
                                            class="dropdown-item">Editar</a>

                                        @if (Auth::user()->level != 'Analista')
                                            <a href='{{ url("admin/parceiros/delete/{$item->id}") }}' class="dropdown-item">
                                                Eliminar
                                            </a>
                                        @endif

                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
        </div>
    </div>



@endsection
