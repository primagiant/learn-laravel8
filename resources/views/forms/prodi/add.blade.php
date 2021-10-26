<x-app-layout>
    <x-slot name="header">
        {{__("Tambah Data Prodi") }}
    </x-slot>

    <div class="grid grid-cols-1 md:grid-cols-1 lg:grid-cols-2">
        <form action="{{ route('add-prodi') }}" method="POST" class="p-10 bg-gray-50 rounded-lg shadow">
            @csrf
            <div>
                <label class="text-sm" for="namaProdi">Nama Prodi</label>
                <div>
                    <input type="text" class="rounded-lg w-full border-gray-300" id="namaProdi" name="name" autofocus>
                </div>
            </div>
            <div class="mt-3">
                <label class="text-sm " for="fakultas">Fakultas</label>
                <div>
                    <select class="w-full rounded-lg border-gray-300" name="fakultas" id="fakultas">
                        @foreach ($fakultas as $item)
                        <option value="{{$item['id']}}">{{$item['display_name']}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="mt-3">
                <label class="text-sm" for="description">Deskripsi Prodi</label>
                <div>
                    <input type="text" id="description" name="description" class="w-full rounded-lg border-gray-300">
                </div>
            </div>
            <div class="mt-3">
                <button type='submit' class="text-white px-4 py-2 bg-sidebar rounded-lg text-sm">
                    Save
                </button>
            </div>
        </form>
    </div>


</x-app-layout>
