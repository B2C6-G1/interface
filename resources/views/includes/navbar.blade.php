<nav class="bg-slate-700">
    <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
        <div class="relative flex items-center justify-between h-16">
            <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                <button type="button" id="mobile-menu-open-button"
                    class="inline-flex items-center justify-center p-2 rounded-md text-amber-400 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-amber-400"
                    aria-controls="mobile-menu" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="2" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="2" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">
                <div class="flex-shrink-0 flex items-center">
                    <img class="block lg:hidden h-8 w-auto"
                        src="{{ asset('brand/logo.png') }}" alt="Gamify">
                    <span class="text-white font-bold select-none text-lg hidden lg:hidden ml-5 xl:hidden">Gamify</span>
                    <img class="hidden lg:block h-8 w-auto"
                        src="{{ asset('brand/logo.png') }}"
                        alt="Gamify">
                    <span class="text-white font-bold select-none text-lg ml-5">Gamify</span>
                </div>
                <div class="hidden sm:block sm:ml-6">
                    <div class="flex space-x-4">
                        <a href="#" class="bg-slate-900 text-amber-400 px-3 py-2 rounded-md text-sm font-medium"
                            aria-current="page">Guilds</a>

                        <a href="#"
                            class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Teams</a>

                        <a href="#"
                            class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Levels</a>
                    </div>
                </div>
            </div>
            <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                <div class="bg-slate-900 h-8 w-8 rounded-full text-amber-400 flex items-center mr-3 xl:mr-0 lg:mr-0">
                    <span class="mx-auto">23</span>
                </div>

                <div class="bg-slate-600 rounded-md w-32 h-6 hidden lg:block md:block xl:block mx-3">
                    <div class="bg-amber-400 h-full text-xs font-medium text-blue-100 text-center p-0.5 leading-none rounded-md flex flex-col justify-center" style="width: 45%"> 45%</div>
                </div>

                <div class="relative">
                    <div>
                        <button type="button" id="user-menu-button"
                            class="bg-gray-800 flex text-sm rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-amber-400"
                            id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                            <span class="sr-only">Open user menu</span>
                            <img class="h-8 w-8 rounded-full"
                                src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                alt="">
                        </button>
                    </div>
                    <div id="user-menu" class="hidden text-white origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-slate-600 border border-slate-700 ring-1 ring-black ring-opacity-5 focus:outline-none"
                        role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                        <a href="#" class="block px-4 py-2 text-sm" role="menuitem" tabindex="-1"
                            id="user-menu-item-0">Profiel</a>
                        <a href="#" class="block px-4 py-2 text-sm" role="menuitem" tabindex="-1"
                            id="user-menu-item-2">Uitloggen</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="hidden" id="mobile-menu">
        <div class="px-2 pt-2 pb-3 space-y-1">
            <a href="#" class="bg-slate-900 text-amber-400 block px-3 py-2 rounded-md text-base font-medium"
                aria-current="page">Guilds</a>

            <a href="#"
                class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Teams</a>

            <a href="#"
                class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Levels</a>
        </div>
    </div>
</nav>
