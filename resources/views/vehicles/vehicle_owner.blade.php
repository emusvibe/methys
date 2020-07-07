@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Vehicle and Owner List</div>

                    <div class="panel-body">
                        <p class="lead">Here's a list of all Vehicles & Owners</p>

                        {{--<p>Testing 123</p>--}}

                        @foreach($vehicles as $vehicle)
                            <h3>{{ $vehicle->owner->firstname }}</h3>
                            <p>{{ $vehicle->manufacturer }}</p>
                            <p>{{ $vehicle->type}}</p>
                            <p>{{ $vehicle->year}}</p>
                            {{--<p>--}}
                                {{--<a href="{{ route('api.v1.owner.show', $owner->id) }}" class="btn btn-info">View Owner</a>--}}
                                {{--<a href="{{ route('api.v1.owner.edit', $owner->id) }}" class="btn btn-primary">Edit Owner</a>--}}
                            {{--</p>--}}
                            <hr>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
