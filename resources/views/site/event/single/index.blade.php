@extends('layouts.merge.site')
@section('titulo', ' Eventos')
@section('content')

    <!-- Banner Area Start -->
    <div class="banner-area-wrapper">
        <div class="banner-area text-left">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="banner-content-wrapper">
                            <div class="banner-content">
                                <a href="{{ route('site.event') }}">
                                    <h2>Eventos</h2>
                                </a>
                                <h3>{{ $events->title }}</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Area End -->

    <!-- Event Details  -->

    <div class="event-details-area blog-area pt-150 pb-140">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="event-details">
                        <div class="event-details-img">
                            <img src="/storage/{{ $events->path }}" alt="{{ $events->title }}" width="100%">
                            <div class="event-date mx-3 text-center">
                                <h3>{{ date('d', strtotime($events->dateEvent)) }} <br>
                                    {{ date('m', strtotime($events->dateEvent)) }} <br>
                                    {{ date('Y', strtotime($events->dateEvent)) }}</h3>
                            </div>
                        </div>
                        <div class="event-details-content">
                            <h2>{{ $events->title }}</h2>
                            <ul>
                                <li><span>Horário : </span>{{ $events->startTime }}h - {{ $events->endTime }}h</li>
                                <li><span>Localização : </span>{{ $events->localization }}</li>
                            </ul>

                            <p>
                                {!! html_entity_decode($events->body) !!}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="blog-sidebar right">
                        <div class="single-blog-widget mb-50">
                            <h3>Outros Eventos</h3>
                            <div class="row">
                                @foreach ($lasted as $item)
                                    <div class="single-post mt-2">
                                        <div class="single-post-img">
                                            <a href="{!! url('/evento/' . urlencode($item->title)) !!}">
                                                <div
                                                    style='background-image:url("/storage/{{ $item->path }}");background-position:center;background-size:cover;height:90px;width:120px;'>
                                                </div>
                                                <div class="blog-hover">
                                                    <i class="fa fa-link"></i>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="single-post-content">
                                            <h4><a href="{!! url('/evento/' . urlencode($item->title)) !!}">{{ $item->title }}</a></h4>
                                            <p>{{ date('d-m-Y', strtotime($item->dateEvent)) }}</p>
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Event Details End -->


@endsection
