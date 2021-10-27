<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="author" content="Prima Giant">
    <title>{{config('app.name', 'Laravel')}}</title>

    <!-- Tailwind -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Karla:400,700&display=swap');

        .font-family-karla {
            font-family: karla;
        }

        .bg-sidebar {
            /* background: #3d68ff; */
            background: #091353;
        }

        .cta-btn {
            /* color: #3d68ff; */
            color: #091353;
        }

        .active-nav-link {
            /* background: #1947ee; */
            background: #D5D5D5;
            color: #091353;
        }

        .nav-item:hover {
            /* background: #1947ee; */
            background: #c0c0c0;
            color: #091353;
        }

        .account-link:hover {
            /* background: #3d68ff; */
            background: #091353;
        }
    </style>
</head>

<body class="bg-gray-100 font-family-karla flex">
    {{-- Side Bar --}}
    @include('layouts.sidebar')
    <div class="relative w-full flex flex-col h-screen overflow-y-hidden">
        {{-- Navbar --}}
        @include('layouts.navbar')

        <!-- Mobile Header & Nav -->
        @include('layouts.mobileNavbar')

        <div class="w-full h-screen overflow-x-hidden border-t flex flex-col">
            <main class="w-full flex-grow p-6">
                <div class="text-3xl text-black pb-6 flex flex-col md:flex-row justify-between items-center">
                    {{$header}}
                </div>

                {{$slot}}
            </main>

            <footer class="w-full bg-white text-right p-4">
                Copyright 2021
            </footer>
        </div>

    </div>

    <!-- AlpineJS -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"
        integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
    <!-- My Js -->
    <script src="{{ asset('js/times.js') }}"></script>
</body>

</html>
