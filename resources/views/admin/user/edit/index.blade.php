@extends('layouts.merge.dashboard')
@section('titulo', 'Editar Conta')
@section('content')

    <div class="card shadow">
        <div class="card-body">
            <h2 class="my-5 text-center">Editar conta de {{$user->name}} </h2>

            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4 alert alert-danger" :errors="$errors" />
            <div class="row align-items-center">

                <form class="col-lg-12 mt-2 col-md-12 col-12 mx-auto" method="POST" action="{{ route('admin.user.update', $user->id) }}">
                    @method('PUT')
                    @include('forms._formUser.index')
                    <button class="btn btn-lg  btn-primary btn-block" type="submit">Salvar Alterações</button>
                </form>
            </div>
        </div>
    </div>

@endsection
