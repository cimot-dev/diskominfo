 <body class="bg-white min-h-screen">
     <div class="mt-24 mb-20 container mx-auto p-6">
         <!-- Back to Profil Button -->
         <button onclick="window.location.href='{{ route('profil') }}'"
             class="inline-flex items-center px-6 py-3 mb-6 text-white transition-all duration-300 transform bg-blue-600 rounded-lg shadow-lg hover:bg-blue-700 hover:shadow-xl hover:-translate-y-1 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
             <i class="mr-2 fas fa-arrow-left"></i>
             <span class="font-semibold">PROFIL</span>
         </button>

         <!-- Title Section -->
         <h1 class="text-3xl font-extrabold text-gray-800 mb-8 text-center">Program Unggulan Bupati Demak</h1>

         <!-- Program Unggulan Grid -->
         <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
             <!-- Each item with improved styles -->
             <div
                 class="bg-white p-6 rounded-lg shadow-lg opacity-0 animate-slideIn hover:shadow-2xl transform hover:scale-105 transition-transform duration-300 ease-in-out">
                 <div class="flex items-center mb-4">
                     <div
                         class="bg-gray-500 text-white rounded-full h-10 w-10 flex items-center justify-center font-bold text-lg">
                         1</div>
                     <i
                         class="fas fa-praying-hands text-white ml-4 h-10 w-10 flex items-center justify-center rounded-full bg-red-500"></i>
                 </div>
                 <p class="text-gray-700 text-lg">Peningkatan harmonisasi dan fasilitas kehidupan beragama.</p>
             </div>

             <div
                 class="bg-white p-6 rounded-lg shadow-lg opacity-0 animate-slideIn hover:shadow-2xl transform hover:scale-105 transition-transform duration-300 ease-in-out">
                 <div class="flex items-center mb-4">
                     <div
                         class="bg-gray-500 text-white rounded-full h-10 w-10 flex items-center justify-center font-bold text-lg">
                         2</div>
                     <i
                         class="fas fa-city text-white ml-4 h-10 w-10 flex items-center justify-center rounded-full bg-blue-500"></i>
                 </div>
                 <p class="text-gray-700 text-lg">Peningkatan tata kelola pemerintahan dan pelayanan publik berbasis
                     <i>smart city</i>.
                 </p>
             </div>

             <div
                 class="bg-white p-6 rounded-lg shadow-lg opacity-0 animate-slideIn hover:shadow-2xl transform hover:scale-105 transition-transform duration-300 ease-in-out">
                 <div class="flex items-center mb-4">
                     <div
                         class="bg-gray-500 text-white rounded-full h-10 w-10 flex items-center justify-center font-bold text-lg">
                         3</div>
                     <i
                         class="fas fa-leaf text-white ml-4 h-10 w-10 flex items-center justify-center rounded-full bg-green-500"></i>
                 </div>
                 <p class="text-gray-700 text-lg">Peningkatan kebersihan dan keindahan wilayah.</p>
             </div>

             <div
                 class="bg-white p-6 rounded-lg shadow-lg opacity-0 animate-slideIn hover:shadow-2xl transform hover:scale-105 transition-transform duration-300 ease-in-out">
                 <div class="flex items-center mb-4">
                     <div
                         class="bg-gray-500 text-white rounded-full h-10 w-10 flex items-center justify-center font-bold text-lg">
                         4</div>
                     <i
                         class="fas fa-graduation-cap text-white ml-4 h-10 w-10 flex items-center justify-center rounded-full bg-yellow-500"></i>
                 </div>
                 <p class="text-gray-700 text-lg">Peningkatan kualitas dan aksesibilitas pelayanan pendidikan dan
                     kesehatan.</p>
             </div>

             <div
                 class="bg-white p-6 rounded-lg shadow-lg opacity-0 animate-slideIn hover:shadow-2xl transform hover:scale-105 transition-transform duration-300 ease-in-out">
                 <div class="flex items-center mb-4">
                     <div
                         class="bg-gray-500 text-white rounded-full h-10 w-10 flex items-center justify-center font-bold text-lg">
                         5</div>
                     <i
                         class="fas fa-lightbulb text-white ml-4 h-10 w-10 flex items-center justify-center rounded-full bg-purple-500"></i>
                 </div>
                 <p class="text-gray-700 text-lg">Pengembangan inovasi daerah.</p>
             </div>

             <div
                 class="bg-white p-6 rounded-lg shadow-lg opacity-0 animate-slideIn hover:shadow-2xl transform hover:scale-105 transition-transform duration-300 ease-in-out">
                 <div class="flex items-center mb-4">
                     <div
                         class="bg-gray-500 text-white rounded-full h-10 w-10 flex items-center justify-center font-bold text-lg">
                         6</div>
                     <i
                         class="fas fa-city text-white ml-4 h-10 w-10 flex items-center justify-center rounded-full bg-red-500"></i>
                 </div>
                 <p class="text-gray-700 text-lg">Perluasan kawasan perkotaan.</p>
             </div>

             <div
                 class="bg-white p-6 rounded-lg shadow-lg opacity-0 animate-slideIn hover:shadow-2xl transform hover:scale-105 transition-transform duration-300 ease-in-out">
                 <div class="flex items-center mb-4">
                     <div
                         class="bg-gray-500 text-white rounded-full h-10 w-10 flex items-center justify-center font-bold text-lg">
                         7</div>
                     <i
                         class="fas fa-road text-white ml-4 h-10 w-10 flex items-center justify-center rounded-full bg-blue-500"></i>
                 </div>
                 <p class="text-gray-700 text-lg">Percepatan pembangunan infrastruktur, terutama di kawasan pesisir,
                     pertanian, dan pusat pertumbuhan.</p>
             </div>

             <div
                 class="bg-white p-6 rounded-lg shadow-lg opacity-0 animate-slideIn hover:shadow-2xl transform hover:scale-105 transition-transform duration-300 ease-in-out">
                 <div class="flex items-center mb-4">
                     <div
                         class="bg-gray-500 text-white rounded-full h-10 w-10 flex items-center justify-center font-bold text-lg">
                         8</div>
                     <i
                         class="fas fa-chart-line text-white ml-4 h-10 w-10 flex items-center justify-center rounded-full bg-pink-500"></i>
                 </div>
                 <p class="text-gray-700 text-lg">Percepatan pemulihan ekonomi masyarakat.</p>
             </div>

             <div
                 class="bg-white p-6 rounded-lg shadow-lg opacity-0 animate-slideIn hover:shadow-2xl transform hover:scale-105 transition-transform duration-300 ease-in-out">
                 <div class="flex items-center mb-4">
                     <div
                         class="bg-gray-500 text-white rounded-full h-10 w-10 flex items-center justify-center font-bold text-lg">
                         9</div>
                     <i
                         class="fas fa-users text-white ml-4 h-10 w-10 flex items-center justify-center rounded-full bg-yellow-500"></i>
                 </div>
                 <p class="text-gray-700 text-lg">Peningkatan kebudayaan, perlindungan, dan rehabilitasi sosial.</p>
             </div>
         </div>
     </div>

     <script>
         tailwind.config = {
             theme: {
                 extend: {
                     fontFamily: {
                         'poppins': ['Poppins', 'sans-serif']
                     },
                     keyframes: {
                         slideIn: {
                             '0%': {
                                 transform: 'translateX(100%)',
                                 opacity: '0'
                             },
                             '100%': {
                                 transform: 'translateX(0)',
                                 opacity: '1'
                             }
                         }
                     },
                     animation: {
                         slideIn: 'slideIn 0.8s ease-out forwards'
                     }
                 }
             }
         }
     </script>
 </body>
