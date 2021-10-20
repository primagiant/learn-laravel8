<x-app-layout>
    <x-slot name="header">
        {{__("Edit Data Angkatan") }}
    </x-slot>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
        <form action="{{ route('edit-angkatan', ['id'=>$id]) }}" method="POST" class="p-10 bg-white rounded shadow-xl">
            @csrf
            @method('put')
            <div>
                <label class="text-sm" for="tahunAngkatan">Tahun Angkatan</label>
                <div>
                    <input value="{{$tahun}}" type="text" class="rounded-lg w-full" id="tahunAngkatan" name="tahun"
                        autofocus>
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
