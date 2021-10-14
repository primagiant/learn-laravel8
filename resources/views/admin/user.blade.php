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
                    @foreach ($users as $user)
                    <tr class="hover:bg-grey-lighter">
                        <td class="py-4 px-6 border-b border-grey-light">{{ $user['name'] }}</td>
                        <td class="py-4 px-6 border-b border-grey-light">{{ $user['email'] }}</td>
                        <td class="py-4 px-6 border-b border-grey-light">{{ $user['role'] }}</td>
                        <td class="py-4 px-6 border-b border-grey-light">Aktif</td>
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
