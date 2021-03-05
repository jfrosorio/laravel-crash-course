@extends('admin.layouts.app')

@section('pageHeader')
    <h1>{{ $event->name }}</h1>
@endsection

@section('content')

    <div class="container">
        <div class="py-4">
            <a class="btn btn-primary" href="{{ route('admin.events.index') }}">
                <i class="fas fa-long-arrow-alt-left"></i> Return to list
            </a>
        </div>

        <p>
            <b>Description: </b> {{ $event->description }}
        </p>
        <p>
            <b>Observations: </b> {{ $event->observations }}
        </p>
    </div>
@endsection
