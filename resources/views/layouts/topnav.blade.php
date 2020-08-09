<nav class="absolute w-full z-50" style="background-color: #12055f;">
  <div x-data="{ open: false }" class="container mx-auto px-6 py-2 flex justify-between items-center text-white">
    <div class="relative pt-4 px-4 sm:px-6 lg:px-8 w-full">
        <nav class="relative flex items-center justify-between sm:h-10 lg:justify-start">
        <div class="flex items-center flex-grow flex-shrink-0 lg:flex-grow-0">
            <div class="flex items-center justify-between w-full md:w-auto">
            <a href="#" aria-label="Home">
                <img class="h-8 w-auto sm:h-10" src="viya-1.svg" alt="Logo">
            </a>
            <div class="-mr-2 flex items-center md:hidden">
                <button @click="open = true" type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out" id="main-menu" aria-label="Main menu" aria-haspopup="true" x-bind:aria-expanded="open">
                <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
                </button>
            </div>
            </div>
        </div>
        <div class="hidden md:block md:ml-10 md:pr-4">
            <a href="#" class="font-medium text-white hover:text-indigo-600 transition duration-150 ease-in-out">Home</a>
            <a href="#feature" class="ml-8 font-medium text-white hover:text-indigo-600 transition duration-150 ease-in-out">Features</a>
            <a href="#stake" class="ml-8 font-medium text-white hover:text-indigo-600 transition duration-150 ease-in-out">Staking</a>
            <a href="#join" class="ml-8 font-medium text-white hover:text-indigo-600 transition duration-150 ease-in-out">Contact</a>
            <!-- <a href="#" class="ml-8 font-medium text-indigo-600 hover:text-indigo-600 transition duration-150 ease-in-out">Log in</a> -->
        </div>
        </nav>
    </div>

    <div x-show="open" x-description="Mobile menu, show/hide based on menu open state." x-transition:enter="duration-150 ease-out" x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100" x-transition:leave="duration-100 ease-in" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95" class="absolute top-0 inset-x-0 p-2 transition transform origin-top-right md:hidden z-20" style="display: none;">
        <div class="rounded-lg shadow-md">
        <div class="rounded-lg bg-white shadow-xs overflow-hidden" role="menu" aria-orientation="vertical" aria-labelledby="main-menu">
            <div class="px-5 pt-4 flex items-center justify-between">
            <div>
                <img class="h-8 w-auto" src="viya-1.svg" alt="VIYA">
            </div>
            <div class="-mr-2">
                <button @click="open = false" type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-indigo-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out" aria-label="Close menu">
                <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
                </button>
            </div>
            </div>
            <div class="px-2 pt-2 pb-3">
            <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-indigo-700 hover:text-gray-900 hover:bg-gray-50 focus:outline-none focus:text-gray-900 focus:bg-gray-50 transition duration-150 ease-in-out" role="menuitem">Home</a>
            <a href="#" class="mt-1 block px-3 py-2 rounded-md text-base font-medium text-indigo-700 hover:text-gray-900 hover:bg-gray-50 focus:outline-none focus:text-gray-900 focus:bg-gray-50 transition duration-150 ease-in-out" role="menuitem">Features</a>
            <a href="#" class="mt-1 block px-3 py-2 rounded-md text-base font-medium text-indigo-700 hover:text-gray-900 hover:bg-gray-50 focus:outline-none focus:text-gray-900 focus:bg-gray-50 transition duration-150 ease-in-out" role="menuitem">Staking</a>
            <a href="#" class="mt-1 block px-3 py-2 rounded-md text-base font-medium text-indigo-700 hover:text-gray-900 hover:bg-gray-50 focus:outline-none focus:text-gray-900 focus:bg-gray-50 transition duration-150 ease-in-out" role="menuitem">Contact</a>
            </div>
            <div>
            <a href="#" class="block w-full px-5 py-3 text-center font-medium text-indigo-600 bg-gray-50 hover:bg-gray-100 hover:text-indigo-700 focus:outline-none focus:bg-gray-100 focus:text-indigo-700 transition duration-150 ease-in-out" role="menuitem">
                Log in
            </a>
            </div>
        </div>
        </div>
    </div>
</nav>