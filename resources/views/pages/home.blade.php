@extends('layouts.app')

@section('title', 'Homepage')

@section('content')
    <h1>Homepage</h1>

    <p>This is my body content.</p>
    <p>This is my body content. P2</p>

    {{-- isto vai ser sempre incluído na página --}}
    @include('partials.news')

    {{-- isto vai ser incluído na página mediante avaliação lógica --}}
    @includeWhen($includeNews, 'partials.news')

    @if($includeNews)
        <p>The fox!</p>
    @endif

    @isset($test)
        <p>
            I'm a {{ $test }}
        </p>
    @endisset


    @auth
        // The user is authenticated...
    @endauth

    @guest
        // The user is not authenticated...
    @endguest
@endsection

@push('styles')
    <style>
        body {
            color: grey;
        }
    </style>
@endpush

@push('scripts')
    <script>
        console.log('home page');
    </script>
@endpush
