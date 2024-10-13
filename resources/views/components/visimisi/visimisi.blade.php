   <body class="bg-white text-gray-900">
       <div class="mt-20 mb-20 container mx-auto py-12 px-6">
           <!-- Back to Profil Button -->
           <button onclick="window.location.href='{{ route('profil') }}'"
               class="inline-flex items-center px-6 py-3 mb-6 text-white transition-all duration-300 transform bg-blue-600 rounded-lg shadow-lg hover:bg-blue-700 hover:shadow-xl hover:-translate-y-1 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
               <i class="mr-2 fas fa-arrow-left"></i>
               <span class="font-semibold">PROFIL</span>
           </button>

           <!-- Two Column Layout for Visi and Misi -->
           <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
               <!-- Visi Section -->
               <div
                   class="p-6 bg-white rounded-lg shadow-md transform hover:scale-105 transition-transform duration-300 ease-in-out hover:shadow-lg">
                   <h2 class="text-xl font-bold text-gray-700 uppercase tracking-wide">Visi</h2>
                   <p class="mt-4 text-2xl font-semibold text-gray-800 leading-relaxed">
                       Demak bermartabat, maju dan sejahtera
                   </p>
               </div>

               <!-- Misi Section -->
               <div class="space-y-6">
                   <!-- Misi Title -->
                   <h2 class="text-xl font-bold text-gray-700 uppercase tracking-wide">Misi</h2>

                   <!-- Misi 1 -->
                   <div
                       class="p-6 bg-white rounded-lg shadow-md flex items-start transform hover:scale-105 transition-transform duration-300 ease-in-out hover:shadow-lg">
                       <div
                           class="w-10 h-10 bg-blue-500 text-white rounded-full flex items-center justify-center font-bold text-lg hover:bg-gradient-to-r from-blue-500 to-blue-700 transition-colors duration-300 ease-in-out">
                           1
                       </div>
                       <p class="ml-4 text-gray-800 leading-relaxed">
                           Memperkuat tata kelola pemerintahan yang baik, serta kehidupan bermasyarakat yang agamis,
                           kondusif dan berbudaya.
                       </p>
                   </div>

                   <!-- Misi 2 -->
                   <div
                       class="p-6 bg-white rounded-lg shadow-md flex items-start transform hover:scale-105 transition-transform duration-300 ease-in-out hover:shadow-lg">
                       <div
                           class="w-10 h-10 bg-blue-500 text-white rounded-full flex items-center justify-center font-bold text-lg hover:bg-gradient-to-r from-red-500 to-red-700 transition-colors duration-300 ease-in-out">
                           2
                       </div>
                       <p class="ml-4 text-gray-800 leading-relaxed">
                           Meningkatkan sumber daya manusia, sumber daya alam dan lingkungan hidup yang berkualitas dan
                           berdaya saing.
                       </p>
                   </div>

                   <!-- Misi 3 -->
                   <div
                       class="p-6 bg-white rounded-lg shadow-md flex items-start transform hover:scale-105 transition-transform duration-300 ease-in-out hover:shadow-lg">
                       <div
                           class="w-10 h-10 bg-blue-500 text-white rounded-full flex items-center justify-center font-bold text-lg hover:bg-gradient-to-r from-red-500 to-red-700 transition-colors duration-300 ease-in-out">
                           3
                       </div>
                       <p class="ml-4 text-gray-800 leading-relaxed">
                           Mendorong pertumbuhan ekonomi berbasis potensi lokal, membuka lapangan kerja, mengurangi
                           kemiskinan dan pengangguran.
                       </p>
                   </div>
               </div>
           </div>
       </div>

       <style>
           body {
               font-family: 'Roboto', sans-serif;
           }
       </style>
   </body>
