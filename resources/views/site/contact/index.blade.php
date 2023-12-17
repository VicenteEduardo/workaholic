@extends('layouts.merge.site')
@section('titulo', 'Contactos')
@section('content')


    <div class="uni-banner product-uni-banner">
        <div class="container-fluid container-large">
            <div class="uni-banner-text-area">
                <h1>
                    Contate-nos</h1>
                <ul>
                    <li><a href="{{ route('site.home') }}">Home</a></li>
                    <li>Contactos</li>
                </ul>
            </div>
        </div>
    </div>


    <div class="contact ptb-100">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6">
                    <div class="contact-form-text-area">
                        <form method="post" action="{{ route('site.help.email') }}">
                            @csrf
                            @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control"  name="name" placeholder="Nome" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <input type="email"  class="form-control" name="email" placeholder="E-mail" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <input type="text" name="phone_number" class="form-control"
                                            placeholder="Telefone" id="phone_number" required
                                            data-error="Please enter your phone number">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="subject" placeholder="Assunto">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12 col-12">
                                    <div class="form-group">
                                        <textarea name="msg" id="message" class="form-control" placeholder="Suas mensagens.." cols="30" rows="5"
                                            required data-error="
                                            Por favor insira a sua mensagem"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="form-group{{ $errors->has('g-recaptcha-response') ? ' has-error' : '' }}">
                                    <div class="col-md-12">
                                        {!! RecaptchaV3::field('register') !!}
                                        @if ($errors->has('g-recaptcha-response'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-md-12 col-sm-12 col-12">
                                    <button class="default-button" type="submit"><span>Enviar mensagem</span></button>
                                    <div id="msgSubmit" class="h6 text-center hidden"></div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="customer-support-area">
                        <h4>
                            Suporte ao cliente</h4>
                        <p>Precisa de alguma ajuda? Entre em contato conosco.</p>
                        <ul class="contact-list">
                            <li><i class="flaticon-phone-call"></i><a href="#"> {{ $configuration->telefone }}</a></li>
                            <li><i class="flaticon-email"></i>{{ $configuration->email }}
                            </li>
                            <li><i class="flaticon-location"></i> {{ $configuration->adress }}</li>
                        </ul>
                        <h4>
                            Jornada de trabalho</h4>
                        <ul class="working-time">
                            <li><span>Seg - Sáb</span> <span>8:00AM - 17:00PM</span></li>
                            <li><span>Domingos</span><span>Fechado</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="contact-google-map">
        <iframe class="g-map"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d78339.6186660101!2d-106.73462151445834!3d52.15045315715413!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5304f6bf47ed992b%3A0x5049e3295772690!2sSaskatoon%2C%20SK%2C%20Canada!5e0!3m2!1sen!2sbd!4v1629617114800!5m2!1sen!2sbd"></iframe>
    </div>

@endsection
