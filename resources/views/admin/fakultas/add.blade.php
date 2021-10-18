<x-app-layout>
    <x-slot name="header">
        {{__("Tambah Data Fakultas") }}
    </x-slot>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
        <form action="{{ route('add-fakultas') }}" method="POST" class="p-10 bg-white rounded shadow-xl">
            @csrf
            <div>
                <label class="text-sm" for="name">Nama Fakultas</label>
                <div>
                    <input type="text" class="rounded-lg w-full" id="name" name="displayName" autofocus>
                </div>
            </div>
            <div class="mt-3">
                <label class="text-sm" for="deskripsi">Deskripsi Fakultas</label>
                <div>
                    <textarea name="deskripsi" id="deskripsi" class="w-full rounded-md h-24"></textarea>
                </div>
            </div>
            <div class="mt-3">
                <button type='submit' class="text-white px-2 py-1 bg-sidebar rounded-lg text-sm">
                    Save
                </button>
            </div>
        </form>
    </div>


</x-app-layout>
