<header class="bg-white dark:bg-gray-900" style="font-family: 'Bebas Neue', cursive;">
    <div class="mx-auto flex h-16 max-w-screen-xl items-center gap-8 px-4 sm:px-6 lg:px-8">
        <a class="block text-teal-600 dark:text-teal-300" href="#">
            <span class="sr-only">Home</span>
            <img src="{{ asset('/img/icon/logoSKC.png') }}" alt="icon" class="h-8">
        </a>

        <div class="flex flex-1 items-center justify-end md:justify-between">
            <nav aria-label="Global" class="hidden md:block">
                <ul class="flex items-center gap-6 text-xl">
                    <li>
                        <a class="text-gray-500 transition hover:text-gray-500/75 dark:text-white dark:hover:text-white/75"
                            href="/">
                            Home
                        </a>
                    </li>

                    <li>
                        <a class="text-gray-500 transition hover:text-gray-500/75 dark:text-white dark:hover:text-white/75"
                            href="#">
                            About
                        </a>
                    </li>

                    <li>
                        <a class="text-gray-500 transition hover:text-gray-500/75 dark:text-white dark:hover:text-white/75"
                            href="https://www.smkkesehatancirebon.sch.id/">
                            Official
                        </a>
                    </li>
                </ul>
            </nav>

            <div class="flex items-center gap-4">
                <button id="menu-toggle"
                    class="block rounded-sm bg-gray-100 p-2.5 text-gray-600 transition hover:text-gray-600/75 md:hidden dark:bg-gray-800 dark:text-white dark:hover:text-white/75">
                    <span class="sr-only">Toggle menu</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="size-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>

                <div id="mobile-menu"
                    class="hidden absolute top-16 left-0 w-full bg-white shadow-md dark:bg-gray-900 md:hidden transition-all duration-300"
                    style="z-index: 999">
                    <nav class="p-4 space-y-2">
                        <a href="/"
                            class="block px-4 py-2 text-gray-700 hover:bg-gray-200 dark:text-white dark:hover:bg-gray-700">Home</a>
                        <a href="#"
                            class="block px-4 py-2 text-gray-700 hover:bg-gray-200 dark:text-white dark:hover:bg-gray-700">About</a>
                        <a href="https://www.smkkesehatancianjur.sch.id/"
                            class="block px-4 py-2 text-gray-700 hover:bg-gray-200 dark:text-white dark:hover:bg-gray-700">Official</a>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
