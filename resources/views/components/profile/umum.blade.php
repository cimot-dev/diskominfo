<section class="my-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-gray-700 font-bold text-3xl mb-8">UMUM</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-5 gap-8">
            <!-- Left to Right -->
            <a href="/profil/visi&misiBupati"
                class="bg-white p-6 rounded-lg shadow-lg hover:shadow-2xl transform hover:scale-110 transition-all duration-300 flex flex-col items-center text-center space-y-4 opacity-0 animate-slide-left"
                data-animation="slide-left">
                <div class="bg-blue-100 p-4 rounded-full">
                    <i class="fas fa-chevron-right text-blue-500 text-2xl"></i>
                </div>
                <span class="text-gray-800 font-semibold">Visi dan misi Bupati</span>
            </a>
            <a href="/profil/ProgramUnggulanBupati"
                class="bg-white p-6 rounded-lg shadow-lg hover:shadow-2xl transform hover:scale-110 transition-all duration-300 flex flex-col items-center text-center space-y-4 opacity-0 animate-slide-left"
                data-animation="slide-left">
                <div class="bg-blue-100 p-4 rounded-full">
                    <i class="fas fa-bullseye text-blue-500 text-2xl"></i>
                </div>
                <span class="text-gray-800 font-semibold">Program unggulan Bupati</span>
            </a>
            <!-- Bottom to Top -->
            <a href="/profil/perangkat-daerah"
                class="bg-white p-6 rounded-lg shadow-lg hover:shadow-2xl transform hover:scale-110 transition-all duration-300 flex flex-col items-center text-center space-y-4 opacity-0 animate-slide-up"
                data-animation="slide-up">
                <div class="bg-blue-100 p-4 rounded-full">
                    <i class="fas fa-list text-blue-500 text-2xl"></i>
                </div>
                <span class="text-gray-800 font-semibold">Daftar Perangkat Daerah</span>
            </a>
            <!-- Right to Left -->
            <a href="/profil/budayaMalu"
                class="bg-white p-6 rounded-lg shadow-lg hover:shadow-2xl transform hover:scale-110 transition-all duration-300 flex flex-col items-center text-center space-y-4 opacity-0 animate-slide-right"
                data-animation="slide-right">
                <div class="bg-blue-100 p-4 rounded-full">
                    <i class="fas fa-exclamation-circle text-blue-500 text-2xl"></i>
                </div>
                <span class="text-gray-800 font-semibold">10 Budaya Malu Aparatur</span>
            </a>
            <a href="/profil/akhlak"
                class="bg-white p-6 rounded-lg shadow-lg hover:shadow-2xl transform hover:scale-110 transition-all duration-300 flex flex-col items-center text-center space-y-4 opacity-0 animate-slide-right"
                data-animation="slide-right">
                <div class="bg-blue-100 p-4 rounded-full">
                    <i class="fas fa-circle-notch text-blue-500 text-2xl"></i>
                </div>
                <span class="text-gray-800 font-semibold">BerAKHLAK</span>
            </a>
        </div>
    </div>
</section>

<script>
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const element = entry.target;
                const animation = element.getAttribute('data-animation');
                element.classList.add('animate-' + animation);
                element.classList.remove('opacity-0');
            } else {
                entry.target.classList.add('opacity-0');
            }
        });
    }, {
        threshold: 0.1
    });

    document.querySelectorAll('a[data-animation]').forEach((el) => {
        observer.observe(el);
    });
</script>
