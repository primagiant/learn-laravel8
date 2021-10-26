<x-app-layout>
    <x-slot name="header">
        {{__("Edit Portofolio Mahasiswa") }}
    </x-slot>

    <div class="lg:w-8/12">
        <form action="{{ route('edit-portofolio', ['id'=>$id]) }}" method="POST" enctype="multipart/form-data"
            class="p-10 bg-gray-50 rounded-lg shadow">
            @csrf
            @method('put')
            {{-- Kategori Kegiatan --}}
            <div>
                <label class="text-sm" for="kategori_kegiatan">Kategori Kegiatan</label>
                <div>
                    <select onchange="selectJenis()" name="kategori_kegiatan" id="kategori_kegiatan"
                        class="w-full rounded-lg border-gray-300">
                        <option disabled>Pilih Kategori</option>
                        @foreach ($kategori_kegiatan as $item)
                        @if ($item->id == $portofolio->jenis_kegiatan->kategori_kegiatan_id)
                        <option value="{{ $item->id }}" selected>
                            {{ $item->nama }}
                        </option>
                        @else
                        <option value="{{ $item->id }}">
                            {{ $item->nama }}
                        </option>
                        @endif
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-4 gap-4">
                {{-- Jenis Kegiatan --}}
                <div class="mt-4 col-span-3">
                    <label class="text-sm" for="jenis_kegiatan">Jenis Kegiatan</label>
                    <div>
                        <select onchange="makeRefPoint()" id="jenis_kegiatan" name="jenis_kegiatan"
                            class="w-full rounded-lg border-gray-300">
                            <option disabled>Pilih Jenis Kegiatan</option>
                            @foreach ($jenis_kegiatan as $item)
                            @if ($item->id == $portofolio->jenis_kegiatan->id)
                            <option value="{{ $item->id }}" selected
                                data-kategoriId="{{\App\Models\JenisKegiatan::find($item->id)->ketegori_kegiatan->id}}"
                                data-refPoint="{{\App\Models\JenisKegiatan::find($item->id)->ref_point}}">
                                {{ $item->nama }}
                            </option>
                            @else
                            <option value="{{ $item->id }}" class="hidden"
                                data-kategoriId="{{\App\Models\JenisKegiatan::find($item->id)->ketegori_kegiatan->id}}"
                                data-refPoint="{{\App\Models\JenisKegiatan::find($item->id)->ref_point}}">
                                {{ $item->nama }}
                            </option>
                            @endif
                            @endforeach
                        </select>
                        @error('jenis_kegiatan')
                        <p class="text-red-500 text-sm mt-2">{{$message}}</p>
                        @enderror
                    </div>
                </div>

                {{-- Display Ref point --}}
                <div class="mt-4">
                    <label class="text-sm" for="ref_point">Ref Point</label>
                    <div>
                        <input disabled type="text" id="ref_point" name="ref_point"
                            value="{{ $portofolio->jenis_kegiatan->ref_point }}"
                            class="w-full rounded-lg border-gray-300">
                    </div>
                </div>
            </div>

            {{-- Nama Kegiatan --}}
            <div class="mt-4">
                <label class="text-sm" for="nama_kegiatan">Nama Kegiatan</label>
                <div>
                    <input type="text" class="rounded-lg w-full border-gray-300" id="nama_kegiatan"
                        value="{{ (old('nama_kegiatan') != null ) ? old('nama_kegiatan') : $portofolio->nama_kegiatan }}"
                        name="nama_kegiatan">
                    @error('nama_kegiatan')
                    <p class="text-red-500 text-sm mt-2">{{$message}}</p>
                    @enderror
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                {{-- Penyelenggara --}}
                <div class="mt-4">
                    <label class="text-sm" for="penyelenggara">Penyelenggara</label>
                    <div>
                        <input type="text" class="rounded-lg w-full border-gray-300" id="penyelenggara"
                            value="{{ (old('penyelenggara') != null ) ? old('penyelenggara') : $portofolio->penyelenggara }}"
                            name="penyelenggara">
                        @error('penyelenggara')
                        <p class="text-red-500 text-sm mt-2">{{$message}}</p>
                        @enderror
                    </div>
                </div>

                {{-- Tahun --}}
                <div class="mt-4">
                    <label class="text-sm" for="tahun">Tahun Diadakan</label>
                    <div>
                        <input type="number" class="rounded-lg w-full border-gray-300" id="tahun"
                            value="{{ (old('tahun') != null ) ? old('tahun') : $portofolio->tahun }}" name="tahun">
                        @error('tahun')
                        <p class="text-red-500 text-sm mt-2">{{$message}}</p>
                        @enderror
                    </div>
                </div>

                {{-- Bukti --}}
                <div>
                    <label class="text-sm" for="bukti">Bukti</label>
                    <div>
                        <input type="hidden" name="old_bukti" value="{{$portofolio->bukti}}">
                        <input type="file" class="w-full border-gray-300" id="bukti">
                        @error('bukti')
                        <p class="text-red-500 text-sm mt-2">{{$message}}</p>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="mt-8 flex justify-end">
                <button type='submit' class="text-white px-4 py-2 bg-sidebar rounded-lg text-md">
                    Save
                </button>
            </div>
        </form>
    </div>

    <script>
        let kategori = document.getElementById('kategori_kegiatan');
        let jenis = document.getElementById('jenis_kegiatan');
        let refPoint = document.getElementById('ref_point');
        function selectJenis() {
            let cari_id = kategori.options[kategori.selectedIndex].value;
            for (let i = 0; i < jenis.options.length; i++) {
                if (cari_id !== jenis.options[i].getAttribute('data-kategoriId') || i == 0 ) {
                    jenis.options[i].classList.add('hidden')
                } else {
                    jenis.options[i].classList.remove('hidden')
                }
            }
            jenis.options[0].selected = true;
            jenis.disabled = false;
        }

        function makeRefPoint() {
            let cari_id = jenis.options[jenis.selectedIndex].value;
            for (let i = 0; i < jenis.options.length; i++) {
                if (cari_id == i) {
                   refPoint.value = jenis.options[i].getAttribute('data-refPoint')
                }
            }
        }
    </script>
</x-app-layout>
