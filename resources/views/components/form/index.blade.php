@props(['action', 'files' => false, 'method' => 'POST'])

<form method="POST" action="{{ $action }}" {{ $files ? 'enctype="multipart/form-data"' : '' }}>
    @csrf

    @if(in_array(strtoupper($method), ['DELETE', 'PUT', 'PATCH']))
        @method($method)
    @endif

    {{ $slot }}
</form>