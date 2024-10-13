 <div class="max-w-4xl p-6 mx-auto mb-40 mt-20">
     <!-- Link ke Profil -->
     <div class="mb-6">
         <button onclick="window.location.href='{{ route('profil') }}'"
             class="inline-flex items-center px-6 py-3 mb-6 text-white transition-all duration-300 transform bg-blue-600 rounded-lg shadow-lg hover:bg-blue-700 hover:shadow-xl hover:-translate-y-1 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
             <i class="mr-2 fas fa-arrow-left"></i>
             <span class="font-semibold">PROFIL</span>
         </button>
     </div>
     <!-- Judul Halaman -->
     <h1 class="mb-6 text-4xl font-bold text-center text-gray-900">Tugas dan Fungsi</h1>

     <!-- Grid Layout -->
     <div class="grid grid-cols-1 gap-8 md:grid-cols-2">
         <!-- Kartu TUGAS -->
         <div
             class="p-8 transition-shadow duration-300 transform bg-white rounded-lg shadow-lg hover:shadow-xl hover:scale-105">
             <h2 class="mb-4 text-2xl font-bold text-center text-blue-500">TUGAS</h2>
             <p class="leading-relaxed text-justify text-gray-700">
                 Membantu Bupati melaksanakan fungsi penunjang urusan pemerintahan bidang perencanaan pembangunan dan
                 bidang penelitian dan pengembangan yang menjadi kewenangan Daerah.
             </p>
         </div>

         <!-- Kartu FUNGSI -->
         <div
             class="p-8 transition-shadow duration-300 transform bg-white rounded-lg shadow-lg hover:shadow-xl hover:scale-105">
             <h2 class="mb-4 text-2xl font-bold text-center text-blue-500">FUNGSI</h2>
             <ol class="space-y-3 leading-relaxed text-gray-700 list-decimal list-inside">
                 <li><span class="font-bold text-blue-500"></span> Perumusan kebijakan bidang perencanaan pembangunan
                     dan
                     bidang penelitian dan pengembangan.</li>
                 <li><span class="font-bold text-blue-500"></span> Pelaksanaan kebijakan bidang perencanaan pembangunan
                     dan bidang penelitian dan pengembangan.</li>
                 <li><span class="font-bold text-blue-500"></span> Pelaksanaan evaluasi dan pelaporan bidang perencanaan
                     pembangunan dan bidang penelitian dan pengembangan.</li>
                 <li><span class="font-bold text-blue-500"></span> Pelaksanaan, pembinaan administrasi dan
                     kesekretariatan
                     sesuai dengan lingkup tugasnya.</li>
                 <li><span class="font-bold text-blue-500"></span> Pelaksanaan fungsi kesekretariatan Badan.</li>
             </ol>
         </div>
     </div>
 </div>
