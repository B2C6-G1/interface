@props(['span' => '1'])

<div class="col-span-{{ $span }}">
    {{ $slot }}
</div>