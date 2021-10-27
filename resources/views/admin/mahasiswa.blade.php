<x-app-layout>
    <x-slot name="header">
        {{__('List Mahasiswa')}}
    </x-slot>

    <div>
        <a href="{{ route('add-mahasiswa') }}" class="py-2 px-4 bg-sidebar hover:bg-gray-600 text-white rounded-lg">
            <i class="fas fa-plus-circle mr-1.5"></i>
            <span>Tambah</span>
        </a>
        <div class="bg-white overflow-auto mt-3">
            <table class="text-left w-full border-collapse">
                <thead>
                    <tr class="bg-sidebar text-white">
                        <th
                            class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                            NIM</th>
                        <th
                            class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                            Name</th>
                        <th
                            class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                            Angkatan</th>
                        <th
                            class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                            Prodi</th>
                        <th
                            class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                            Pembimbing Akademik</th>
                        <th
                            class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                            Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if (!$mahasiswa->isEmpty())
                    @foreach ($mahasiswa as $item)
                    <tr class="hover:bg-grey-lighter">
                        <td class="py-4 px-6 border-b border-grey-light">{{ $item->nim }}</td>
                        <td class="py-4 px-6 border-b border-grey-light">{{ $item->nama }}</td>
                        <td class="py-4 px-6 border-b border-grey-light">{{ $item->angkatan->tahun }}</td>
                        <td class="py-4 px-6 border-b border-grey-light">{{ $item->prodi->display_name }}</td>
                        <td class="py-4 px-6 border-b border-grey-light">{{ $item->pa->name }}</td>
                        <td class="py-4 px-6 border-b border-grey-light">
                            <form action="{{ route('delete-mahasiswa', ['id'=>$item->nim]) }}" method="POST"
                                class="inline">
                                @csrf
                                @method('delete')
                                <button onclick="return confirm('Apakah anda yakin menghapus akun ini ?')" href=""
                                    class="text-white px-2 py-1.5 bg-red-500 hover:bg-red-600 rounded-full text-xs">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                            <a onclick="return confirm('Apakah anda yakin mengedit akun ini ?')"
                                href="{{ route('edit-mahasiswa', ['id'=>$item->nim]) }}"
                                class="ml-1.5 text-white px-2 py-1.5 bg-yellow-500 hover:bg-yellow-600 rounded-full text-xs">
                                <i class="fas fa-edit"></i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                    @else
                    <tr>
                        <td colspan="8" class="text-center py-4 px-6 border-b border-grey-light">
                            Tidak ada Data Mahasiswa
                        </td>
                    </tr>
                    @endif
                </tbody>
            </table>

            {{-- <div class="py-3 bg-white px-3 rounded-b-lg">
                {{$mahasiswa->links()}}
            </div> --}}
        </div>
    </div>
</x-app-layout>
