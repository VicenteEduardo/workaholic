@extends('layouts.merge.site')
@section('titulo', 'Erro 404')
@section('content')


    <div class="error ptb-100 border-b">
    <div class="container">
    <div class="error-content">
    <img src="/site/images/error.gif" alt="image">
    <h4>Desculpe! Não podemos encontrar essa página!</h4>
    <p>A página que você está procurando foi movida, removida, renomeada ou nunca existiu.
</p>

    <a class="default-button" href="{{ route('site.home') }}"><span>Voltar Para  HomeHome</span></a>
    </div>
    </div>
    </div>




@endsection
