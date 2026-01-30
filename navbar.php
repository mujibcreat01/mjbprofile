<nav id="navbar" class="w-full fixed px-5 lg:px-8 xl:px-[8%] py-4 flex items-center justify-between z-50">
        <p class="bg-white bg-opacity-50 backdrop-blur-lg shadow-sm dark:bg-darkTheme dark:shadow-white/20 sr-only">
            Hidden</p>
        <a href="#!">
            <img src="template/user/assets/logo.png" alt="Logo" class="w-28 cursor-pointer mr-14 dark:hidden" />
            <img src="template/user/assets/logo_dark.png" alt="Logo" class="w-28 cursor-pointer mr-14 hidden dark:block" />
        </a>

        <ul id="navLink"
            class="hidden md:flex items-center gap-6 lg:gap-8 rounded-full px-12 py-3 bg-white shadow-sm bg-opacity-50 font-Ovo dark:border dark:border-white/30 dark:bg-transparent ">
            <li><a class='hover:text-gray-500 dark:hover:text-gray-300 transition' href="#top">Home</a></li>
            <li><a class='hover:text-gray-500 dark:hover:text-gray-300 transition' href="#about">About me</a></li>
            <li><a class='hover:text-gray-500 dark:hover:text-gray-300 transition' href="#services">Servis load</a></li>
            <li><a class='hover:text-gray-500 dark:hover:text-gray-300 transition' href="#work">My life history</a></li>
            <li><a class='hover:text-gray-500 dark:hover:text-gray-300 transition' href="#contact">Contact me</a></li>
        </ul>

        <div class="flex items-center gap-4">
            <button onclick="toggleTheme()">
                <img src="template/user/assets/moon_icon.png" alt="" class="w-5 dark:hidden" />
                <img src="template/user/assets/sun_icon.png" alt="" class="w-5 hidden dark:block" />
            </button>

            <a href="#contact"
                class="hidden lg:flex items-center gap-3 px-8 py-1.5 border border-gray-300 hover:bg-slate-100/70 dark:hover:bg-darkHover rounded-full ml-4 font-Ovo dark:border-white/30">
                Contact
                <img src="template/user/assets/arrow-icon.png" alt="" class="w-3 dark:hidden" />
                <img src="template/user/assets/arrow-icon-dark.png" alt="" class="w-3 hidden dark:block" />
            </a>

            <button class="block md:hidden ml-3" onclick="openMenu()">
                <img src="template/user/assets/menu-black.png" alt="" class="w-6 dark:hidden" />
                <img src="template/user/assets/menu-white.png" alt="" class="w-6 hidden dark:block" />
            </button>

        </div>
        <!-- ----- mobile menu ------ -->
        <ul id="mobileMenu"
            class="flex md:hidden flex-col gap-4 py-20 px-10 fixed -right-64 top-0 bottom-0 w-64 z-50 h-screen bg-rose-50 transition duration-500 font-Ovo dark:bg-darkHover dark:text-white">

            <div class="absolute right-6 top-6" onclick="closeMenu()">
                <img src="template/user/assets/close-black.png" alt="" class="w-5 cursor-pointer dark:hidden" />
                <img src="template/user/assets/close-white.png" alt="" class="w-5 cursor-pointer hidden dark:block" />
            </div>

            <li><a href="#top" onclick="closeMenu()">Home</a></li>
            <li><a href="#about" onclick="closeMenu()">About me</a></li>
            <li><a href="#services" onclick="closeMenu()">Services load</a></li>
            <li><a href="#work" onclick="closeMenu()">My life history</a></li>
            <li><a href="#contact" onclick="closeMenu()">Contact me</a></li>
        </ul>
    </nav>