<x-app-layout>
    <x-slot name="header">
        {{__('List Pembimbing Akademik')}}
    </x-slot>

    <div>
        <a href="{{ route('add-pa') }}" class="py-2 px-4 bg-sidebar text-white rounded-lg">Tambah Pembimbing
            Akademik</a>
        <div class="bg-white overflow-auto mt-3 lg:w-8/12">
            <table class="text-left w-full border-collapse">
                <thead>
                    <tr class="bg-sidebar text-white">
                        <th
                            class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                            Name</th>
                        <th
                            class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                            Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pa as $item)
                    <tr class="hover:bg-grey-lighter">
                        <td class="py-4 px-6 border-b border-grey-light">
                            <a class="hover:underline" href="{{ route('detail-pa', ['id'=>$item['id']]) }}">{{
                                $item['name']
                                }}</a>
                        </td>
                        <td class="py-4 px-6 border-b border-grey-light">
                            <a onclick="return confirm('Apakah anda yakin menghapus akun ini ?')" href=""
                                class="text-white px-2 py-1 bg-red-500 rounded-full text-xs">Hapus Pembimbing Akademik
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            {{-- <div class="py-3 bg-white px-3 rounded-b-lg">
                {{$users->links()}}
            </div> --}}
        </div>
    </div>
</x-app-layout>
