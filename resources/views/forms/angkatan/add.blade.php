<x-app-layout>
    <x-slot name="header">
        {{__("Tambah Data Angkatan") }}
    </x-slot>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
        <form action="{{ route('add-angkatan') }}" method="POST" class="p-8 bg-gray-50 rounded-lg shadow">
            @csrf
            <div>
                <label class="text-sm" for="tahunAngkatan">Tahun Angkatan</label>
                <div>
                    <input type="text" class="rounded-lg w-full border-gray-300" id="tahunAngkatan" name="tahun"
                        autofocus value="{{old('tahun')}}">
                    @error('tahun')
                    <p class="text-red-500 text-sm mt-2">{{$message}}</p>
                    @enderror
                </div>
            </div>
            <div class="mt-4">
                <button type='submit' class="text-white px-4 py-2 bg-sidebar rounded-lg text-sm">
                    Save
                </button>
            </div>
        </form>
    </div>


</x-app-layout>
