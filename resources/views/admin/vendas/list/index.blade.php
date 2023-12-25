@extends('layouts.merge.dashboard')
@section('titulo', 'Lista de Produtos')

@section('content')
    <div class="card mb-2">
        <div class="card-body">
            <h2 class="h5 page-title">
                Lista de Pedidos
            </h2>
        </div>
    </div>
    <div class="card shadow mb-4">
        <div class="card-body">


            <div class="table-responsive">
            <table class="table  datatables table-hover table-bordered" id="dataTable-1">
                <thead class="bg-primary">
                    <tr class="text-center">
                        <th>ID</th>
                        <th>Nome do Cliente</th>

                        <th>Preço</th>
                        <th>Status</th>

                        <th>ACÇÕES</th>
                    </tr>
                </thead>
                <tbody class="bg-white">

                    @foreach ($pedidos as $item)
                        <tr class="text-center text-dark">
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->nome }} </td>
                            <td>   {!! number_format($item->total, 0, ',', '.') !!} kz </td>
                            <td>  {{ $item->status }} </td>

                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-primary btn-sm dropdown-toggle" type="button"
                                        id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        <i class="fa fa-clone fa-sm" aria-hidden="true"></i>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a href='{{ url("admin/vendas/show/{$item->id}") }}'
                                            class="dropdown-item">Detalhes</a>

                                        <a href='{{ url("admin/vendas/edit/{$item->id}") }}'
                                            class="dropdown-item">Editar</a>


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
