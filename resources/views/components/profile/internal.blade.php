<section class="py-24">
    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="mb-10 text-center">
            <h2 id="internal-title"
                class="mb-4 text-4xl font-bold leading-tight text-gray-900 transition-all duration-700 opacity-0">
                INTERNAL</h2>
        </div>

        <div
            class="flex flex-wrap items-center justify-center gap-x-3 gap-y-5 lg:gap-y-0 md:flex-wrap lg:flex-nowrap lg:flex-row lg:justify-between lg:gap-x-8">
            <div
                class="relative w-full p-4 transition-all duration-500 bg-gray-100 cursor-pointer card left group rounded-2xl max-md:max-w-md max-md:mx-auto md:w-2/5 md:h-64 xl:p-7 xl:w-1/4 hover:bg-blue-500">
                <a href="profil/tugas" class="block w-full h-full no-underline">
                    <div class="flex items-center justify-center mb-5 bg-white rounded-full w-14 h-14 ">
                        <svg class="icon icon-tabler icon-tabler-replace" fill="none" height="24"
                            stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 0h24v24H0z" fill="none" stroke="none" />
                            <rect height="6" rx="1" width="6" x="3" y="3" />
                            <rect height="6" rx="1" width="6" x="15" y="15" />
                            <path d="M21 11v-3a2 2 0 0 0 -2 -2h-6l3 3m0 -6l-3 3" />
                            <path d="M3 13v3a2 2 0 0 0 2 2h6l-3 -3m0 6l3 -3" />
                        </svg>
                    </div>
                    <h4 class="mb-3 text-xl font-semibold text-gray-900 capitalize group-hover:text-white">TUGAS DAN
                        FUNGSI</h4>
                    <p class="text-sm font-normal leading-5 text-gray-500 group-hover:text-white">
                        informasi lengkap mengenai tugas dan fungsi Bappelitbangda Kabupaten Demak
                    </p>
                </a>
            </div>

            <div
                class="relative w-full p-4 transition-all duration-500 bg-gray-100 cursor-pointer card right group rounded-2xl max-md:max-w-md max-md:mx-auto md:w-2/5 md:h-64 xl:p-7 xl:w-1/4 hover:bg-blue-500">
                <a href="/profil/nilai_budaya_kerja" class="flex flex-col items-start h-full no-underline">
                    <div class="flex items-center justify-center mb-5 bg-white rounded-full w-14 h-14">
                        <svg height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M10 3H4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1zM9 9H5V5h4v4zm11-6h-6a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1zm-1 6h-4V5h4v4zm-9 4H4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-6a1 1 0 0 0-1-1zm-1 6H5v-4h4v4zm8-6c-2.206 0-4 1.794-4 4s1.794 4 4 4 4-1.794 4-4-1.794-4-4-4zm0 6c-1.103 0-2-.897-2-2s.897-2 2-2 2 .897 2 2-.897 2-2 2z" />
                        </svg>
                    </div>
                    <h4 class="mb-3 text-xl font-semibold text-gray-900 capitalize group-hover:text-white">NILAI BUDAYA
                        KERJA</h4>
                    <p class="text-sm font-normal leading-5 text-gray-500 group-hover:text-white">
                        Nilai budaya kerja bapenglid kabupaten demak.
                    </p>
                </a>
            </div>

            <div
                class="relative w-full p-4 transition-all duration-500 bg-gray-100 cursor-pointer card right group rounded-2xl max-md:max-w-md max-md:mx-auto md:w-2/5 md:h-64 xl:p-7 xl:w-1/4 hover:bg-blue-500">
                <a href="/profil/pegawai" class="block w-full h-full no-underline">
                    <div class="flex items-center justify-center mb-5 bg-white rounded-full w-14 h-14">
                        <svg class="w-8 h-8">
                            <x-heroicon-o-user />
                        </svg>
                    </div>
                    <h4 class="mb-3 text-xl font-semibold text-gray-900 capitalize group-hover:text-white">DAFTAR
                        PEGAWAI</h4>
                    <p class="text-sm font-normal leading-5 text-gray-500 group-hover:text-white">
                        We provide faster transaction speeds than competitors, so money arrives and is received faster.
                    </p>
                </a>
            </div>

        </div>
    </div>
</section>
<script>
    const title = document.getElementById('internal-title');
    const cards = document.querySelectorAll('.card');

    // Menambahkan event listener scroll
    window.addEventListener('scroll', () => {
        const scrollPosition = window.scrollY + window.innerHeight;

        // Animasi untuk judul
        if (scrollPosition > title.offsetTop + title.clientHeight) {
            title.classList.add('opacity-100', 'translate-y-0');
        }

        // Animasi untuk kartu-kartu
        cards.forEach(card => {
            if (scrollPosition > card.offsetTop + card.clientHeight / 2) {
                card.classList.add('visible');
            } else {
                card.classList.remove('visible');
            }
        });
    });
</script>
