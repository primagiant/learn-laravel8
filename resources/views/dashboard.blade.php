<x-admin>
    <x-slot name="header">
        {{__("Selamat Datang ") }}
        <strong>{{Auth::user()->name}}</strong>
    </x-slot>

    <div>
        <h2>Anda Login dengan Email</h2>
        <div class="ml-6 font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
    </div>

</x-admin>
