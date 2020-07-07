@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">

                    <div class="panel-heading">Add a New Owner</div>

                    <div class="panel-body">
                        <p class="lead">Add to your owner list below.</p>
                        <hr>

                        @include('partials.alerts.errors')

                        @if(Session::has('flash_message'))
                                <div class="alert alert-success">
                                    {{ Session::get('flash_message') }}
                                </div>
                        @endif

                        {!! Form::open(['route' => 'api.v1.owner.store']) !!}

                        <div class="form-group">
                            {!! Form::label('firstname', 'Firstname:', ['class' => 'control-label']) !!}
                            {!! Form::text('firstname', null, ['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('lastname', 'Lastname:', ['class' => 'control-label']) !!}
                            {!! Form::text('lastname', null, ['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('contact_number', 'Contact Number:', ['class' => 'control-label']) !!}
                            {!! Form::text('contact_number', null, ['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('email', 'Email:', ['class' => 'control-label']) !!}
                            {!! Form::text('email', null, ['class' => 'form-control']) !!}
                        </div>

                        {!! Form::submit('Create New Owner', ['class' => 'btn btn-primary']) !!}

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
