@props(['first' => false])

<th scope="col" class="{{ $first ? 'py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-white sm:pl-6' : 'px-3 py-3.5 text-left text-sm font-semibold text-white' }}">
    {{ $slot }}
</th>