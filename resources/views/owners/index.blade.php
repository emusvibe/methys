@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Owner List</div>

                    <div class="panel-body">
                        <p class="lead">Here's a list of all owners. <a href="/api/v1/owner/create">Add a new one?</a></p>

                        @foreach($owners as $owner)
                            <h3>{{ $owner->firstname }} {{ $owner->lastname}}</h3>
                            <p>{{ $owner->contact_number}}</p>
                            <p>{{ $owner->email}}</p>
                            <p>
                                <a href="{{ route('api.v1.owner.show', $owner->id) }}" class="btn btn-info">View Owner</a>
                                <a href="{{ route('api.v1.owner.edit', $owner->id) }}" class="btn btn-primary">Edit Owner</a>
                            </p>
                            <hr>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
