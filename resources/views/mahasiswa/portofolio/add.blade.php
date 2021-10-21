<x-app-layout>
    <x-slot name="header">
        {{__("Tambah Account Mahasiswa") }}
    </x-slot>

    <div class="lg:w-8/12">
        <form action="{{ route('add-portofolio', ['id'=>$id]) }}" method="POST" enctype="multipart/form-data"
            class="p-10 bg-white rounded shadow-xl">
            @csrf
            {{-- Jenis Kegiatan --}}
            <div>
                <label class="text-sm" for="jenis_kegiatan">Jenis Kegiatan</label>
                <div>
                    <select name="jenis_kegiatan" id="jenis_kegiatan" class="w-full rounded-lg">
                        @foreach ($jenis_kegiatan as $item)
                        <option value="{{ $item->id }}">{{ $item->nama }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            {{-- Nama Kegiatan --}}
            <div class="mt-4">
                <label class="text-sm" for="nama_kegiatan">Nama Kegiatan</label>
                <div>
                    <input type="text" class="rounded-lg w-full" id="nama_kegiatan" value="{{old('nama_kegiatan')}}"
                        name="nama_kegiatan" autofocus>
                    @error('nama_kegiatan')
                    <p class="text-red-500 text-sm mt-2">{{$message}}</p>
                    @enderror
                </div>
            </div>

            {{-- Penyelenggara --}}
            <div class="mt-4">
                <label class="text-sm" for="penyelenggara">Penyelenggara</label>
                <div>
                    <input type="text" class="rounded-lg w-full" id="penyelenggara" value="{{old('penyelenggara')}}"
                        name="penyelenggara" autofocus>
                    @error('penyelenggara')
                    <p class="text-red-500 text-sm mt-2">{{$message}}</p>
                    @enderror
                </div>
            </div>

            {{-- Tahun --}}
            <div class="mt-4">
                <label class="text-sm" for="tahun">Tahun Diadakan</label>
                <div>
                    <input type="number" class="rounded-lg w-full" id="tahun" value="{{old('tahun')}}" name="tahun"
                        autofocus>
                    @error('tahun')
                    <p class="text-red-500 text-sm mt-2">{{$message}}</p>
                    @enderror
                </div>
            </div>

            {{-- Bukti --}}
            <div class="mt-4">
                <label class="text-sm" for="bukti">Bukti</label>
                <div>
                    <input type="file" class="w-full" id="bukti" name="bukti">
                    @error('bukti')
                    <p class="text-red-500 text-sm mt-2">{{$message}}</p>
                    @enderror
                </div>
            </div>

            <div class="mt-8 flex justify-end">
                <button type='submit' class="text-white px-4 py-2 bg-sidebar rounded-lg text-md">
                    Save
                </button>
            </div>
        </form>
    </div>

</x-app-layout>
