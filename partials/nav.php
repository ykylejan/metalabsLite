<nav x-data="{ isOpen: false }" class="relative bg-blue-600 shadow-xl py-2">
    <div class="container px-6 py-4 mx-auto md:flex md:justify-between md:items-center">
        <div class="flex items-center justify-between">


            <div class="flex justify-center items-center gap-x-2">

                <img class="h-10 w-auto" src="partials/metalabsLogo.png" alt="" />
                <a href="index.php" class="text-white text-3xl ">

                    meta<span class="font-bold">LABS LITE</span>
                </a>
            </div>


            <!-- Mobile menu button -->
            <div class="flex md:hidden">
                <button x-cloak @click="isOpen = !isOpen" type="button"
                    class="text-white hover:text-gray-600 focus:outline-none focus:text-gray-600 "
                    aria-label="toggle menu">
                    <svg x-show="!isOpen" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-white" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 8h16M4 16h16" />
                    </svg>

                    <svg x-show="isOpen" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-white" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>

        <div x-cloak :class="[isOpen ? 'translate-x-0 opacity-100 ' : 'opacity-0 -translate-x-full']"
            class="absolute inset-x-0 z-20 w-full px-6 py-4 transition-all duration-300 ease-in-out bg-blue-600 md:mt-0 md:p-0 md:top-0 md:relative md:bg-transparent md:w-auto md:opacity-100 md:translate-x-0 md:flex md:items-center">
            <div class="flex flex-col md:flex-row md:mx-6">
                <a class="hover:bg-blue-700 lg:px-[15px] lg:py-[5px] rounded-md my-2 text-white transition-colors duration-300 transform md:mx-4 md:my-0"
                    href="index.php">Home</a>
                <a class="hover:bg-blue-700 lg:px-[15px] lg:py-[5px] rounded-md my-2 text-white transition-colors duration-300 transform md:mx-4 md:my-0"
                    href="archives.php">Archives</a>
                <a class="hover:bg-blue-700 lg:px-[15px] lg:py-[5px] rounded-md my-2 text-white transition-colors duration-300 transform md:mx-4 md:my-0"
                    href="landing.php">About</a>
            </div>



        </div>



    </div>
</nav>