@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome</div>

                <div class="panel-body">
                    Your Application's Landing Page.
                    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores, possimus, ullam? Deleniti dicta eaque facere, facilis in inventore mollitia officiis porro totam voluptatibus! Adipisci autem cumque enim explicabo, iusto sequi.</p>
                    <hr>

                    <a href="{{ route('api.v1.vehicle.index') }}" class="btn btn-info">View Vehicles</a>
                    <a href="{{ route('api.v1.vehicle.create') }}" class="btn btn-primary">Add New Vehicle</a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
