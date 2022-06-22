@props(['cols'])

<div class="grid grid-cols-{{ $cols }}">
    {{ $slot }}
</div>