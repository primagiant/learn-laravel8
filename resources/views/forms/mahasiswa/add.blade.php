<x-app-layout>
    <x-slot name="header">
        {{__("Tambah Account Mahasiswa") }}
    </x-slot>

    <div class="lg:w-8/12">
        <form action="{{ (Auth::user()->hasRole('admin')) ? route('add-mahasiswa') : route('pa-add-mahasiswa') }}"
            method="POST" class="px-12 py-16 bg-gray-50 rounded-lg shadow">
            @csrf

            <div class="grid md:grid-cols-2 gap-2">
                {{-- NIM --}}
                <div>
                    <label class="text-sm" for="nim">Nomor Induk Mahasiswa</label>
                    <div>
                        <input type="text" class="w-full rounded-lg border-gray-300" id="nim" value="{{old('nim')}}"
                            name="nim" autofocus>
                        @error('nim')
                        <p class="text-red-500 text-sm mt-2">{{$message}}</p>
                        @enderror
                    </div>
                </div>

                {{-- Name --}}
                <div class="mt-4 md:mt-0">
                    <label class="text-sm" for="name">Nama Mahasiswa</label>
                    <div>
                        <input type="text" class="rounded-lg w-full border-gray-300" id="name" value="{{old('name')}}"
                            name="name" autofocus>
                        @error('name')
                        <p class="text-red-500 text-sm mt-2">{{$message}}</p>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="grid md:grid-cols-4 gap-2">
                {{-- Email --}}
                <div class="mt-4 col-span-3">
                    <label class="text-sm" for="email">Email</label>
                    <div>
                        <input type="text" class="rounded-lg w-full border-gray-300" id="email" value="{{old('email')}}"
                            name="email">
                        @error('email')
                        <p class="text-red-500 text-sm mt-2">{{$message}}</p>
                        @enderror
                    </div>
                </div>
                {{-- Angkatan --}}
                <div class="mt-4">
                    <label class="text-sm" for="angkatan">Angkatan</label>
                    <div>
                        <select name="angkatan" id="angkatan" class="rounded-lg border-gray-300 w-full">
                            @foreach ($angkatan as $a)
                            <option value="{{ $a['id'] }}">{{ $a['tahun'] }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>

            {{-- Password --}}
            <div class="mt-4 grid grid-cols-2 gap-2">
                <div>
                    <label class="text-sm" for="password">Password</label>
                    <div>
                        <input type="password" class="w-full rounded-lg border-gray-300" id="password" name="password">
                        @error('password')
                        <p class="text-red-500 text-sm mt-2">{{$message}}</p>
                        @enderror
                    </div>
                </div>
                <div>
                    <label class="text-sm" for="password_confirmation">Password Confirmation</label>
                    <div>
                        <input type="password" class="rounded-lg w-full border-gray-300" id="password_confirmation"
                            name="password_confirmation">
                    </div>
                </div>
            </div>

            <div class="grid md:grid-cols-2 gap-2">
                {{-- Program Studi --}}
                <div class="mt-4">
                    <label class="text-sm" for="prodi">Program Studi</label>
                    <div>
                        <select name="prodi" id="prodi" class="rounded-lg w-full border-gray-300">
                            @foreach ($prodi as $p)
                            <option value="{{ $p['id'] }}">{{ $p['display_name'] }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                {{-- Pembimbing Akademik --}}
                @if (Auth::user()->hasRole('admin'))
                <div class="mt-4">
                    <label class="text-sm" for="pa">Pembimbing Akademik</label>
                    <div>
                        <select name="pa" id="pa" class="rounded-lg w-full border-gray-300">
                            @foreach ($pa as $p)
                            <option value="{{ $p['id'] }}">{{ $p['name'] }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                @endif
            </div>

            <div class="mt-8 flex justify-end">
                <button type='submit' class="text-white px-4 py-2 bg-sidebar rounded-lg text-md">
                    Save
                </button>
            </div>
        </form>
    </div>

</x-app-layout>
