<x-app-layout>
    <x-slot name="header">
        {{__('Pembimbing Akademik Dashboard')}}</strong>
    </x-slot>
    <div class="grid grid-cols-2 lg:grid-cols-4 gap-4">
        <div class="flex shadow rounded-lg">
            <div class="w-1.5 h-full bg-yellow-500 rounded-l-lg"></div>
            <div class="bg-gray-50 p-5 flex w-full justify-between rounded-r-lg">
                <div>
                    <p class="uppercase text-xs text-blue-500 font-semibold">Jumlah Point Terkumpul</p>
                    <p class="font-black font-quick text-xl">{{ $point }}</p>
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
            <div class="bg-white">
                <table class="w-full">
                    <tr class="border">
                        <td class="p-4">NIM</td>
                        <td class="p-4">:</td>
                        <td class="p-4">{{$mahasiswa->nim}}</td>
                    </tr>
                    <tr class="border">
                        <td class="p-4">Nama</td>
                        <td class="p-4">:</td>
                        <td class="p-4">{{Auth::user()->name}}</td>
                    </tr>
                    <tr class="border">
                        <td class="p-4">Email</td>
                        <td class="p-4">:</td>
                        <td class="p-4">{{Auth::user()->email}}</td>
                    </tr>
                    <tr class="border">
                        <td class="p-4">Angkatan</td>
                        <td class="p-4">:</td>
                        <td class="p-4">{{$angkatan}}</td>
                    </tr>
                    <tr class="border">
                        <td class="p-4">Program Studi</td>
                        <td class="p-4">:</td>
                        <td class="p-4">{{$prodi->display_name}}</td>
                    </tr>
                    <tr class="border">
                        <td class="p-4">Pembimbing Akademik</td>
                        <td class="p-4">:</td>
                        <td class="p-4">{{$pa->name}}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
