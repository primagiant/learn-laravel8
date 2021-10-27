<x-app-layout>
    <x-slot name="header">
        {{__("Admin Dashboard") }}
    </x-slot>

    <div class="grid grid-cols-2 lg:grid-cols-4 gap-4">
        <div class="flex shadow rounded-lg">
            <div class="w-1.5 h-full bg-yellow-500 rounded-l-lg"></div>
            <div class="bg-gray-50 p-5 flex w-full justify-between rounded-r-lg">
                <div>
                    <p class="uppercase text-xs text-blue-500 font-semibold">Jumlah User</p>
                    <p class="font-black font-quick text-xl">{{ \App\Models\User::all()->count() }} Orang</p>
                </div>
                <div>
                    <i class="fas fa-address-card fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
        <div class="flex shadow rounded-lg">
            <div class="w-1.5 h-full bg-green-500 rounded-l-lg"></div>
            <div class="bg-gray-50 p-5 flex w-full justify-between rounded-r-lg">
                <div>
                    <p class="uppercase text-xs text-blue-500 font-semibold">Hari / Tanggal</p>
                    <p id="date" class="font-black font-quick text-lg"></p>
                </div>
                <div>
                    <i class="fas fa-calendar fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
        <div class="flex shadow rounded-lg">
            <div class="w-1.5 h-full bg-red-500 rounded-l-lg"></div>
            <div class="bg-gray-50 p-5 flex w-full justify-between rounded-r-lg">
                <div>
                    <p class="uppercase text-xs text-blue-500 font-semibold">Waktu</p>
                    <p id="times" class="font-black font-quick text-xl"></p>
                </div>
                <div>
                    <i class="fas fa-clock fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-4 shadow lg:w-1/2" x-data={show:true}>
        <!-- Card Header - Accordion -->
        <button type="button" @click="show=!show" class="text-left bg-gray-50 py-3 px-8 w-full rounded-t-lg">
            <h6 class="font-bold text-blue-500">Selamat Datang User {{ Auth::user()->name }}</h6>
        </button>
        <!-- Card Content - Collapse -->
        <div x-show="show" class="rounded-lg">
            <div class="bg-white py-6 px-8">
                <p>Sistem Portofolio Mahasiswa</p>
                <ul>
                    <li class="mt-1.5">Username Anda Adalah <span class="font-bold text-blue-500">{{ Auth::user()->email
                            }}</span></li>
                    <li class="mt-1.5">Anda Login Sebagai <span
                            class="font-bold text-blue-500">{{Auth::user()->roles->first()->display_name}}</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</x-app-layout>
