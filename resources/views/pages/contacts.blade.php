@extends('layouts.app')

@section('title', 'Contacts')

@section('pageHeader')
    <h1 class="display-4">Contacts</h1>

    <p class="lead text-muted">Get in touch!</p>
@endsection

@section('content')
    <div class="bg-light py-4">
        <div class="container">
            @if(session()->has('message'))
                <p class="alert alert-success">
                    {{ session()->get('message') }}
                </p>
            @endif

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('contacts.store') }}" autocomplete="off">
                @csrf

                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>

                    <input name="name" class="form-control" id="name" value="{{ old('name') }}">
                </div>

                <div class="row g-3">
                    <div class="col-lg">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>

                            <input name="email" type="text" class="form-control" id="email" value="{{ old('email') }}">
                        </div>
                    </div>

                    <div class="col-lg">
                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone</label>

                            <input name="phone" class="form-control" id="phone" value="{{ old('phone') }}">
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="message" class="form-label">Message</label>

                    <textarea name="message" class="form-control" id="message" rows="5">{{ old('message') }}</textarea>
                </div>

                <button type="submit" class="btn btn-primary rounded-pill">Send</button>
            </form>
        </div>
    </div>
@endsection
