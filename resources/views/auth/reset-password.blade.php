@extends('layouts.merge.site')
@section('titulo', 'reset-password')
@section('content')


    <!-- reset-password start -->
    <div class="login-area pt-50 pb-50 ">
        <div class="container">
            <div class="row">
                <div class="col-md-6 justify-content-center mx-auto text-center">
                    <div class="login">
                        <div class="login-form-container">
                            <div class="login-text">
                                <h2>{{ __('Reset Password') }}</h2>
                                
                                <!-- Validation Errors -->
                                <x-auth-validation-errors class="mb-4 alert alert-danger" :errors="$errors" />

                            </div>
                            <div class="login-form">
                                <form method="POST" action="{{ route('password.update') }}">
                                    @csrf

                                    <!-- Password Reset Token -->
                                    <input type="hidden" name="token" value="{{ $request->route('token') }}">

                                    <!-- Email Address -->
                                    <input type="email" name="email" placeholder="{{ __('Email') }}"
                                        value="{{ old('email', $request->email) }}" required autofocus>

                                    <!-- Password -->
                                    <input type="password" name="password" id="password" placeholder="Password" required>

                                    <!-- Password -->
                                    <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirmar Password" required>

                                    <div class="button-box">
                                      
                                        <button type="submit" class="default-btn"> {{ __('Reset Password') }}</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- reset-password end -->

@endsection
