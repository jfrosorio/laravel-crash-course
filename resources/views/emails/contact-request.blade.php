@component('mail::message')

**ID:** {{ $contactRequest->id }}

**Name:** {{ $contactRequest->name }}

**Email:** {{ $contactRequest->email }}

**Phone:** {{ $contactRequest->phone }}

**Message:** {{ $contactRequest->message }}

@component('mail::button', ['url' => config('app.url')])
Visit us soon!
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
