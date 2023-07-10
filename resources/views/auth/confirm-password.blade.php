@extends('layouts.merge.site')
@section('titulo', 'Confirmar Password')
@section('content')


    <!-- Confirmar Password start -->
    <div class="login-area pt-50 pb-50 ">
        <div class="container">
            <div class="row">
                <div class="col-md-6 justify-content-center mx-auto text-center">
                    <div class="login">
                        <div class="login-form-container">
                            <div class="login-text">
                                <span>
                                    {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
                                </span>
                            
                                <!-- Validation Errors -->
                                <x-auth-validation-errors class="mb-4 alert alert-danger" :errors="$errors" />

                            </div>
                            <div class="login-form">
                                <form method="POST" action="{{ route('password.confirm') }}">
                                    @csrf

                                    <!-- Password -->
                                    <input type="password" name="password" placeholder="Password" required autocomplete="current-password">
                                 
                                  
                                    <div class="button-box">
                                        <button type="submit" class="default-btn"> {{ __('Confirm') }}</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Confirmar Password end -->

@endsection
