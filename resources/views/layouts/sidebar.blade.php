<aside class="relative bg-sidebar h-screen w-64 hidden sm:block shadow-xl">
    <div class="p-6">
        <a href="{{ route('dashboard') }}"
            class="text-center text-white text-3xl font-semibold uppercase hover:text-gray-300">{{config('app.name',
            'Laravel')}}</a>
    </div>
    <nav class="text-white text-base font-semibold pt-3">
        <a href="{{ route('dashboard') }}"
            class="{{(request()->routeIs('dashboard') ? 'active-nav-link ' : 'opacity-75 hover:opacity-100 ')}}flex items-center text-white py-4 pl-6 nav-item">
            <i class="fas fa-tachometer-alt mr-3"></i>
            Dashboard
        </a>
        <a href="{{ route('kegiatan') }}"
            class="{{(request()->routeIs('kegiatan') ? 'active-nav-link ' : 'opacity-75 hover:opacity-100 ')}}flex items-center text-white py-4 pl-6 nav-item">
            <i class="fas fa-calendar mr-3"></i>
            Kegiatan
        </a>

        {{-- Admin --}}
        @if (Auth::user()->hasRole('admin'))
        <a href="{{ route('admin-mahasiswa') }}"
            class="{{(request()->routeIs('admin-mahasiswa') ? 'active-nav-link ' : 'opacity-75 hover:opacity-100 ')}}flex items-center text-white py-4 pl-6 nav-item">
            <i class="fas fa-table mr-3"></i>
            Mahasiswa
        </a>
        <a href="{{ route('admin-pa') }}"
            class="{{(request()->routeIs('admin-pa') ? 'active-nav-link ' : 'opacity-75 hover:opacity-100 ')}}flex items-center text-white py-4 pl-6 nav-item">
            <i class="fas fa-table mr-3"></i>
            Pembimbing Akademik
        </a>
        <a href="{{ route('admin-fakultas') }}"
            class="{{(request()->routeIs('admin-fakultas') ? 'active-nav-link ' : 'opacity-75 hover:opacity-100 ')}}flex items-center text-white py-4 pl-6 nav-item">
            <i class="fas fa-hotel mr-3"></i>
            Fakultas
        </a>
        <a href="{{ route('admin-prodi') }}"
            class="{{(request()->routeIs('admin-prodi') ? 'active-nav-link ' : 'opacity-75 hover:opacity-100 ')}}flex items-center text-white py-4 pl-6 nav-item">
            <i class="fas fa-door-open mr-3"></i>
            Prodi
        </a>
        <a href="{{ route('admin-angkatan') }}"
            class="{{(request()->routeIs('admin-angkatan') ? 'active-nav-link ' : 'opacity-75 hover:opacity-100 ')}}flex items-center text-white py-4 pl-6 nav-item">
            <i class="fas fa-suitcase mr-3"></i>
            Angkatan
        </a>
        @endif

        {{-- Pembimbing Akademik --}}
        @if (Auth::user()->hasRole('pa'))
        <a href="{{ route('pa-mahasiswa') }}"
            class="{{(request()->routeIs('pa-mahasiswa') ? 'active-nav-link ' : 'opacity-75 hover:opacity-100 ')}}flex items-center text-white py-4 pl-6 nav-item">
            <i class="fas fa-sticky-note mr-3"></i>
            Mahasiswa
        </a>
        @endif

        {{-- Mahasiswa --}}
        @if (Auth::user()->hasRole('mahasiswa'))
        <a href="{{ route('portofolio', ['id' => Auth::user()->id]) }}"
            class="{{(request()->routeIs('portofolio') ? 'active-nav-link ' : 'opacity-75 hover:opacity-100 ')}}flex items-center text-white py-4 pl-6 nav-item">
            <i class="fas fa-sticky-note mr-3"></i>
            Portofolio
        </a>
        @endif
    </nav>

</aside>
