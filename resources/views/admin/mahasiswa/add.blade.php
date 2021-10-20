<x-app-layout>
    <x-slot name="header">
        {{__("Tambah Account Mahasiswa") }}
    </x-slot>

    <div class="lg:w-8/12">
        <form action="" method="POST" class="p-10 bg-white rounded shadow-xl">
            @csrf

            {{-- NIM --}}
            <div>
                <label class="text-sm" for="nim">Nomor Induk Mahasiswa</label>
                <div>
                    <input type="text" class="rounded-lg w-full" id="nim" value="{{old('nim')}}" name="nim" autofocus>
                    @error('nim')
                    <p class="text-red-500 text-sm mt-2">{{$message}}</p>
                    @enderror
                </div>
            </div>

            {{-- Name --}}
            <div class="mt-4">
                <label class="text-sm" for="name">Nama Mahasiswa</label>
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

            <div class="mt-4 grid md:grid-cols-2 gap-2">
                {{-- Program Studi --}}
                <div>
                    <label class="text-sm" for="prodi">Program Studi</label>
                    <div>
                        <select name="prodi" id="prodi" class="rounded-lg w-full">
                            @foreach ($prodi as $p)
                            <option value="{{ $p['id'] }}">{{ $p['display_name'] }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                {{-- Pembimbing Akademik --}}
                <div class="mt-4 md:mt-0">
                    <label class="text-sm" for="pa">Pembimbing Akademik</label>
                    <div>
                        <select name="pa" id="pa" class="rounded-lg w-full">
                            @foreach ($pa as $p)
                            <option value="{{ $p['id'] }}">{{ $p['name'] }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>

            {{-- Angkatan --}}
            <div class="mt-4">
                <label class="text-sm" for="angkatan">Angkatan</label>
                <div>
                    <select name="angkatan" id="angkatan" class="rounded-lg">
                        @foreach ($angkatan as $a)
                        <option value="{{ $a['id'] }}">{{ $a['tahun'] }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="mt-8 flex justify-end">
                <button type='submit' class="text-white px-4 py-2 bg-sidebar rounded-lg text-md">
                    Save
                </button>
            </div>
        </form>
    </div>

</x-app-layout>
