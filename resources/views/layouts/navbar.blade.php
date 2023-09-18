<!-- Section Header Menu -->
<section class="w-full overflow-hidden bg-gray-100">
    <nav x-data="{ isOpen: false }" class="relative py-6 px-12 mx-auto max-w-7xl lg:flex lg:justify-between lg:items-center">
        <div class="relative z-20 flex items-center justify-between ml-0 md:ml-1 lg:ml-2">
            <a href="/"
                class="flex items-center relative -mt-0.5 order-first font-medium text-gray-900 lg:order-none lg:w-auto title-font lg:items-center lg:justify-center">
                <span class="text-xl font-black leading-none text-black-500 select-none logo">Bibit digital</span>
            </a>

            <!-- Mobile menu button -->
            <div @click="isOpen = !isOpen" class="flex lg:hidden">
                <button type="button" class="text-gray-500 hover:text-gray-600 focus:outline-none focus:text-gray-600"
                    aria-label="toggle menu">
                    <svg class="w-6 h-6 text-gray-400 hover:text-gray-900 mt-0.5" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h7"></path>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
        <div :class="{ 'hidden': !isOpen }"
            class="absolute left-0 z-10 items-center justify-between w-full h-full font-medium lg:justify-center lg:flex px-6">
            <div
                class="flex flex-col p-5 mt-4 space-y-5 text-lg bg-white rounded-lg shadow-xl lg:text-base lg:space-y-0 lg:shadow-none lg:bg-transparent lg:rounded-none lg:p-0 lg:mt-0 lg:flex-row lg:space-x-10 xl:space-x-16">
                <a href="#" class="text-gray-700 transition duration-150 ease-out hover:text-purple-500"></a>
                <a href="#" class="text-gray-700 transition duration-150 ease-out hover:text-purple-500"></a>
            </div>
        </div>
        <div class="relative z-20 items-center hidden mt-4 space-x-5 font-medium lg:flex xl:space-x-6 lg:mt-0">
        </div>
    </nav>
