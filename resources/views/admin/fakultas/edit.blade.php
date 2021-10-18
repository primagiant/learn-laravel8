<x-app-layout>
    <x-slot name="header">
        {{__("Edit Data Angkatan") }}
    </x-slot>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
        <form action="{{ route('edit-fakultas') }}" method="POST" class="p-10 bg-white rounded shadow-xl">
            @csrf
            @method('put')
            <input value="{{$id}}" type="hidden" name="id">
            <div>
                <label class="text-sm" for="name">Nama Fakultas</label>
                <div>
                    <input value="{{$display_name}}" type="text" class="rounded-lg w-full" id="name" name="display_name"
                        autofocus>
                </div>
            </div>
            <div class="mt-3">
                <label class="text-sm" for="description">Deskripsi Fakultas</label>
                <div>
                    <textarea name="description" id="description"
                        class="w-full rounded-md h-24">{{$deskripsi}}</textarea>
                </div>
            </div>
            <div class="mt-3">
                <button type='submit' class="text-white px-2 py-1 bg-yellow-600 rounded-lg text-sm">
                    Update
                </button>
            </div>
        </form>
    </div>


</x-app-layout>
