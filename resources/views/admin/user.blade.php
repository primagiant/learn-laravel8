<x-app-layout>
    <x-slot name="header">
        {{__('List Account User')}}
    </x-slot>

    <div>
        <a href="{{ route('register') }}" class="py-2 px-4 bg-sidebar text-white rounded-lg">Tambah Akun</a>
        <div class="bg-white overflow-auto mt-3">
            <table class="text-left w-full border-collapse">
                <!--Border collapse doesn't work on this site yet but it's available in newer tailwind versions -->
                <thead>
                    <tr class="bg-sidebar text-white">
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
                        <th
                            class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                            Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    <tr class="hover:bg-grey-lighter">
                        <td class="py-4 px-6 border-b border-grey-light">{{ $user['name'] }}</td>
                        <td class="py-4 px-6 border-b border-grey-light">{{ $user['email'] }}</td>
                        <td class="py-4 px-6 border-b border-grey-light">{{ $user['role'] }}</td>
                        <td class="py-4 px-6 border-b border-grey-light">Aktif</td>
                        <td class="py-4 px-6 border-b border-grey-light">
                            <a onclick="return confirm('Apakah anda yakin menghapus akun ini ?')" href=""
                                class="text-white px-2 py-1 bg-red-500 rounded-full text-xs">Hapus
                                Akun
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            @if (count($users) > 5)
            <div class="py-3 bg-white px-3 rounded-b-lg">
                {{$users->links()}}
            </div>
            @endif
        </div>
    </div>
</x-app-layout>
