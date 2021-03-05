@extends('admin.layouts.app')

@section('pageHeader')
    <div class="d-flex align-items-center justify-content-between">
        <h1>Events</h1>

        <a class="btn btn-primary" href="{{ route('admin.events.create') }}">
            <i class="fas fa-plus"></i> Add
        </a>
    </div>
@endsection

@section('content')
    <div class="container">
        @if(session()->has('message'))
            <p class="alert alert-success">
                {{ session()->get('message') }}
            </p>
        @endif

        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col" class="text-center">Highlighted</th>
                    <th scope="col"></th>
                </tr>
            </thead>

            <tbody>
                @foreach($events as $event)
                    <tr>
                        <td>{{ $event->id }}</td>
                        <td>{{ $event->name }}</td>
                        <td class="text-center">
                            {{ $event->highlighted ? 'yes' : 'no' }}
                        </td>
                        <td>
                            <a class="btn btn-sm" href="{{ route('admin.events.show', $event) }}">
                                <i class="fas fa-eye"></i>
                            </a>

                            <a class="btn btn-sm" href="{{ route('admin.events.edit', $event) }}">
                                <i class="fas fa-edit"></i>
                            </a>


                            <form class="d-inline-block" method="POST"
                                  action="{{ route('admin.events.destroy', $event) }}">
                                @csrf
                                @method('DELETE')

                                <button class="btn btn-sm">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
