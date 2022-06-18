@props(['header' => null, 'description' => null])

<div class="bg-slate-800 shadow overflow-hidden sm:rounded-lg">
    <div class="px-4 py-5 sm:px-6 bg-slate-700">
        @if(isset($header))
            <h3 class="text-lg leading-6 font-medium text-white">
                {{ $header }}
            </h3>
        @endif
        @if(isset($description))
            <p class="mt-1 max-w-2xl text-sm text-white">
                {{ $description }}
            </p>
        @endif
    </div>
    <div class="border-t border-slate-600 px-4 py-5">
        {{ $slot }}
    </div>
</div>
