<x-app-layout>
    <x-slot name="header">
        {{__("Edit Data Angkatan") }}
    </x-slot>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
        <form action="{{ route('edit-angkatan', ['id'=>$id]) }}" method="POST" class="p-8 bg-gray-50 rounded-lg shadow">
            @csrf
            @method('put')
            <div>
                <label class="text-sm" for="tahunAngkatan">Tahun Angkatan</label>
                <div>
                    <input value="{{$tahun}}" type="text" class="rounded-lg w-full border-gray-300" id="tahunAngkatan"
                        name="tahun" autofocus>
                </div>
            </div>
            <div class="mt-3">
                <button type='submit' class="text-white px-4 py-2 bg-yellow-600 hover:bg-yellow-700 rounded-lg text-sm">
                    Update
                </button>
            </div>
        </form>
    </div>


</x-app-layout>
