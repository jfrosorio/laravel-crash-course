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

        <form method="POST" action="{{ route('admin.events.update', $event) }}">
            @method('PATCH')

            @include('admin.resources.events.partials.form')
        </form>
    </div>
@endsection
