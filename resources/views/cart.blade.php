@extends('layouts.merge.site')
@section('titulo', ' Produtos')
@section('content')


<div class="uni-banner product-uni-banner">
    <div class="container-fluid container-large">
        <div class="uni-banner-text-area">
            <h1>Carrinho de compras</h1>
            <ul>
                <li><a href="{{ route('site.home') }}">Home</a></li>
                <li>Carrinho de compras</li>
            </ul>
        </div>
    </div>
</div>


<div class="shopping-cart ptb-100">
    <div class="container">
        <div class="cart-table-area">
            <div class="table-responsive">
                <table class="table align-middle table-bordered">
                    <thead class="table-light">
                        <tr>
                            <th scope="col">Product</th>
                            <th scope="col">Nome</th>
                            <th scope="col"> Preço Unit</th>
                            <th scope="col">Quantidade</th>
                            <th scope="col">Sub Total</th>
                            <th scope="col">Remove</th>
                        </tr>
                    </thead>
                    <tbody>

                        @php $total = 0 @endphp
                        @if(session('cart'))
                        @foreach(session('cart') as $id => $details)
                        @php $total += $details['price'] * $details['quantity'] @endphp
                        <tr data-id="{{ $id }}">
                            <th scope="row"><img width="100" src="/{{ $details['image'] }}" alt="image"></th>
                            <td class="pd-name">{{ $details['name'] }}</td>
                            <td> {!! number_format($details['price'], 2, ',', '.') . ' ' . 'KZ' !!} </td>
                            <td>
                                <div class="input-counter">
                                    <span class="minus-btn"><i class="fas fa-minus"></i></span>
                                    <input type="text" min="1" value="{{ $details['quantity'] }}" />
                                    <span class="plus-btn"><i class="fas fa-plus"></i></span>
                                </div>
                            </td>
                            <td class="count">{!! number_format( $details['price'] * $details['quantity'], 2, ',', '.')
                                . ' ' . 'KZ' !!} </td>

                            <td class="actions" data-th="">

                                <a href="#" class="id-modal-trigger" data-id="{{ $id }}" title="Eliminar"
                                    data-toggle="modal" data-target="#myModal"><i class="far fa-trash-alt"></i></a>

                            </td>

                        </tr>
                        @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
        <div class="cart-footer-area">
            <div class="row align-items-center">
                <div class="col-lg-7 col-md-7 col-sm-8 col-12">
                    <div class="input-groupj">

                        <tr>
                            <td colspan="5" class="text-right">
                                <h3><strong>Total: {!! number_format( $total, 2, ',', '.') . ' ' . 'KZ' !!} </strong>
                                </h3>
                            </td>
                        </tr>
                    </div>
                </div>

                <form action="{{ route('site.pedidos') }}" method="post">
                    @csrf
                    <div class="container">
                        <div class="row">

                            <div class="col-12"> <label for="exampleInputEmail1">Nome Completo</label>
                                <input required name="nome" type="text" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="Digite o seu nome">

                            </div>
                            <div class="col-12"> <label for="exampleInputEmail1">Telefone</label>
                                <input required name="telefone" type="text" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="Digite Seu telefone">

                            </div>
                            <div class="col-12"> <label for="exampleInputEmail1">Morada</label>
                                <input required name="endereco" type="text" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="Digite a Morada">

                            </div>

                            <input required name="total" value="{{  $total }}" type="hidden" class="form-control" id="exampleInputEmail1" i
                                aria-describedby="emailHelp" placeholder="Enter email">




                            <div class="col-lg-5 col-md-5 col-sm-4 col-12">
                                <button class="default-button dfb" type="submit">
                                    Cadastrar Pedido</button>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
@include('extras.modal.delete.payments.index')
@endsection


@section('scripts')
<script type="text/javascript">
    $(".update-cart").change(function (e) {
        e.preventDefault();

        var ele = $(this);

        $.ajax({
            url: '{{ route('update.cart') }}',
            method: "patch",
            data: {
                _token: '{{ csrf_token() }}',
                id: ele.parents("tr").attr("data-id"),
                quantity: ele.parents("tr").find(".quantity").val()
            },
            success: function (response) {
               window.location.reload();
            }
        });
    });

    $(".remove-from-cart").click(function (e) {
        e.preventDefault();

        var ele = $(this);

        if(confirm("Are you sure want to remove?")) {
            $.ajax({
                url: '{{ route('remove.from.cart') }}',
                method: "DELETE",
                data: {
                    _token: '{{ csrf_token() }}',
                    id: ele.parents("tr").attr("data-id")
                },
                success: function (response) {
                    window.location.reload();
                }
            });
        }
    });

</script>
@endsection
