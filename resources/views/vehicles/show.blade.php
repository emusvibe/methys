@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Vehicle and Owner List</div>

                    <div class="panel-body">

                        @include('partials.alerts.modal')

                        <p class="lead">Here's a list of all Vehicles & Owners</p>
                        <h3>{{ $vehicle->owner->firstname }} {{ $vehicle->owner->lastname }}</h3>
                        <p>{{ $vehicle->owner->contact_number }} </p>
                        <p>{{ $vehicle->owner->email }} </p>
                        <p>{{ $vehicle->manufacturer }}</p>
                        <p>{{ $vehicle->type }}</p>
                        <p>{{ $vehicle->colour }}</p>
                        <p>{{ $vehicle->mileage }}</p>
                        <hr>

                        <a href="{{ route('api.v1.vehicle.index') }}" class="btn btn-info">Back to all vehicles</a>
                        <a href="{{ route('api.v1.vehicle.edit', $vehicle->id) }}" class="btn btn-primary">Edit Vehicle</a>


                        <div class="pull-right">
                            <div class="col-md-6 text-right">
                                <button class="btn btn-danger" data-href="/delete.php?id=54" data-toggle="modal" data-target="#confirm-delete">
                                    Delete this vehicle?
                                </button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
