<header x-data="{ isOpen: false }" class="w-full bg-sidebar py-5 px-6 sm:hidden">
    <div class="flex items-center justify-between">
        <a href="index.html" class="text-white text-3xl font-semibold uppercase hover:text-gray-300">PORTO</a>
        <button @click="isOpen = !isOpen" class="text-white text-3xl focus:outline-none">
            <i x-show="!isOpen" class="fas fa-bars"></i>
            <i x-show="isOpen" class="fas fa-times"></i>
        </button>
    </div>

    <!-- Dropdown Nav -->
    <nav :class="isOpen ? 'flex': 'hidden'" class="flex flex-col pt-4">
        <a href="{{ route('dashboard') }}"
            class="{{(request()->routeIs('dashboard') ? 'active-nav-link ' : 'opacity-75 hover:opacity-100 ')}}flex items-center text-white py-2 pl-4 nav-item">
            <i class="fas fa-tachometer-alt mr-3"></i>
            Dashboard
        </a>
        <a href="{{ route('kegiatan') }}"
            class="{{(request()->routeIs('kegiatan') ? 'active-nav-link ' : 'opacity-75 hover:opacity-100 ')}}flex items-center text-white py-2 pl-4 nav-item">
            <i class="fas fa-calendar mr-3"></i>
            Kegiatan
        </a>

        {{-- Admin --}}
        @if (Auth::user()->hasRole('admin'))

        @endif

        {{-- Mahasiswa --}}
        @if (Auth::user()->hasRole('mahasiswa'))
        <a href="{{ route('portofolio') }}"
            class="{{(request()->routeIs('portofolio') ? 'active-nav-link ' : 'opacity-75 hover:opacity-100 ')}}flex items-center text-white py-2 pl-4 nav-item">
            <i class="fas fa-sticky-note mr-3"></i>
            Portofolio
        </a>
        @endif

        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit"
                class="w-full flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-4 nav-item">
                <i class="fas fa-sign-out-alt mr-3"></i>
                Sign Out
            </button>
        </form>
    </nav>

</header>
