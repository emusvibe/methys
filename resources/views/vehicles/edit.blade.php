@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Vehicle and Owner List</div>

                    <div class="panel-body">

                        <h1>Edit Task - Task Name </h1>
                        <p class="lead">Edit this vehicle below. <a href="{{ route('api.v1.vehicle.index') }}">Go back to all vehicles.</a></p>
                        <hr>

                        @include('partials.alerts.errors')

                        @if(Session::has('flash_message'))
                            <div class="alert alert-success">
                                {{ Session::get('flash_message') }}
                            </div>
                        @endif

                        {!! Form::model($vehicle, ['method' => 'PATCH', 'route' => ['api.v1.vehicle.update', $vehicle->id]]) !!}

                        <div class="form-group">
                            {!! Form::label('owner_id', 'Owner:', ['class' => 'control-label']) !!}
                            {!! Form::select('owner_id', (['0' => 'Select a Owner'] + $owners),
                                null, ['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('manufacturer', 'Manufacturer:', ['class' => 'control-label']) !!}
                            {!! Form::text('manufacturer', null, ['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('type', 'Type:', ['class' => 'control-label']) !!}
                            {!! Form::text('type', null, ['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('year', 'Year:', ['class' => 'control-label']) !!}
                            {!! Form::date('year', null, ['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('colour', 'Colour:', ['class' => 'control-label']) !!}
                            {!! Form::text('colour', null, ['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('mileage', 'Mileage:', ['class' => 'control-label']) !!}
                            {!! Form::text('mileage', null, ['class' => 'form-control']) !!}
                        </div>

                        {!! Form::submit('Update Vehicle', ['class' => 'btn btn-primary']) !!}

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
