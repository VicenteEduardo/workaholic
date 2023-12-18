@extends('layouts.merge.dashboard')
@section('titulo', 'Criar Conta no Workaholic SA')
@section('content')

    <div class="card shadow">
        <div class="card-body">
            <h2 class="my-5 text-center">Criar conta no Workaholic SA</h2>

            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4 alert alert-danger" :errors="$errors" />
            <div class="row align-items-center">

                <form class="col-lg-12 mt-2 col-md-12 col-12 mx-auto" method="POST" action="{{ route('register') }}">
                    @include('forms._formUser.index')
                    <button class="btn btn-lg  btn-success btn-block" type="submit">{{ __('Register') }}</button>
                </form>
            </div>
        </div>
    </div>

@endsection
