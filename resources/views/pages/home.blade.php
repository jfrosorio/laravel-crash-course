@extends('layouts.app')

@section('title', 'Homepage')

@section('pageHeader')
    <h1 class="display-4">Homepage</h1>

    <p class="lead text-muted">This is my body content.</p>
@endsection

@section('content')
    <div class="bg-light py-4">
        <div class="container">
            <h2>Events</h2>

            <p class="lead"></p>

            @include('partials.events-highlights')
        </div>
    </div>
@endsection
