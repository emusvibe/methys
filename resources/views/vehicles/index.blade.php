@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Vehicle and Owner List</div>

                    <div class="panel-body">
                        <p class="lead">Here's a list of all Vehicles & Owners <a href="/api/v1/vehicle/create">Add a new one?</a></p>

                        @foreach($vehicles as $vehicle)
                            <h3>{{ $vehicle->owner->firstname }} {{ $vehicle->owner->lastname }}</h3>
                            <p>{{ $vehicle->owner->contact_number }}</p>
                            <p>{{ $vehicle->owner->email }}</p>
                            <p>{{ $vehicle->manufacturer }}</p>
                            <p>{{ $vehicle->type}}</p>
                            <p>{{ $vehicle->year}}</p>
                            <p>
                            <a href="{{ route('api.v1.vehicle.show', $vehicle->id) }}" class="btn btn-info">View Vehicle</a>
                            <a href="{{ route('api.v1.vehicle.edit', $vehicle->id) }}" class="btn btn-primary">Edit Vehicle</a>
                            </p>
                            <hr>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
