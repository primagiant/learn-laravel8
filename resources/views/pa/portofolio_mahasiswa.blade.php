<x-app-layout>
    <x-slot name="header">
        <span>
            {{__('Portofolio ')}} <strong>
                {{$mahasiswa_name}}
            </strong>
        </span>
    </x-slot>
    <div>
        <div class="mb-3">
            <a href="{{ route('show-mahasiswa-portofolio', ['id'=>$id, 'key' => null]) }}"
                class="mr-1.5 bg-sidebar hover:bg-gray-600 text-white py-2 px-4 rounded-lg text-md">
                <i class="fas fa-plus mr-2"></i>
                <span>All</span>
            </a>
            <a href="{{ route('show-mahasiswa-portofolio', ['id'=>$id, 'key' => '1']) }}"
                class="mr-1.5 bg-sidebar hover:bg-gray-600 text-white py-2 px-4 rounded-lg text-md">
                <i class="fas fa-check mr-2"></i>
                <span>Verified</span>
            </a>
            <a href="{{ route('show-mahasiswa-portofolio', ['id'=>$id,'key' => 0]) }}"
                class="mr-1.5 bg-sidebar hover:bg-gray-600 text-white py-2 px-4 rounded-lg text-md">
                <i class="fas fa-times-circle mr-2"></i>
                <span>Unverified</span>
            </a>
        </div>
        <div class="bg-white overflow-auto">
            <table class="text-left w-full border-collapse">
                <!--Border collapse doesn't work on this site yet but it's available in newer tailwind versions -->
                <thead>
                    <tr class="bg-sidebar text-white">
                        <th
                            class="text-center py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                            Jenis Kegiatan</th>
                        <th
                            class="text-center py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                            Nama Kegiatan</th>
                        <th
                            class="text-center py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                            Penyelenggara</th>
                        <th
                            class="text-center py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                            Tahun</th>
                        <th
                            class="text-center py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                            Ref Point</th>
                        <th
                            class="text-center py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                            Valid Point</th>
                        <th
                            class="text-center py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light w-20">
                            Bukti</th>
                        <th
                            class="text-center py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light w-52">
                            Status</th>
                    </tr>
                </thead>
                <tbody>
                    @if (!$portofolio->isEmpty())
                    @foreach ($portofolio as $item)
                    <tr class="hover:bg-grey-lighter">
                        <td class="text-center py-4 px-6 border-b border-grey-light">{{ $item->jenis_kegiatan->nama }}
                        </td>
                        <td class="text-center py-4 px-6 border-b border-grey-light">{{ $item->nama_kegiatan }}</td>
                        <td class="text-center py-4 px-6 border-b border-grey-light">{{ $item->penyelenggara }}</td>
                        <td class="text-center py-4 px-6 border-b border-grey-light">{{ $item->tahun }}</td>
                        <td class="text-center py-4 px-6 border-b border-grey-light">{{ $item->jenis_kegiatan->ref_point
                            }}</td>
                        <td class="text-center py-4 px-6 border-b border-grey-light">{{ $item->valid_point }}</td>
                        <td class="text-center py-4 px-6 border-b border-grey-light">
                            <p class="hidden invisible">{{ $item->bukti }}</p>
                            <button
                                class="openBukti bg-sidebar hover:bg-gray-600 text-white py-2 px-4 rounded-lg text-sm">
                                <i class="fas fa-eye"></i>
                                Lihat
                            </button>
                        </td>
                        <td class="text-center py-4 px-6 border-b border-grey-light">
                            @if ($item->status == 0)
                            <span class="bg-red-500 p-1.5 text-white rounded-lg text-sm">
                                <i class="fas fa-times-circle"></i>
                                Belum Diverifikasi
                            </span>
                            <div class="mt-1.5">
                                <a href="{{ route('pa-validasi', ['id'=> $item->id]) }}"
                                    class="py-1.5 px-2.5 bg-green-600 hover:bg-green-700 rounded-lg text-sm text-white">
                                    <i class="fas fa-pen-nib"></i>
                                    Validasi
                                </a>
                            </div>
                            @else
                            <span class="bg-green-600 p-1.5 text-white rounded-lg text-sm">
                                <i class="fas fa-check"></i>
                                Verified
                            </span>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                    @else
                    <tr>
                        <td colspan="8" class="text-center py-4 px-6 border-b border-grey-light">
                            Tidak ada Data Portofolio
                        </td>
                    </tr>
                    @endif
                </tbody>
            </table>
        </div>
        {{-- <div class="mt-3">
            {{ $portofolio->links() }}
        </div> --}}
    </div>

    {{-- Modals --}}
    <div id="imageModal" class="hidden fixed top-0 bottom-0 left-0 right-0 bg-gray-500 bg-opacity-80 z-10">
        <div class="pt-16 flex flex-col justify-center items-center">
            <div class="flex justify-center items-center w-1/3">
                <img id="modalImg" src="" alt="Bukti Image">
            </div>
            <button id="closeModal" class="mt-5 text-center w-full animate-bounce">
                <span class="bg-white py-2 px-3.5 rounded-full ">
                    <i class="fas fa-plus transform rotate-45"></i>
                </span>
            </button>
        </div>
    </div>

    <script>
        const openBukti = document.querySelectorAll('.openBukti');
        const image = document.getElementById('modalImg');
        const modal = document.getElementById('imageModal');
        const closeModal = document.getElementById('closeModal');

        openBukti.forEach(e => {
            e.addEventListener('click', function () {
                modal.classList.remove('hidden');
                modal.classList.add('block');
                let imgSource = e.parentElement.children[0].innerText;
                image.src = "/" + imgSource;
            })
        });

        closeModal.addEventListener('click', function() {
            modal.classList.add('hidden');
            modal.classList.remove('block');
        })

        modal.addEventListener('click', function() {
            modal.classList.add('hidden');
            modal.classList.remove('block');
        })
    </script>

</x-app-layout>
