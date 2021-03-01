@extends('layouts.app')

@section('title', 'Events')

@section('pageHeader')
    <h1 class="display-4">Events</h1>

    <p class="lead text-muted">Our latest events!</p>
@endsection

@section('content')
    <div class="bg-light py-4">
        <div class="container">
            <h2>Events</h2>

            <p class="lead"></p>

            @include('partials.events-grid')
        </div>
    </div>
@endsection
