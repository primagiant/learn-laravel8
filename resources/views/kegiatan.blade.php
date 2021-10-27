@php
use App\Models\KategoriKegiatan;
@endphp
<x-app-layout>
    <x-slot name="header">
        {{__('Kategori Kegiatan')}}
        <div class="flex justify-end mt-3 bg-gray-100 border shadow rounded-xl">
            <form action="" method="GET" class="flex justify-end rounded-full">
                <button class="flex items-center justify-center px-2.5">
                    <i class="fas fa-search text-sm mx-1.5"></i>
                </button>
                <input type="text" name="keyword" autocomplete="none"
                    class="outiline-none border-none focus:ring-0 w-72" value="{{$keyword}}" autofocus
                    placeholder="Cari Kategori">
            </form>
            <form action="" method="GET" class="flex justify-end">
                <input type="hidden" name="keyword" value="">
                <button
                    class="transition duration-300 flex items-center justify-center px-2.5 hover:bg-red-600 rounded-r-xl hover:text-white">
                    <i class="fas fa-times-circle text-xs mx-1"></i>
                </button>
            </form>
        </div>
    </x-slot>


    <div class="border">
        <div class="w-full bg-gray-50 overflow-auto">
            @if (!$kategori_kegiatan->isEmpty())
            @foreach ($kategori_kegiatan as $item)
            <div x-data={show:false} class="rounded-sm">
                <div class="border border-b-0 bg-white px-10 py-6" id="headingOne">
                    <button @click="show=!show" class="hover:text-blue-500 hover:underline" type="button">
                        {{ $item->nama }}
                    </button>
                </div>
                <div x-show="show" class="border border-b-0 px-10 py-6">
                    <table class="border border-b-0 bg-white px-10 py-6 w-full">
                        @foreach (KategoriKegiatan::find($item->id)->jenis_kegiatan as $jenis)
                        <tr class="border">
                            <td class="bg-white px-10 py-6">{{ $jenis->nama }}</td>
                            <td class="bg-white px-10 py-6">{{ $jenis->ref_point}}</td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
            @endforeach
            @else
            <div class="bg-white py-5 px-10 border">
                Data Kegiatan Tidak ada
            </div>
            @endif
        </div>
        @if (!$kategori_kegiatan->isEmpty())
        <div class="bg-white py-5 px-10 border">
            {{ $kategori_kegiatan->links() }}
        </div>
        @else @endif
    </div>

</x-app-layout>
