<aside class="relative bg-sidebar h-screen w-64 hidden sm:block shadow-xl">
    <div class="p-6">
        <a href="{{ route('dashboard') }}" class="text-center text-white text-3xl font-semibold uppercase hover:text-gray-300">{{config('app.name', 'Laravel')}}</a>
    </div>
    <nav class="text-white text-base font-semibold pt-3">
        <a href="{{ route('dashboard') }}" class="{{(request()->routeIs('dashboard') ? 'active-nav-link ' : 'opacity-75 hover:opacity-100 ')}}flex items-center text-white py-4 pl-6 nav-item">
            <i class="fas fa-tachometer-alt mr-3"></i>
            Dashboard
        </a>
        <a href="{{ route('dashboard') }}" class="{{(request()->routeIs('dashboard') ? 'active-nav-link ' : 'opacity-75 hover:opacity-100 ')}}flex items-center text-white py-4 pl-6 nav-item">
            <i class="fas fa-sticky-note mr-3"></i>
            Portofolio
        </a>
        <a  href="{{ route('dashboard') }}" class="{{(request()->routeIs('dashboard') ? 'active-nav-link ' : 'opacity-75 hover:opacity-100 ')}}flex items-center text-white py-4 pl-6 nav-item">
            <i class="fas fa-table mr-3"></i>
            Mahasiswa
        </a>
        <a href="{{ route('dashboard') }}" class="{{(request()->routeIs('dashboard') ? 'active-nav-link ' : 'opacity-75 hover:opacity-100 ')}}flex items-center text-white py-4 pl-6 nav-item">
            <i class="fas fa-code mr-3"></i>
            Pembimbing Akademik
        </a>
        <a href="{{ route('dashboard') }}" class="{{(request()->routeIs('dashboard') ? 'active-nav-link ' : 'opacity-75 hover:opacity-100 ')}}flex items-center text-white py-4 pl-6 nav-item">
            <i class="fas fa-calendar mr-3"></i>
            Kegiatan
        </a>
    </nav>

</aside>
