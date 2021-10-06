<x-app-layout>
    <x-slot name="header">
        {{__('List Account User')}}
    </x-slot>

    <div>
        <div class="bg-white overflow-auto">
            <table class="text-left w-full border-collapse">
                <!--Border collapse doesn't work on this site yet but it's available in newer tailwind versions -->
                <thead>
                    <tr class="bg-blue-500 text-white">
                        <th
                            class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                            Name</th>
                        <th
                            class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                            Email</th>
                        <th
                            class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                            Role</th>
                        <th
                            class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                            Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="hover:bg-grey-lighter">
                        <td class="py-4 px-6 border-b border-grey-light">Lian</td>
                        <td class="py-4 px-6 border-b border-grey-light">jonsmith@mail.com</td>
                        <td class="py-4 px-6 border-b border-grey-light">Admin</td>
                        <td class="py-4 px-6 border-b border-grey-light">Aktif</td>
                    </tr>
                    <tr class="hover:bg-grey-lighter">
                        <td class="py-4 px-6 border-b border-grey-light">Juka</td>
                        <td class="py-4 px-6 border-b border-grey-light">jonsmith@mail.com</td>
                        <td class="py-4 px-6 border-b border-grey-light">Mahasiswa</td>
                        <td class="py-4 px-6 border-b border-grey-light">Aktif</td>
                    </tr>
                    <tr class="hover:bg-grey-lighter">
                        <td class="py-4 px-6 border-b border-grey-light">Tunas</td>
                        <td class="py-4 px-6 border-b border-grey-light">jonsmith@mail.com</td>
                        <td class="py-4 px-6 border-b border-grey-light">Mahasiswa</td>
                        <td class="py-4 px-6 border-b border-grey-light">Aktif</td>
                    </tr>
                    <tr class="hover:bg-grey-lighter">
                        <td class="py-4 px-6 border-b border-grey-light">Gogo</td>
                        <td class="py-4 px-6 border-b border-grey-light">jonsmith@mail.com</td>
                        <td class="py-4 px-6 border-b border-grey-light">Pembimbing Akademik</td>
                        <td class="py-4 px-6 border-b border-grey-light">Aktif</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
