@php
use App\Models\KategoriKegiatan;
@endphp
<x-app-layout>
    <x-slot name="header">
        {{__('Kategori Kegiatan')}}
        <div class="flex justify-end mt-3">
            <form action="" method="GET" class="flex justify-end shadow rounded-full">
                <input type="text" name="keyword" autocomplete="none"
                    class="rounded-l-full border-none pl-4 focus:ring-0 w-72" value="{{$keyword}}" autofocus>
                <button class="flex items-center justify-center bg-sidebar text-white px-3 rounded-r-full">
                    <i class="fas fa-search text-xl"></i>
                </button>
            </form>
            <form action="" method="GET" class="flex justify-end">
                <input type="hidden" name="keyword" value="">
                <button class="flex items-center justify-center bg-red-300 text-white px-3 rounded-xl ml-3 shadow">
                    <i class="fas fa-backspace text-sm mx-1.5"></i>
                </button>
            </form>
        </div>
    </x-slot>


    <div class="border">
        <div class="w-full bg-gray-50 overflow-auto">
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
        </div>
        <div class="bg-white py-5 px-10 border">
            {{ $kategori_kegiatan->links() }}
        </div>
    </div>

</x-app-layout>
