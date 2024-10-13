@extends('layouts.navbar')

@section('navbar')
    <div class="container px-4 py-8 mx-auto mt-28">
        <!-- Back Button -->
        <div class="mb-6">
            <button onclick="window.location.href='{{ route('profil') }}'"
                class="inline-flex items-center px-6 py-3 text-white transition-all duration-300 transform bg-blue-600 rounded-lg shadow-lg hover:bg-blue-700 hover:shadow-xl hover:-translate-y-1 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                <i class="mr-2 fas fa-arrow-left"></i>
                <span class="font-semibold">PROFIL</span>
            </button>
        </div>

        <!-- Title and Description -->
        <h1 class="mb-4 text-4xl font-extrabold leading-tight text-center text-gray-800">
            DAFTAR PEGAWAI
        </h1>
        <p class="max-w-2xl mx-auto mb-6 text-center text-gray-600 text-md md:text-lg">
            Selamat datang di halaman <span class="font-semibold">Daftar Pegawai</span>. Di sini, Anda dapat melihat
            informasi lengkap mengenai pegawai kami, termasuk nama, jabatan, dan unit bidang. Kami berkomitmen
            untuk memberikan pelayanan terbaik melalui sumber daya manusia yang <span class="font-semibold">kompeten</span>
            dan <span class="font-semibold">profesional</span>.
        </p>

        <!-- Search Bar -->
        <div class="relative flex justify-center mb-6">
            <input type="text" placeholder="Cari pegawai..."
                class="w-1/2 px-4 py-2 pl-10 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400"
                onkeyup="searchFunction()">
            <span class="absolute text-gray-400 left-3 top-3">

            </span>
        </div>

        <!-- Table Container -->
        <div class="overflow-x-auto rounded-lg">
            <table class="min-w-full bg-white border border-gray-200 rounded-lg shadow-lg">
                <thead class="bg-indigo-400">
                    <tr class="w-full text-sm leading-normal text-white uppercase">
                        <th class="px-4 py-3 text-left">No.</th>
                        <th class="px-4 py-3 text-left">Nama</th>
                        <th class="px-4 py-3 text-left">Jabatan</th>
                        <th class="px-4 py-3 text-left">Unit Bidang</th>
                    </tr>
                </thead>
                <tbody class="text-sm font-medium text-gray-600" id="pegawaiTableBody">
                    @foreach ($pegawai as $index => $item)
                        <tr
                            class="{{ $index % 2 == 0 ? 'bg-gray-100' : 'bg-white' }} transition duration-300 border-b border-gray-200 hover:bg-gray-80">
                            <td class="px-4 py-2">{{ $pegawai->firstItem() + $index }}</td>
                            <td class="px-4 py-2">{{ $item->name }}</td>
                            <td class="px-4 py-2">{{ $item->jabatan }}</td>
                            <td class="px-4 py-2">{{ $item->unit_bidang }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Employee Stats -->
        <div class="flex justify-center gap-10 mt-10 ">
            <!-- Total Pegawai -->
            <div class="flex flex-col items-center mb-4">
                <div id="pegawaiContainer"
                    class="flex items-center justify-center w-24 h-12 transition-transform duration-300 transform rounded-lg shadow-md cursor-pointer group bg-gradient-to-r from-blue-500 to-purple-600 hover:scale-105 hover:shadow-xl">
                    <i class="mr-1 text-xl text-white fas fa-user"></i>
                    <h3 id="pegawaiCount" class="text-xl font-bold text-white">0+</h3>
                </div>
                <h6 class="mt-1 text-sm text-gray-500 transition-colors duration-300 group-hover:text-blue-600">Jumlah
                    Pegawai</h6>
            </div>

            <!-- Total PNS -->
            {{-- <div class="flex flex-col items-center">
                <div class="flex items-center">
                    <i class="mr-2 text-4xl text-gray-900 fas fa-user-tie"></i>
                    <h4 class="text-4xl font-bold text-gray-900">{{ $jumlahPNS }}+</h4>
                </div>
                <h6 class="text-base text-gray-500">Jumlah PNS</h6>
            </div> --}}

            <!-- Non-PNS -->
            {{-- <div class="flex flex-col items-center">
                <div class="flex items-center">
                    <i class="mr-2 text-4xl text-gray-900 fas fa-user-check"></i>
                    <h4 class="text-4xl font-bold text-gray-900">{{ $jumlahNonPNS }}+</h4>
                </div>
                <h6 class="text-base text-gray-500">Non PNS</h6>
            </div> --}}
        </div>

        <!-- Pagination -->
        <div class="mt-12">
            {{ $pegawai->links('vendor.pagination.tailwind') }}
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const totalPegawai = {{ $jumlahPegawai }};
            const duration = 900; // animation duration in ms
            let start = 0;
            const countElement = document.getElementById('pegawaiCount');
            const increment = totalPegawai / (duration / 16);

            function updateCounter() {
                start += increment;
                if (start < totalPegawai) {
                    countElement.textContent = Math.floor(start) + "+";
                    requestAnimationFrame(updateCounter);
                } else {
                    countElement.textContent = totalPegawai + "+";
                }
            }

            updateCounter();
        });
    </script>

    <script>
        function searchFunction() {
            let input, filter, table, tr, td, i, j, txtValue;
            input = document.querySelector('input[type="text"]');
            filter = input.value.toLowerCase();
            table = document.querySelector('.min-w-full');
            tr = table.getElementsByTagName("tr");

            for (i = 1; i < tr.length; i++) {
                tr[i].style.display = "none";
                td = tr[i].getElementsByTagName("td");
                for (j = 0; j < td.length; j++) {
                    if (td[j]) {
                        txtValue = td[j].textContent || td[j].innerText;
                        if (txtValue.toLowerCase().indexOf(filter) > -1) {
                            tr[i].style.display = "";
                            break;
                        }
                    }
                }
            }
        }
    </script>
@endsection
