@props(['first' => false])

<td class="{{ $first ? 'whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-white sm:pl-6' : 'whitespace-nowrap px-3 py-4 text-sm text-white' }}">
    {{ $slot }}
</td>