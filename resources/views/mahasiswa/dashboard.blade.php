<x-app-layout>
    <x-slot name="header">
        {{__('Profile')}} <strong>{{Auth::user()->name}}</strong>
    </x-slot>
    <div class="grid grid-cols-1 lg:grid-cols-2">
        <div class="bg-white">
            <table class="w-full">
                <tr class="border">
                    <td class="p-6 text-lg font-bold">
                        <span>Data Profile</span>
                    </td>
                </tr>
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
</x-app-layout>
