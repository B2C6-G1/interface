@props(['headers'])

<div>
    <div class="mt-8 flex flex-col">
        <div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                <div class="overflow-hidden shadow">
                    <table class="min-w-full divide-y divide-slate-600">
                        <thead class="bg-slate-800">
                            <tr>
                                {{ $headers }}
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-600 bg-slate-700">
                            {{ $slot }}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
