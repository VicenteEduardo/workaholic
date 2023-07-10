@extends('layouts.merge.site')
@section('titulo', 'Verificar e-mail')
@section('content')


    <!-- Verificar e-mail start -->
    <div class="login-area pt-50 pb-50 ">
        <div class="container">
            <div class="row">
                <div class="col-md-6 justify-content-center mx-auto text-center">
                    <div class="login">
                        <div class="login-form-container">
                            <div class="login-text">
                                <span>
                                    {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}

                                </span>
                               
                                @if (session('status') == 'verification-link-sent')
                                    <span>
                                        {{ __('A new verification link has been sent to the email address you provided during registration.') }}
                                    </span>
                                @endif

                                <!-- Session Status -->
                                <x-auth-session-status class="mb-4 alert alert-info" :status="session('status')" />

                                <!-- Validation Errors -->
                                <x-auth-validation-errors class="mb-4 alert alert-danger" :errors="$errors" />

                            </div>
                            <div class="login-form">
                                <form method="POST" action="{{ route('verification.send') }}">
                                    @csrf

                                    <div>
                                        <x-button>
                                            {{ __('Resend Verification Email') }}
                                        </x-button>
                                    </div>
                                </form>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <div class="button-box">
                                        <button type="submit" class="default-btn">{{ __('Log Out') }}</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Verificar e-mail end -->

@endsection
