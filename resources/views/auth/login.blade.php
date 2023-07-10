@extends('layouts.merge.site')
@section('titulo', 'Login')
@section('content')


    <!-- Login start -->
    <div class="login-area pt-50 pb-50 ">
        <div class="container">
            <div class="row">
                <div class="col-md-6 justify-content-center mx-auto text-center">
                    <div class="login">
                        <div class="login-form-container">
                            <div class="login-text">
                                <h2>Login</h2>
                                <span>Por favor, faça o login usando as suas credenciais corretamente.</span>
                                <!-- Session Status -->
                                <x-auth-session-status class="mb-4 alert alert-info" :status="session('status')" />

                                <!-- Validation Errors -->
                                <x-auth-validation-errors class="mb-4 alert alert-danger" :errors="$errors" />

                            </div>
                            <div class="login-form">
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <!-- Email Address -->
                                    <input type="email" name="email" placeholder="{{ __('Email') }}"
                                        value="{{ old('email') }}" required autofocus>

                                    <!-- Password -->
                                    <input type="password" name="password" placeholder="Password" required autocomplete="current-password">
                                    <div class="button-box">
                                        <div class="login-toggle-btn">
                                            <!-- Remember Me -->
                                            <input type="checkbox" id="remember" name="remember">
                                            <label for="remember">{{ __('Remember me') }}</label>

                                            @if (Route::has('password.request'))
                                                <a href="{{ route('password.request') }}">
                                                    {{ __('Forgot your password?') }}
                                                </a>
                                            @endif
                                        </div>
                                        <button type="submit" class="default-btn">{{ __('Log in') }}</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Login end -->

@endsection
