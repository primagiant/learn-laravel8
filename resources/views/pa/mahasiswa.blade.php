<x-app-layout>
    <x-slot name="header">
        {{__('List Mahasiswa')}}
    </x-slot>

    <div>
        <div class="flex flex-col md:flex-row justify-between">
            <a href="{{ route('pa-add-mahasiswa') }}"
                class="py-2 px-4 bg-sidebar hover:bg-gray-600 text-white rounded-lg">
                <i class="fas fa-plus-circle mr-1.5"></i>
                <span>Tambah</span>
            </a>
            <div class="flex justify-end bg-gray-100 border shadow rounded-xl">
                <form action="" method="GET" class="flex justify-end rounded-full">
                    <button class="flex items-center justify-center px-2.5">
                        <i class="fas fa-search text-sm mx-1.5"></i>
                    </button>
                    <input type="text" name="keyword" autocomplete="none"
                        class="outiline-none border-none focus:ring-0 w-72" value="{{$keyword}}"
                        placeholder="Cari dengan NIM atau Nama" autofocus>
                </form>
                <form action="" method="GET" class="flex justify-end">
                    <input type="hidden" name="keyword" value="">
                    <button
                        class="transition duration-300 flex items-center justify-center px-2.5 hover:bg-red-600 rounded-r-xl hover:text-white">
                        <i class="fas fa-times-circle text-xs mx-1"></i>
                    </button>
                </form>
            </div>
        </div>
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
                            Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if (!$mahasiswa->isEmpty())
                    @foreach ($mahasiswa as $item)
                    <tr class="hover:bg-grey-lighter">
                        <td class="py-4 px-6 border-b border-grey-light">{{ $item->nim }}</td>
                        <td class="py-4 px-6 border-b border-grey-light">{{ $item['nama'] }}</td>
                        <td class="py-4 px-6 border-b border-grey-light">{{ $item['angkatan']->tahun }}</td>
                        <td class="py-4 px-6 border-b border-grey-light">{{ $item['prodi']->display_name }}</td>
                        <td class="py-4 px-6 border-b border-grey-light flex gap-1.5">
                            <div>
                                <a href="{{ route('show-mahasiswa-portofolio', ['id'=>$item->nim]) }}"
                                    class="text-white px-2 py-1.5 bg-green-500 hover:bg-green-600 rounded-full text-xs">
                                    <i class="fas fa-address-book"></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                    @else
                    <tr>
                        <td colspan="8" class="text-center py-4 px-6 border-b border-grey-light">
                            Tidak ada data mahasiswa
                        </td>
                    </tr>
                    @endif
                </tbody>
            </table>

            {{-- <div class="py-3 bg-white px-3 rounded-b-lg">
                {{$users->links()}}
            </div> --}}
        </div>
    </div>
</x-app-layout>
