<x-app-layout>
    <x-slot name="header">
        {{__('Profile')}} <strong>{{Auth::user()->name}}</strong>
    </x-slot>
    <div class="grid grid-cols-2 lg:grid-cols-4 gap-4">
        <div class="flex shadow rounded-lg">
            <div class="w-1.5 h-full bg-yellow-500 rounded-l-lg"></div>
            <div class="bg-gray-50 p-5 flex w-full justify-between rounded-r-lg">
                <div>
                    <p class="uppercase text-xs text-blue-500 font-semibold">Jumlah Mahasiswa</p>
                    <p class="font-black font-quick text-xl">
                        {{$pa->mahasiswa->count()}}
                        Mahasiswa
                    </p>
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
    <div>
        <div class="grid md:grid-cols-2 mt-4">
            <div class="bg-gray-50">
                <table class="w-full">
                    <tr class="border">
                        <td class="p-6 text-lg font-bold">
                            <span>Data Profile</span>
                        </td>
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
                        <td class="p-4">Login Sebagai</td>
                        <td class="p-4">:</td>
                        <td class="p-4">{{Auth::user()->roles->first()->display_name}}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
