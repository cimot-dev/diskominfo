@extends('layouts.navbar')

@section('navbar')
    <!-- Main Content -->
    <div class="mt-24 container mx-auto py-10 px-5">
        <div>
            <button onclick="window.location.href='{{ route('profil') }}'"
                class="inline-flex items-center px-6 py-3 mb-6 text-white transition-all duration-300 transform bg-blue-600 rounded-lg shadow-lg hover:bg-blue-700 hover:shadow-xl hover:-translate-y-1 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                <i class="mr-2 fas fa-arrow-left"></i>
                <span class="font-semibold">PROFIL</span>
            </button>
        </div>
        <!-- Title -->
        <h1 class="text-4xl font-bold text-center text-gray-800 mb-5">
            Daftar Perangkat Daerah
        </h1>
        <p class="text-md font-sans text-center mb-10">Perangkat daerah adalah unsur pembantu kepala daerah dalam
            penyelenggaraan
            pemerintahan daerah yang terdiri dari <br>
            sekretariat daerah, sekretariat DPRD, dinas daerah, lembaga teknis daerah, kecamatan, dan kelurahan.</p>

        <!-- Search Form -->
        <div class="flex justify-center mb-8">
            <form action="{{ route('perangkat-daerah.index') }}" method="GET" class="w-full max-w-lg">
                <div class="flex items-center border-b border-blue-500 py-2">
                    <input type="text" name="search"
                        class="appearance-none bg-transparent border-none w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none"
                        placeholder="Cari perangkat daerah..." value="{{ $search ?? '' }}">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">
                        Cari
                    </button>
                </div>
            </form>
        </div>

        <!-- Table (responsive) -->
        <div class="overflow-x-auto shadow-lg rounded-lg">
            <table class="min-w-full bg-white border border-gray-300 text-center rounded-lg">
                <thead class="bg-blue-500 text-white uppercase text-sm leading-normal">
                    <tr>
                        <th class="py-3 px-6">No</th>
                        <th class="py-3 px-6">Nama Perangkat Daerah</th>
                        <th class="py-3 px-6">Nama Jabatan</th>
                        <th class="py-3 px-6">Alamat</th>
                        <th class="py-3 px-6">No. Telpon</th>
                        <th class="py-3 px-6">Email</th>
                        <th class="py-3 px-6">Website</th>
                    </tr>
                </thead>
                <tbody class="text-gray-600 text-sm font-light">
                    @if ($data->isEmpty())
                        <tr>
                            <td colspan="7" class="py-4 px-6 text-center">Data tidak ditemukan</td>
                        </tr>
                    @else
                        @foreach ($data as $index => $item)
                            <tr class="border-b font-normal border-gray-200 hover:bg-gray-100">
                                <td class="py-4 px-6">{{ $data->firstItem() + $index }}</td>
                                <td class="py-4 px-6">{{ $item->nama_perangkat_daerah }}</td>
                                <td class="py-4 px-6">{{ $item->nama_jabatan }}</td>
                                <td class="py-4 px-6">{{ $item->alamat }}</td>
                                <td class="py-4 px-6">{{ $item->no_telpon }}</td>
                                <td class="py-4 px-6">
                                    <a href="mailto:{{ $item->alamat_email }}" class="text-blue-500 hover:text-blue-700">
                                        {{ $item->alamat_email }}
                                    </a>
                                </td>
                                <td class="py-4 px-6">
                                    <a href="{{ $item->situs_web }}" class="text-blue-600 hover:text-blue-800"
                                        target="_blank">
                                        {{ $item->situs_web }}
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>

        <!-- Pagination Links -->
        <div class="mt-6 flex justify-center">
            {{ $data->appends(['search' => $search])->links('pagination::tailwind') }}
        </div>
    </div>

    <x-footer.footer></x-footer.footer>
@endsection
