<x-app-layout>
    <x-slot name="header">
        {{__('Fakultas')}}
    </x-slot>

    <div>
        <a href="{{ route('add-fakultas') }}" class="py-2 px-4 bg-sidebar hover:bg-gray-600 text-white rounded-lg">
            <i class="fas fa-plus-circle mr-2"></i>
            <span>Tambah</span>
        </a>
        <div class="bg-white overflow-auto mt-3">
            <table class="text-left w-full border-collapse">
                <thead>
                    <tr class="bg-sidebar text-white">
                        <th
                            class="text-center py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                            Nama Fakultas
                        </th>
                        <th
                            class="text-center py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                            Deskripsi
                        </th>
                        <th
                            class="text-center w-64 py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                            Aksi
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($fakultas as $item)
                    <tr class="hover:bg-grey-lighter">
                        <td class="py-4 px-6 border-b border-grey-light text-center">{{$item['display_name']}}</td>
                        <td class="py-4 px-6 border-b border-grey-light text-center">{{$item['description']}}</td>
                        <td
                            class="py-4 px-6 border-b border-grey-light text-center flex items-center justify-center gap-2">
                            <form action="{{ route('delete-fakultas', ['id'=> $item['id']]) }}" method="post"
                                onsubmit="return confirm('Apakah anda yakin menghapus akun ini ?')">
                                @csrf
                                @method('delete')
                                <button type='submit' class="text-white px-2 py-1 bg-red-500 rounded-full text-xs">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                            <a href="{{ route('edit-fakultas', ['id'=>$item['id']]) }}"
                                class="text-white px-2 py-1 bg-yellow-500 rounded-full text-xs">
                                <i class="fas fa-pen"></i>
                            </a>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
            {{-- <div class="py-3 bg-white px-3 rounded-b-lg">
                {{$jenis_kegiatan->links()}}
            </div> --}}
        </div>
    </div>
</x-app-layout>
