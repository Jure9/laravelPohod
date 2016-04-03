@extends('layouts.sidebar')

@section('body')
    id="cruss"
@stop

@section('content')

    <div class="row">

        <!-- nuTrip button -->
        <div class="container">
            <div class="pull-right"><a href="/addTrip" class="text-success"><span
                            class="glyphicon glyphicon-plus"></span>New trip</a></div>

            <!-- Tabs displaying trips -->
            <div class="container">
                <h2>Trips</h2>
                <ul class="nav nav-tabs">
                    @foreach($trips as $trip)

                        <li><a data-toggle="tab" href="#menu{{$trip->id}}">{{$trip->name}}</a></li>

                    @endforeach
                </ul>

                <div class="tab-content">
                    @foreach($trips as $trip)

                        <div id="menu{{$trip->id}}" class="tab-pane fade">
                            <h3>{{$trip->name}}</h3>
                            <p>{{$trip->description}}</p>
                            <p><b>Event start:</b>{{$trip->startEvent}}</p>
                            <a href="trip/{{$trip->id}}">read more</a>
                        </div>

                    @endforeach
                </div>
            </div>
        </div>


    </div>

@stop

