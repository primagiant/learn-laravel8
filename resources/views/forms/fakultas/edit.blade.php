<x-app-layout>
    <x-slot name="header">
        {{__("Edit Data Angkatan") }}
    </x-slot>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
        <form action="{{ route('edit-fakultas', ['id'=>$id]) }}" method="POST"
            class="p-10 bg-gray-50 shadow rounded-lg">
            @csrf
            @method('put')
            <div>
                <label class="text-sm" for="name">Nama Fakultas</label>
                <div>
                    <input value="{{$display_name}}" type="text" name="deskripsi" id="deskripsi"
                        class="w-full rounded-lg border-gray-300">
                    @error('deskripsi')
                    <p class="text-red-500 text-sm mt-2">{{$message}}</p>
                    @enderror
                </div>
            </div>
            <div class="mt-3">
                <label class="text-sm" for="description">Deskripsi Fakultas</label>
                <div>
                    <input type="text" name="deskripsi" id="deskripsi" class="w-full rounded-lg border-gray-300"
                        value="{{ $deskripsi }}">
                    @error('deskripsi')
                    <p class="text-red-500 text-sm mt-2">{{$message}}</p>
                    @enderror
                </div>
            </div>
            <div class="mt-3">
                <button type='submit' class="text-white px-4 py-2 bg-yellow-500 hover:bg-yellow-600 rounded-lg text-sm">
                    Update
                </button>
            </div>
        </form>
    </div>


</x-app-layout>
