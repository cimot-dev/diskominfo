 <div class="mt-28 mb-20 max-w-5xl mx-auto">
     <button onclick="window.location.href='{{ route('profil') }}'"
         class="inline-flex items-center px-6 py-3 mb-6 text-white transition-all duration-300 transform bg-blue-600 rounded-lg shadow-lg hover:bg-blue-700 hover:shadow-xl hover:-translate-y-1 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
         <i class="mr-2 fas fa-arrow-left"></i>
         <span class="font-semibold">PROFIL</span>
     </button>
     <h1 class="text-center text-3xl font-bold text-gray-800 mb-4 p-4">10 Budaya Malu Aparatur</h1>
     <p class="text-center text-xl font-bold text-gray-800 mb-6">Aku malu jika ...</p>

     <!-- Responsive Grid with Animated Cards -->
     <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
         <div
             class="bg-blue-50 border-2 border-blue-300 p-6 rounded-lg shadow-lg hover:shadow-2xl transform hover:scale-105 transition duration-300 animate-fadeInScale">
             <div class="flex items-center">
                 <i class="fas fa-clock text-blue-500 mr-2"></i>
                 <h3 class="text-lg font-bold text-blue-800">1</h3>
             </div>
             <p class="text-gray-800 font-semibold">Terlambat masuk kerja.</p>
         </div>
         <div
             class="bg-blue-50 border-2 border-blue-300 p-6 rounded-lg shadow-lg hover:shadow-2xl transform hover:scale-105 transition duration-300 animate-fadeInScale">
             <div class="flex items-center">
                 <i class="fas fa-flag text-blue-500 mr-2"></i>
                 <h3 class="text-lg font-bold text-blue-800">2</h3>
             </div>
             <p class="text-gray-800 font-semibold">Tidak ikut apel.</p>
         </div>
         <div
             class="bg-blue-50 border-2 border-blue-300 p-6 rounded-lg shadow-lg hover:shadow-2xl transform hover:scale-105 transition duration-300 animate-fadeInScale">
             <div class="flex items-center">
                 <i class="fas fa-user-times text-blue-500 mr-2"></i>
                 <h3 class="text-lg font-bold text-blue-800">3</h3>
             </div>
             <p class="text-gray-800 font-semibold">Tidak masuk kerja tanpa alasan.</p>
         </div>
         <div
             class="bg-blue-50 border-2 border-blue-300 p-6 rounded-lg shadow-lg hover:shadow-2xl transform hover:scale-105 transition duration-300 animate-fadeInScale">
             <div class="flex items-center">
                 <i class="fas fa-exclamation-triangle text-blue-500 mr-2"></i>
                 <h3 class="text-lg font-bold text-blue-800">4</h3>
             </div>
             <p class="text-gray-800 font-semibold">Sering minta izin tidak masuk kerja.</p>
         </div>
         <div
             class="bg-blue-50 border-2 border-blue-300 p-6 rounded-lg shadow-lg hover:shadow-2xl transform hover:scale-105 transition duration-300 animate-fadeInScale">
             <div class="flex items-center">
                 <i class="fas fa-tasks text-blue-500 mr-2"></i>
                 <h3 class="text-lg font-bold text-blue-800">5</h3>
             </div>
             <p class="text-gray-800 font-semibold">Bekerja tanpa program.</p>
         </div>
         <div
             class="bg-blue-50 border-2 border-blue-300 p-6 rounded-lg shadow-lg hover:shadow-2xl transform hover:scale-105 transition duration-300 animate-fadeInScale">
             <div class="flex items-center">
                 <i class="fas fa-sign-out-alt text-blue-500 mr-2"></i>
                 <h3 class="text-lg font-bold text-blue-800">6</h3>
             </div>
             <p class="text-gray-800 font-semibold">Pulang sebelum waktunya.</p>
         </div>
         <div
             class="bg-blue-50 border-2 border-blue-300 p-6 rounded-lg shadow-lg hover:shadow-2xl transform hover:scale-105 transition duration-300 animate-fadeInScale">
             <div class="flex items-center">
                 <i class="fas fa-walking text-blue-500 mr-2"></i>
                 <h3 class="text-lg font-bold text-blue-800">7</h3>
             </div>
             <p class="text-gray-800 font-semibold">Sering meninggalkan kerja tanpa alasan penting.</p>
         </div>
         <div
             class="bg-blue-50 border-2 border-blue-300 p-6 rounded-lg shadow-lg hover:shadow-2xl transform hover:scale-105 transition duration-300 animate-fadeInScale">
             <div class="flex items-center">
                 <i class="fas fa-file-signature text-blue-500 mr-2"></i>
                 <h3 class="text-lg font-bold text-blue-800">8</h3>
             </div>
             <p class="text-gray-800 font-semibold">Bekerja tanpa pertanggungjawaban.</p>
         </div>
         <div
             class="bg-blue-50 border-2 border-blue-300 p-6 rounded-lg shadow-lg hover:shadow-2xl transform hover:scale-105 transition duration-300 animate-fadeInScale">
             <div class="flex items-center">
                 <i class="fas fa-exclamation-circle text-blue-500 mr-2"></i>
                 <h3 class="text-lg font-bold text-blue-800">9</h3>
             </div>
             <p class="text-gray-800 font-semibold">Pekerjaan terbengkalai.</p>
         </div>
         <div
             class="bg-blue-50 border-2 border-blue-300 p-6 rounded-lg shadow-lg hover:shadow-2xl transform hover:scale-105 transition duration-300 animate-fadeInScale">
             <div class="flex items-center">
                 <i class="fas fa-tshirt text-blue-500 mr-2"></i>
                 <h3 class="text-lg font-bold text-blue-800">10</h3>
             </div>
             <p class="text-gray-800 font-semibold">Berpakaian tidak rapi dan tanpa atribut.</p>
         </div>
     </div>
 </div>

 <script>
     tailwind.config = {
         theme: {
             extend: {
                 keyframes: {
                     fadeInScale: {
                         '0%': {
                             opacity: '0',
                             transform: 'scale(0.95)'
                         },
                         '100%': {
                             opacity: '1',
                             transform: 'scale(1)'
                         }
                     }
                 },
                 animation: {
                     fadeInScale: 'fadeInScale 0.6s ease-out'
                 }
             }
         }
     }
 </script>
