<nav class="fixed w-full bg-avogg-dark shadow-lg font-semibold">
    <div class="w-full px-10">
        <div class="flex items-center justify-between">
            <div>
                <!-- Website Logo -->
                <a href="/" class="flex items-center py-4 px-2">
                    <img src="/logo-min.svg" alt="Logo" class="h-8 w-8 mr-2">
                </a>
            </div>
            <!-- Primary Navbar items -->
            <div class="hidden md:flex items-center text-sm space-x-5">
                <a href="tel:+351916267819" class="px-10 py-2 bg-avogg font-semibold rounded-md hover:bg-opacity-80">
                    +351 916267819
                </a>
                <a href="" class="text-gray-500 cursor-not-allowed">Avogg</a>
                <a href="/avogg-software">Avogg Software</a>
                <a href="" class="text-gray-500 cursor-not-allowed">Rocket Hosting</a>
            </div>
            <!-- Mobile menu button -->
            <div class="md:hidden flex items-center">
                <button class="outline-none mobile-menu-button">
                    <svg class=" w-6 h-6 text-gray-500 hover:text-avogg"
                         x-show="!showMenu"
                         fill="none"
                         stroke-linecap="round"
                         stroke-linejoin="round"
                         stroke-width="2"
                         viewBox="0 0 24 24"
                         stroke="currentColor"
                    >
                        <path d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>
    <!-- mobile menu -->
    <div class="hidden mobile-menu">
        <ul class="">
            <li class="active"><a href="tel:+351916267819" class="block text-sm px-2 py-4 text-white bg-avogg font-semibold">+351 916267819</a></li>
            <li><a href="#" class="block text-sm px-2 py-4 hover:bg-avogg transition duration-300 text-gray-500 cursor-not-allowed">Avogg</a></li>
            <li><a href="/avogg-software" class="block text-sm px-2 py-4 hover:bg-avogg transition duration-300">Avogg Software</a></li>
            <li><a href="#" class="block text-sm px-2 py-4 hover:bg-avogg transition duration-300 text-gray-500 cursor-not-allowed">Rocket Hosting</a></li>
        </ul>
    </div>
    <script>
        const btn = document.querySelector("button.mobile-menu-button");
        const menu = document.querySelector(".mobile-menu");

        btn.addEventListener("click", () => {
            menu.classList.toggle("hidden");
        });
    </script>
</nav>
