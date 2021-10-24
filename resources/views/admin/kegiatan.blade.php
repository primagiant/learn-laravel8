@php
use App\Models\KategoriKegiatan;
@endphp
<x-app-layout>
    <x-slot name="header">
        {{__('Kategori Kegiatan')}}
    </x-slot>

    <div class="border">
        <div class="w-full bg-white overflow-auto">
            @foreach ($kategori_kegiatan as $item)
            <div x-data={show:false} class="rounded-sm">
                <div class="border border-b-0 bg-white px-10 py-6" id="headingOne">
                    <button @click="show=!show" class="underline text-blue-500 hover:text-blue-700 focus:outline-none"
                        type="button">
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
