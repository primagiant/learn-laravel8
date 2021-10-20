<x-app-layout>
    <x-slot name="header">
        {{__("Tambah Data User") }}
    </x-slot>

    <div class="lg:w-8/12">
        <form action="" method="POST" class="p-10 bg-white rounded shadow-xl">
            @csrf

            {{-- Name --}}
            <div>
                <label class="text-sm" for="name">Nama</label>
                <div>
                    <input type="text" class="rounded-lg w-full" id="name" value="{{old('name')}}" name="name"
                        autofocus>
                    @error('name')
                    <p class="text-red-500 text-sm mt-2">{{$message}}</p>
                    @enderror
                </div>
            </div>

            {{-- Email --}}
            <div class="mt-4">
                <label class="text-sm" for="email">Email</label>
                <div>
                    <input type="text" class="rounded-lg w-full" id="email" value="{{old('email')}}" name="email">
                    @error('email')
                    <p class="text-red-500 text-sm mt-2">{{$message}}</p>
                    @enderror
                </div>
            </div>

            {{-- Password --}}
            <div class="mt-4 grid grid-cols-2 gap-2">
                <div>
                    <label class="text-sm" for="password">Password</label>
                    <div>
                        <input type="password" class="rounded-lg w-full" id="password" name="password">
                        @error('password')
                        <p class="text-red-500 text-sm mt-2">{{$message}}</p>
                        @enderror
                    </div>
                </div>
                <div>
                    <label class="text-sm" for="password_confirmation">Password Confirmation</label>
                    <div>
                        <input type="password" class="rounded-lg w-full" id="password_confirmation"
                            name="password_confirmation">
                    </div>
                </div>
            </div>

            <div class="mt-3">
                <button type='submit' class="text-white px-3 py-1.5 bg-sidebar rounded-lg text-md">
                    Save
                </button>
            </div>
        </form>
    </div>

</x-app-layout>
