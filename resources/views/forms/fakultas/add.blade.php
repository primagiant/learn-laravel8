<x-app-layout>
    <x-slot name="header">
        {{__("Tambah Data Fakultas") }}
    </x-slot>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 font-quick">
        <form action="{{ route('add-fakultas') }}" method="POST" class="p-10 bg-gray-50 shadow rounded-lg">
            @csrf
            <div>
                <label class="text-sm" for="name">Nama Fakultas</label>
                <div>
                    <input type="text" class="rounded-lg w-full border-gray-300" id="name" name="displayName" autofocus>
                    @error('displayName')
                    <p class="text-red-500 text-sm mt-2">{{$message}}</p>
                    @enderror
                </div>
            </div>
            <div class="mt-3">
                <label class="text-sm" for="deskripsi">Deskripsi Fakultas</label>
                <div>
                    <input type="text" name="deskripsi" id="deskripsi" class="w-full rounded-lg border-gray-300">
                    @error('deskripsi')
                    <p class="text-red-500 text-sm mt-2">{{$message}}</p>
                    @enderror
                </div>
            </div>
            <div class="mt-3">
                <button type='submit' class="text-white px-4 py-2 bg-sidebar hover:bg-blue-600 rounded-lg text-sm">
                    Save
                </button>
            </div>
        </form>
    </div>


</x-app-layout>
