@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@csrf

<div class="form-group">
    <label for="name">Name</label>

    <input class="form-control" type="text" name="name" id="name" value="{{ old('name', $event->name ?? null) }}">
</div>

<div class="form-group">
    <label for="description">Description</label>

    <input class="form-control" type="text" name="description" id="description"
           value="{{ old('description', $event->description ?? null) }}">
</div>

<div class="form-group">
    <label for="observations">Observations</label>

    <textarea class="form-control" name="observations" id="observations"
              rows="5">{{ old('observations', $event->observations ?? null) }}</textarea>
</div>

<button class="btn btn-primary">Save</button>
