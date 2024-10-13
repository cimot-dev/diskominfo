<section>
    <div class="px-4 py-10 mx-auto pt-36 max-w-7xl md:px-5 lg:px-5">
        <div class="grid grid-cols-1 gap-12 lg:grid-cols-2">
            <!-- Bagian gambar -->
            <div class="grid grid-cols-1 gap-6 pt-2 sm:grid-cols-2">
                <div class="flex items-start justify-center pt-24">
                    <img class="object-cover rounded-xl" src="\images\asset\bap.jpg" alt="Rapat Sosialisasi">
                </div>
                <img class="object-cover rounded-xl" src="\images\asset\bgf.jpeg" alt="Bappelitbangda">
            </div>

            <!-- Bagian teks -->
            <div class="flex flex-col items-start justify-center gap-10">
                <div class="flex flex-col gap-8">
                    <div class="flex flex-col gap-3">
                        <h2 class="text-4xl font-bold leading-normal text-gray-900">Badan Perencanaan Pembangunan,
                            Penelitian dan Pengembangan Daerah Kabupaten Demak</h2>
                        <p class="text-base leading-relaxed text-gray-500">Bappelitbangda merupakan unsur penunjang
                            urusan pemerintahan bidang perencanaan pembangunan dan bidang penelitian dan pengembangan
                            yang menjadi kewenangan Daerah.</p>
                        <button onclick="window.location.href='{{ route('pegawai.index') }}'"
                            class="px-6 py-3 mt-12 text-white transition-transform duration-300 transform rounded-lg shadow-md bg-gradient-to-r from-blue-500 to-purple-600 hover:scale-105 hover:shadow-xl focus:outline-none focus:ring-2 focus:ring-blue-400">
                            Lihat Jumlah Pegawai
                        </button>


                    </div>


                </div>
            </div>
        </div>
    </div>

</section>
