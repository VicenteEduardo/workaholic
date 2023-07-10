@extends('layouts.merge.site')
@section('titulo', 'Organograma')
@section('content')

    <!-- ====== Banner Start ====== -->
    <div class="banner-area-wrapper ">
        <div class="banner-area text-left">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="banner-content-wrapper">
                            <div class="banner-content">
                                <h2>Organograma</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ====== Banner End ====== -->

    <!-- ====== Organograma Start ====== -->

    <div class="container">
        <div class="row">

            @foreach ($charts as $item)
                @if ($item->function == 'Director Geral da ReMA' || $item->function == 'Directora Geral da ReMa')
                    <div class="card col-12 col-md-6 mx-auto my-4">
                        <div class="row" style="display: flex !important;">
                            <div class="col-md-4" style="padding: 0!important;">
                                <img class="img-fluid" style="height: 200px !important;"
                                    src="/storage/{{ $item->photo }}" alt="">
                            </div>
                            <div class="col-md-8">
                                <h4
                                    style="font-size: 25px !important;line-height: 110%;margin: 1.14rem 0 0.912rem;padding-bottom: 12px;border-bottom: 1px solid #800000;font-weight: 400;font-size: 18px;">
                                    {{ $item->name }}
                                </h4>
                                <div><span
                                        style="font-weight: 700;display: block;clear: both;">{{ $item->function }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach

        </div>
    </div>


    <div class="container">
        <div class="row">
            @foreach ($charts as $item)
                @if ($item->function == 'Directora  Adjunta para Área Técnica' || $item->function == 'Director Adjunto para Área Técnica' || $item->function == 'Director Adjunto para Área de Administração e Finanças' || $item->function =='Directora Adjunta para Área de Administração e Finanças')
                    <div class="card col-12 col-md-6 mx-auto mt-4">
                        <div class="row" style="display: flex !important;">
                            <div class="col-md-4" style="padding: 0!important;">
                                <img class="img-fluid" style="height: 200px !important;"
                                    src="/storage/{{ $item->photo }}" alt="">
                            </div>
                            <div class="col-md-8">
                                <h4
                                    style="font-size: 25px !important;line-height: 110%;margin: 1.14rem 0 0.912rem;padding-bottom: 12px;border-bottom: 1px solid #800000;font-weight: 400;font-size: 18px;">
                                    {{ $item->name }}
                                </h4>
                                <div><span
                                        style="font-weight: 700;display: block;clear: both;">{{ $item->function }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach

        </div>
    </div>


    <div class="container">
        <div class="row">
            @foreach ($charts as $item)
                @if ($item->function == 'Chefe De Departamento De Pessoal, Administração, Finanças e Serviços Gerais' ||  $item->function == 'Chefe de Departamento de Mediatecas da ReMA' || $item->function == 'Chefe de Departamento de TI da ReMA')
                    <div class="card col-12 col-md-6 mx-auto my-4">
                        <div class="row" style="display: flex !important;">
                            <div class="col-md-4" style="padding: 0!important;">
                                <img class="img-fluid" style="height: 200px !important;"
                                    src="/storage/{{ $item->photo }}" alt="">
                            </div>
                            <div class="col-md-8">
                                <h4
                                    style="font-size: 25px !important;line-height: 110%;margin: 1.14rem 0 0.912rem;padding-bottom: 12px;border-bottom: 1px solid #800000;font-weight: 400;font-size: 18px;">
                                    {{ $item->name }}
                                </h4>
                                <div><span
                                        style="font-weight: 700;display: block;clear: both;">{{ $item->function }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach

        </div>
    </div>





    <!-- ====== Organograma End ====== -->


@endsection
