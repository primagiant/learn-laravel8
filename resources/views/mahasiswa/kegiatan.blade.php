<x-app-layout>
    <x-slot name="header">
        {{__('List Kegiatan')}}
    </x-slot>

    <div>
        <div class="bg-white overflow-auto">
            <table class="text-left w-full border-collapse">
                <thead>
                    <tr class="bg-sidebar text-white">
                        <th
                            class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                            Jenis Kegiatan
                        </th>
                        <th
                            class="w-64 py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                            Referency Point
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($jenis_kegiatan as $j)
                    <tr class="hover:bg-grey-lighter">
                        <td class="py-4 px-6 border-b border-grey-light">{{ $j['nama'] }}</td>
                        <td class="py-4 px-6 border-b border-grey-light">{{ $j['ref_point'] }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="py-3 bg-white px-3 rounded-b-lg">
                {{$jenis_kegiatan->links()}}
            </div>
        </div>
    </div>
</x-app-layout>
