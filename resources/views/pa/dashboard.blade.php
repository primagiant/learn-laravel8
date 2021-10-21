<x-app-layout>
    <x-slot name="header">
        {{__('Profile')}} <strong>{{Auth::user()->name}}</strong>
    </x-slot>
    <div class="grid md:grid-cols-2">
        <div class="bg-white">
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
            </table>
        </div>
    </div>
</x-app-layout>
