<x-app-layout>
    <x-slot name="header">
        {{__("Tambah Data Angkatan") }}
    </x-slot>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
        <form action="{{ route('add-angkatan') }}" method="POST" class="p-10 bg-white rounded shadow-xl">
            @csrf
            <div>
                <label class="text-sm" for="tahunAngkatan">Tahun Angkatan</label>
                <div>
                    <input type="text" class="rounded-lg w-full" id="tahunAngkatan" name="tahun" autofocus>
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
