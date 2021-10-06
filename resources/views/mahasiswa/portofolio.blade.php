<x-app-layout>
    <x-slot name="header">
        {{__('Portofolio')}} <strong>{{Auth::user()->name}}</strong>
    </x-slot>
    <div>
        <div class="mb-3">
            <button class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded-lg text-md">Tambah
                Kegiatan</button>
        </div>
        <div class="bg-white overflow-auto">
            <table class="text-left w-full border-collapse">
                <!--Border collapse doesn't work on this site yet but it's available in newer tailwind versions -->
                <thead>
                    <tr class="bg-blue-500 text-white">
                        <th
                            class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                            #</th>
                        <th
                            class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                            Nama Kegiatan</th>
                        <th
                            class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                            Tahun</th>
                        <th
                            class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                            Smt</th>
                        <th
                            class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                            Valid Point</th>
                        <th
                            class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                            Bukti</th>
                        <th
                            class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                            Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="hover:bg-grey-lighter">
                        <td class="py-4 px-6 border-b border-grey-light">1</td>
                        <td class="py-4 px-6 border-b border-grey-light">Test 1</td>
                        <td class="py-4 px-6 border-b border-grey-light">2021</td>
                        <td class="py-4 px-6 border-b border-grey-light">3</td>
                        <td class="py-4 px-6 border-b border-grey-light">10</td>
                        <td class="py-4 px-6 border-b border-grey-light">
                            <a href="#"
                                class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded-lg text-sm">Lihat
                                Bukti</a>
                        </td>
                        <td class="py-4 px-6 border-b border-grey-light">Verified</td>
                    </tr>
                    <tr class="hover:bg-grey-lighter">
                        <td class="py-4 px-6 border-b border-grey-light">2</td>
                        <td class="py-4 px-6 border-b border-grey-light">Test 2</td>
                        <td class="py-4 px-6 border-b border-grey-light">2021</td>
                        <td class="py-4 px-6 border-b border-grey-light">3</td>
                        <td class="py-4 px-6 border-b border-grey-light">12</td>
                        <td class="py-4 px-6 border-b border-grey-light">
                            <a href="#"
                                class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded-lg text-sm">Lihat
                                Bukti</a>
                        </td>
                        <td class="py-4 px-6 border-b border-grey-light">Verified</td>
                    </tr>
                    <tr class="hover:bg-grey-lighter">
                        <td class="py-4 px-6 border-b border-grey-light">3</td>
                        <td class="py-4 px-6 border-b border-grey-light">Test 3</td>
                        <td class="py-4 px-6 border-b border-grey-light">2021</td>
                        <td class="py-4 px-6 border-b border-grey-light">3</td>
                        <td class="py-4 px-6 border-b border-grey-light">15</td>
                        <td class="py-4 px-6 border-b border-grey-light">
                            <a href="#"
                                class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded-lg text-sm">Lihat
                                Bukti</a>
                        </td>
                        <td class="py-4 px-6 border-b border-grey-light">Verified</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
