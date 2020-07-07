@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Owner List</div>

                    <div class="panel-body">

                        <h1>{{ $owner->firstname }} {{ $owner->lastname }}</h1>
                        <p class="lead">{{ $owner->contact_number }}</p>
                        <p class="lead">{{ $owner->email }}</p>
                        <hr>

                        <a href="{{ route('api.v1.owner.index') }}" class="btn btn-info">Back to all owners</a>
                        <a href="{{ route('api.v1.owner.edit', $owner->id) }}" class="btn btn-primary">Edit Owner</a>

                        <div class="pull-right">
                            <div class="col-md-6 text-right">
                                {!! Form::open([
                                    'method' => 'DELETE',
                                    'route' => ['api.v1.owner.destroy', $owner->id]
                                ]) !!}
                                {!! Form::submit('Delete this owner?', ['class' => 'btn btn-danger']) !!}
                                {!! Form::close() !!}

                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
