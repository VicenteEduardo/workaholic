@extends('layouts.merge.dashboard')
@section('titulo', 'Detalhes do Parceiro')

@section('content')
    <div class="card mb-2">
        <div class="card-body">
            <h2 class="h5 page-title">
                <a href="{{ route('admin.vendas.index') }}"><u>Listar vendas</u></a> >


            </h2>


        </div>
        <ul>
            <li><b>Status do Pedido: </b> {{ $pedido->status }}</li>
            <li><b>Nome do cliente: </b> {{ $pedido->nome }}</li>

            <li><b>Telefone: </b> {{ $pedido->telefone }}</li>
            <li><b>Morada: </b> {{ $pedido->endereco }}</li>
            <li> <b>Total Somado: {!! number_format($price, 0, ',', '.') !!} kz  </b></li>
        </ul>
    </div>
    <div class="card shadow mb-4">
        <div class="card-body">


            <div class="table-responsive">
            <table class="table  datatables table-hover table-bordered" id="dataTable-1">
                <thead class="bg-primary">
                    <tr class="text-center">
                        <th>ID</th>
                        <th>Produto</th>
                        <th>Quantidade</th>
                        <th>Preço</th>

                    </tr>
                </thead>
                <tbody class="bg-white">

                    @foreach ($vendas as $item)
                        <tr class="text-center text-dark">
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->name }} </td>
                            <td>{{ $item->quantity }} </td>
                            <td>   {!! number_format($item->price, 0, ',', '.') !!} kz </td>




                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
        </div>
    </div>

@endsection
