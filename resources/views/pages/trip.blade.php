@extends('layouts.sidebar')

@section('body')
    id="cruss"
@stop

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="well">

                    <h1>{{ $trip->name }}</h1>

                    <p>Event start: {{ $trip->startEvent }}</p>

                    <br>
                    <br>
                    <h4>Trip description:</h4>
                    <p>{{ $trip->description }}</p>

                </div>
            </div>
        </div>
    </div>

@stop