<x-app-layout>
    <x-slot name="header">
        {{__("Validasi Portofolio Mahasiswa") }}
    </x-slot>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
        <div>
            <div class="bg-gray-50 p-4 shadow rounded-lg">
                <img src="{{ asset($portofolio->bukti) }}" alt="">
                <div class="mt-4 text-center uppercase text-indigo-700">Bukti Sertifikat atau Piagam Mahasiswa</div>
            </div>
        </div>
        <div>
            <div class="bg-gray-50">
                <table class="w-full">
                    <tr class="border text-white text-center">
                        <td colspan="3" class="p-6 text-xl font-bold bg-sidebar rounded-t-lg">
                            <span>Portofolio <strong class="text-bold">{{ $portofolio->mahasiswa->nama
                                    }}</strong></span>
                        </td>
                    </tr>
                    <tr class="border">
                        <td class="p-4">Kategori Kegiatan</td>
                        <td class="p-4">:</td>
                        <td class="p-4">
                            @foreach ($kategori_kegiatan as $item)
                            @if ($item->id == $portofolio->jenis_kegiatan->kategori_kegiatan_id)
                            {{ $item->nama }}
                            @endif
                            @endforeach
                        </td>
                    </tr>
                    <tr class="border">
                        <td class="p-4">Jenis Kegiatan</td>
                        <td class="p-4">:</td>
                        <td class="p-4">
                            {{$portofolio->jenis_kegiatan->nama }}
                        </td>
                    </tr>
                    <tr class="border">
                        <td class="p-4">Referensi Point</td>
                        <td class="p-4">:</td>
                        <td class="p-4">{{ $portofolio->jenis_kegiatan->ref_point }}</td>
                    </tr>
                    <tr class="border">
                        <td class="p-4">Nama Kegiatan</td>
                        <td class="p-4">:</td>
                        <td class="p-4">{{ $portofolio->nama_kegiatan }}</td>
                    </tr>
                    <tr class="border">
                        <td class="p-4">Penyelenggara</td>
                        <td class="p-4">:</td>
                        <td class="p-4">{{ $portofolio->penyelenggara }}</td>
                    </tr>
                    <tr class="border">
                        <td class="p-4">Tahun Diadakan</td>
                        <td class="p-4">:</td>
                        <td class="p-4">{{ $portofolio->tahun }}</td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            <form onsubmit="return confirm('Apakah anda yakin memvalidasi portofolio ini?')"
                                action="{{ route('pa-validasi', ['id'=>$id]) }}" method="POST"
                                class="p-4 bg-gray-50 rounded-lg shadow">
                                @csrf
                                @method('put')
                                {{-- Point --}}
                                <div>
                                    <label class="text-sm" for="valid_point">Valid Point</label>
                                    <div>
                                        <input type="number" id="valid_point" name="valid_point"
                                            class="w-full rounded-lg border-gray-300">
                                        @error('valid_point')
                                        <p class="text-red-500 text-sm mt-2">{{$message}}</p>
                                        @enderror
                                    </div>
                                </div>

                                {{-- Button --}}
                                <div>
                                    <div class="mt-4 flex justify-center">
                                        <button type='submit'
                                            class="text-white px-4 py-2 bg-sidebar rounded-lg text-md">
                                            Validasi
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
