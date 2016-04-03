@extends('layouts.sidebar')

@section('body')
    id="cruss"
    @stop

    @section('content')

<div class="container">

    <!-- Trips -->
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-4">

                @foreach($trips as $trip)
                    <div class="post-preview">

                            <h2 class="post-title">
                                {{ $trip->name }}
                            </h2>
                            <h3 class="post-subtitle">
                                {{ $trip->description }}
                            </h3>

                        <p>Event start: {{ $trip->startEvent }}</p>
                        <a href="trip/{{$trip->id}}">read more</a>
                    </div>
                    <hr>
                @endforeach
            </div>

        </div>
    </div>

</div>


@stop

