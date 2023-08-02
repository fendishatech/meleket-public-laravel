<header class="w-full">
    {{-- Banner --}}
    <div class="p-4 w-full flex justify-between items-center">
        {{-- Address --}}
        <div class="flex flex-col md:flex-row gap-2 md:gap-4 text-blue-900">
            <div class="flex gap-2 items-center">
                <i class="fa-solid fa-location-dot"></i>
                <p>Addis Ababa Ethiopia</p>
            </div>
            <div class="flex gap-2 items-center">
                <i class="fa-solid fa-envelope"></i>
                <p>meleketschool@gmail.com</p>
            </div>
            <div class="flex gap-2 items-center">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <p>+251 911 651652</p>
            </div>
        </div>
        {{-- Social --}}
        <div>
            <i
                class="fa-brands fa-facebook text-2xl p-1 rounded-full text-blue-900 hover:text-white hover:bg-blue-900"></i>
            <i
                class="fa-brands fa-twitter text-2xl p-1 rounded-full text-blue-900 hover:text-white hover:bg-blue-900"></i>
        </div>
    </div>
    {{-- Navbar --}}
    <nav
        class="px-10 md:px-24 py-6 bg-blue-900 flex flex-col justify-center items-center gap-y-4 md:flex-row md:justify-between md:gap-y-0">
        {{-- Logo --}}
        <div class="flex items-center">
            <img src="/images/logo/basic-logo.png" class="w-[81px] h-[81px]" alt="Logo">
            <div class="hidden md:flex flex-col">
                <p class="text-white text-xl">Meleket school</p>
                <p class="text-white text-xl">መለከት ትምህርት ቤት</p>
            </div>
        </div>
        {{-- Links --}}
        <ul class="flex items-center gap-4 text-white">
            <li><a href="/">Home</a></li>
            <li><a href="/about">About</a></li>
            <li><a href="/services">Services</a></li>
            <li><a href="/contact">Contact Us</a></li>
        </ul>
    </nav>
</header>
