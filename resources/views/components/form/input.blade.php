@props(['name', 'placeholder', 'type'])

<div>
    <label for="{{ $name }}" class="block text-sm font-medium text-white mb-2">{{ $placeholder }}</label>
    <div class="mt-1">
        <input type="{{ $type }}" name="{{ $name }}" id="{{ $name }}"
            class="bg-slate-600 shadow-sm focus:ring-amber-500 focus:border-amber-500 block w-full sm:text-sm rounded-md p-2 text-white"
            placeholder="{{ $placeholder }}">
    </div>
</div>
