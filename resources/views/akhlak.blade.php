@extends('layouts.navbar')

@section('navbar')

    <body class="bg-white mt-20 p-8">
        <div class=" mb-20  max-w-5xl mx-auto">
            <button onclick="window.location.href='{{ route('profil') }}'"
                class="inline-flex items-center px-6 py-3 mb-6 text-white transition-all duration-300 transform bg-blue-600 rounded-lg shadow-lg hover:bg-blue-700 hover:shadow-xl hover:-translate-y-1 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                <i class="mr-2 fas fa-arrow-left"></i>
                <span class="font-semibold">PROFIL</span>
            </button>
            <h1 class="text-4xl font-bold mb-6 text-center gradient-text shadow-heading">Core Values dan Employer
                Branding ASN</h1>
            <h2 class="text-2xl font-semibold text-blue-500 mb-8 text-center gradient-text shadow-heading">CORE VALUES
            </h2>

            <ul class="mt-8 grid grid-cols-1 gap-6 text-center text-slate-700 md:grid-cols-3 lg:grid-cols-4">
                <li
                    class="rounded-xl bg-white p-6 shadow-lg transition-transform duration-200 transform hover:scale-105 hover:shadow-xl hover:bg-gray-50 hover:text-blue-600">
                    <p class="font-bold text-lg">1. <span class="font-semibold">Berorientasi Pelayanan</span></p>
                    <div class="mt-4 text-left">
                        <p class="text-gray-500">• Memahami dan memenuhi kebutuhan masyarakat.</p>
                        <p class="text-gray-500">• Ramah, cekatan, solutif, dan dapat diandalkan.</p>
                        <p class="text-gray-500">• Melakukan perbaikan tiada henti.</p>
                    </div>
                </li>

                <li
                    class="rounded-xl bg-white p-6 shadow-lg transition-transform duration-200 transform hover:scale-105 hover:shadow-xl hover:bg-gray-50 hover:text-blue-600">
                    <p class="font-bold text-lg">2. <span class="font-semibold">Akuntabel</span></p>
                    <div class="mt-4 text-left">
                        <p class="text-gray-500">• Melaksanakan tugas dengan jujur, bertanggung jawab, cermat, disiplin,
                            dan berintegritas tinggi.</p>
                        <p class="text-gray-500">• Menggunakan kekayaan dan barang milik negara secara bertanggung
                            jawab, efektif, dan efisien.</p>
                        <p class="text-gray-500">• Tidak menyalahgunakan kewenangan jabatan.</p>
                    </div>
                </li>

                <li
                    class="rounded-xl bg-white p-6 shadow-lg transition-transform duration-200 transform hover:scale-105 hover:shadow-xl hover:bg-gray-50 hover:text-blue-600">
                    <p class="font-bold text-lg">3. <span class="font-semibold">Kompeten</span></p>
                    <div class="mt-4 text-left">
                        <p class="text-gray-500">• Meningkatkan kompetensi diri untuk menjawab tantangan yang selalu
                            berubah.</p>
                        <p class="text-gray-500">• Membantu orang lain belajar.</p>
                        <p class="text-gray-500">• Melaksanakan tugas dengan kualitas terbaik.</p>
                    </div>
                </li>

                <li
                    class="rounded-xl bg-white p-6 shadow-lg transition-transform duration-200 transform hover:scale-105 hover:shadow-xl hover:bg-gray-50 hover:text-blue-600">
                    <p class="font-bold text-lg">4. <span class="font-semibold">Harmonis</span></p>
                    <div class="mt-4 text-left">
                        <p class="text-gray-500">• Menghargai setiap orang apa pun latar belakangnya.</p>
                        <p class="text-gray-500">• Suka menolong orang lain.</p>
                        <p class="text-gray-500">• Membangun lingkungan kerja yang kondusif.</p>
                    </div>
                </li>
            </ul>

            <!-- New Row for Remaining Items -->
            <ul class="mt-8 grid grid-cols-1 gap-6 text-center text-slate-700 md:grid-cols-2 lg:grid-cols-3">
                <li
                    class="rounded-xl bg-white p-6 shadow-lg transition-transform duration-200 transform hover:scale-105 hover:shadow-xl hover:bg-gray-50 hover:text-blue-600">
                    <p class="font-bold text-lg">5. <span class="font-semibold">Loyal</span></p>
                    <div class="mt-4 text-left">
                        <p class="text-gray-500">• Memegang teguh ideologi Pancasila, UUD Negara Republik Indonesia
                            Tahun 1945, NKRI, serta pemerintahan yang sah.</p>
                        <p class="text-gray-500">• Menjaga nama baik sesama ASN, Pimpinan, Instansi, dan Negara.</p>
                        <p class="text-gray-500">• Menjaga rahasia jabatan dan negara.</p>
                    </div>
                </li>

                <li
                    class="rounded-xl bg-white p-6 shadow-lg transition-transform duration-200 transform hover:scale-105 hover:shadow-xl hover:bg-gray-50 hover:text-blue-600">
                    <p class="font-bold text-lg">6. <span class="font-semibold">Adaptif</span></p>
                    <div class="mt-4 text-left">
                        <p class="text-gray-500">• Cepat menyesuaikan diri menghadapi perubahan.</p>
                        <p class="text-gray-500">• Terus berinovasi dan mengembangkan kreativitas.</p>
                        <p class="text-gray-500">• Bertindak positif.</p>
                    </div>
                </li>

                <li
                    class="rounded-xl bg-white p-6 shadow-lg transition-transform duration-200 transform hover:scale-105 hover:shadow-xl hover:bg-gray-50 hover:text-blue-600">
                    <p class="font-bold text-lg">7. <span class="font-semibold">Kolaboratif</span></p>
                    <div class="mt-4 text-left">
                        <p class="text-gray-500">• Memberi kesempatan kepada berbagai pihak untuk berkontribusi.</p>
                        <p class="text-gray-500">• Terbuka dalam bekerja sama untuk menghasilkan nilai tambah.</p>
                        <p class="text-gray-500">• Menggerakkan pemanfaatan berbagai sumber data untuk tujuan bersama.
                        </p>
                    </div>
                </li>
            </ul>

            <!-- Employer Branding Section -->
            <div class="mt-10">
                <h2 class="text-2xl font-semibold text-blue-500 mb-4 text-center gradient-text shadow-heading">EMPLOYER
                    BRANDING</h2>
                <div
                    class="flex gap-10 justify-center items-center bg-white border p-6 rounded-lg shadow-md transition-transform duration-200 transform hover:scale-105 hover:bg-gray-50 hover:shadow-lg">
                    <!-- First Logo -->
                    <img alt="bangga melayani bangsa logo" class="mb-4" height="100" src="/images/logo/akhlak.png"
                        width="200" />

                    <!-- Second Logo -->
                    <img alt="bangga melayani bangsa logo" class="mb-4" height="100" src="/images/logo/bangga.png"
                        width="200" />
                </div>
            </div>
        </div>
    </body>

    <x-footer.footer></x-footer.footer>
@endsection
