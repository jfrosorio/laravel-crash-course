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

            <div class="row">
                @forelse($events as $event)
                    <div class="col-lg-4 mb-4">
                        <div class="card h-100" style="width: 18rem;">
                            <img src="{{ $event->image_url }}" class="card-img-top" alt="{{ $event->name }}">

                            <div class="card-body">
                                <h5 class="card-title">{{ $event->name }}</h5>

                                <p class="card-text">{{ $event->description }}</p>
                            </div>

                            <div class="card-footer">
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col">
                        <x-alert type="info" message="No records found. Please come back later."></x-alert>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
@endsection
