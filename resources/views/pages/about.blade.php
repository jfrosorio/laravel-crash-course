@extends('layouts.app')

@section('title', 'About us')

@section('content')
    <h1>About us</h1>

    <x-alert type="info" message="This is an info alert!"/>

    <x-alert type="danger" :message="$alertMessage"/>
@endsection
