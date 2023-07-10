@extends('layouts.merge.site')
@section('titulo', ' Eventos')
@section('content')
    <!-- Banner Area Start -->

    <div class="banner-area-wrapper ">
        <div class="banner-area text-left">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="banner-content-wrapper">
                            <div class="banner-content">
                                <h2>Eventos</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Area End -->
    <!-- Event Start -->

    <div class="event-area two text-center pt-60 ">
        <div class="container">
            <div class="row">
                @if ($events)
                    @foreach ($events as $item)
                        <div class="col-lg-6 col-md-12 col-12">

                            <div class="single-event mb-50 mt-2">
                                <div class="event-img">
                                    <a href="{!! url('/evento/' . urlencode($item->title)) !!}">
                                        <img class="img-fluid" src="/storage/{{ $item->path }}" alt="event">
                                    </a>
                                </div>
                                <div class="event-content text-start">
                                    <h3>{{ date('d-m-Y', strtotime($item->dateEvent)) }}</h3>
                                    <h4><a href="{!! url('/evento/' . urlencode($item->title)) !!}">{!! html_entity_decode(mb_substr($item->title, 0, 30, 'UTF-8')) !!}</a></h4>
                                    <ul>
                                        <li><i class="fa fa-clock-o"></i>{{ $item->startTime }} -{{ $item->endTime }}
                                        </li>
                                        <li><i class="fa fa-map-marker"></i>{{ $item->localization }}</li>
                                    </ul>
                                    <div class="event-content-right">
                                        <a class="default-btn" href="{!! url('/evento/' . urlencode($item->title)) !!}">Saber Mais</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif

            </div>
            <div class="col-12">
                <div class="row justify-content-center">
                    <div class="col-lg-4 py-5">
                        <b>{{ $events->links() }}</b>
                    </div>
                </div>
            </div>



        </div>
    </div>
    <!-- Event End -->

@endsection
