@extends('layouts.merge.site')
@section('titulo', 'Agentes')
@section('content')
    <div class="uni-banner">
        <div class="container-fluid container-large">
            <div class="uni-banner-text-area">
                <h1>Agentes</h1>
                <ul>
                    <li><a href="{{ route('site.home') }}">Home</a></li>
                    <li>Agentes</li>
                </ul>
            </div>
        </div>
    </div>


    <div class="team pt-70 pb-100">
        <div class="container">
            <div class="row">
                @foreach ($agentes as $item)
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="team-card-2">
                            <div class="team-card-img">
                                <img src="/storage/{{ $item->foto }}" alt="image">
                            </div>
                            <div class="team-card-text-2">
                                <div class="team-card-text-intro">
                                    <h4>{{ $item->name }}</h4>
                                    <p>{{ $item->specification }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>


@endsection
