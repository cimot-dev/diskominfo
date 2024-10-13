<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bappelitbangda.demakkab</title>
    <link rel="stylesheet" href="tailwind.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="shortcut icon" href="/images\logo\demak.png" type="image/x-icon" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Tambahkan Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!-- Tambahkan AOS.js -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            once: false, // Animasi akan berjalan berulang kali setiap kali elemen muncul di viewport
            duration: 1000, // Durasi animasi dalam milidetik
        });
    </script>
</head>

<body>
    <div class="container mx-auto">
        <header class="fixed inset-x-0 top-0 z-30 bg-white shadow-md">
            <div>
                <header class="fixed z-10 bg-white rounded-lg shadow-md inset-x-4 top-4 ">
                    <nav class="flex items-center justify-between p-3 lg:px-8" aria-label="Global">
                        <a href="/" class="flex items-center lg:flex-1">
                            <img class="w-auto h-12" src="/images/logo/demak.png" alt="Bappelitbangda">
                            <div class="mb-1 ml-4">
                                <h1 class="text-xl font-bold">Bappelitbangda</h1>
                                <p class="text-sm">Kabupaten Demak</p>
                            </div>
                        </a>


                        <!-- Button to Open Mobile Menu -->
                        <div class="lg:hidden">
                            <button type="button"
                                class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700"
                                onclick="toggleMenu()">
                                <span class="sr-only">Open main menu</span>
                                <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                                </svg>
                            </button>
                        </div>



                        <!-- Mobile Menu -->
                        <div class="lg:hidden" role="dialog" aria-modal="true" id="mobile-menu" style="display: none;">
                            <!-- Background Overlay -->
                            <div class="fixed inset-0 z-40 bg-black bg-opacity-50" onclick="toggleMenu()"></div>
                            <!-- Mobile Menu Content -->
                            <div
                                class="fixed inset-y-0 right-0 z-50 w-full px-6 py-6 overflow-y-auto bg-white sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
                                <div class="flex items-center justify-between">
                                    <!-- Button to Close Mobile Menu -->
                                    <button type="button"
                                        class="px-4 py-2 font-bold text-white bg-red-500 rounded hover:bg-red-700"
                                        onclick="toggleMenu()">
                                        <span class="sr-only">Close menu</span>
                                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                            aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M6 18L18 6M6 6l12 12" />
                                        </svg>
                                    </button>
                                </div>
                                <div class="flow-root mt-6">
                                    <div class="-my-6 divide-y divide-gray-500/10">
                                        <div class="py-6 space-y-2">
                                            <a href="/beranda"
                                                class="block px-3 py-2 -mx-3 text-base font-semibold leading-7 text-gray-900 rounded-lg hover:bg-indigo-100">Beranda</a>
                                            <a href="/berita"
                                                class="block px-3 py-2 -mx-3 text-base font-semibold leading-7 text-gray-900 rounded-lg hover:bg-indigo-100">Berita</a>
                                            <a href="/profil"
                                                class="block px-3 py-2 -mx-3 text-base font-semibold leading-7 text-gray-900 rounded-lg hover:bg-indigo-100">Profile</a>
                                            <a href="/dokumen"
                                                class="block px-3 py-2 -mx-3 text-base font-semibold leading-7 text-gray-900 rounded-lg hover:bg-indigo-100">Dokumen</a>
                                            <a href="/ppid"
                                                class="block px-3 py-2 -mx-3 text-base font-semibold leading-7 text-gray-900 rounded-lg hover:bg-indigo-100">PPID</a>
                                            {{-- <a href="/panduan"
                                                class="block px-3 py-2 -mx-3 text-base font-semibold leading-7 text-gray-900 rounded-lg hover:bg-indigo-100">Panduan
                                                SIPD</a> --}}
                                        </div>
                                        <div class="py-6">
                                            <a href="/admin"
                                                class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Log
                                                in</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- JavaScript for Toggling the Mobile Menu -->
                        <script>
                            function toggleMenu() {
                                const mobileMenu = document.getElementById('mobile-menu');
                                if (mobileMenu.style.display === 'none' || mobileMenu.style.display === '') {
                                    mobileMenu.style.display = 'block';
                                    document.body.style.overflow = 'hidden'; // Disable scrolling
                                } else {
                                    mobileMenu.style.display = 'none';
                                    document.body.style.overflow = ''; // Re-enable scrolling
                                }
                            }
                        </script>
                        <div class="hidden lg:flex lg:gap-x-5 ">
                            <a href="/beranda"
                                class="px-4 py-2 text-sm font-semibold leading-6 text-gray-900 transition-transform duration-300 ease-in-out bg-white rounded-lg hover:text-gray-700 hover:scale-105 hover:shadow-xl hover:bg-indigo-100">Beranda</a>
                            <a href="/berita"
                                class="px-4 py-2 text-sm font-semibold leading-6 text-gray-900 transition-transform duration-300 ease-in-out bg-white rounded-lg hover:text-gray-700 hover:scale-105 hover:shadow-xl hover:bg-indigo-100">Berita</a>
                            <a href="/profil"
                                class="px-4 py-2 text-sm font-semibold leading-6 text-gray-900 transition-transform duration-300 ease-in-out bg-white rounded-lg hover:text-gray-700 hover:scale-105 hover:shadow-xl hover:bg-indigo-100">Profile</a>
                            <a href="/dokumen"
                                class="px-4 py-2 text-sm font-semibold leading-6 text-gray-900 transition-transform duration-300 ease-in-out bg-white rounded-lg hover:text-gray-700 hover:scale-105 hover:shadow-xl hover:bg-indigo-100">Dokumen</a>
                            <a href="/ppid"
                                class="px-4 py-2 text-sm font-semibold leading-6 text-gray-900 transition-transform duration-300 ease-in-out bg-white rounded-lg hover:text-gray-700 hover:scale-105 hover:shadow-xl hover:bg-indigo-100">PPID</a>
                            {{-- <a href="/panduan"
                                class="px-4 py-2 text-sm font-semibold leading-6 text-gray-900 transition-transform duration-300 ease-in-out bg-white rounded-lg hover:text-gray-700 hover:scale-105 hover:shadow-xl hover:bg-indigo-100">Panduan
                                SIPD</a> --}}
                        </div>
                        <div class="hidden lg:flex lg:flex-1 lg:justify-end">
                            <a href="/admin"
                                class="px-4 py-2 text-sm font-semibold leading-6 text-gray-900 transition-transform duration-300 ease-in-out bg-white rounded-lg shadow-lg hover:text-gray-700 hover:scale-105 hover:shadow-xl hover:bg-gray-100">Log
                                in <span aria-hidden="true">&rarr;</span></a>
                        </div>
                    </nav>
                </header>
            </div>
        </header>
        @yield('navbar')
    </div>
</body>

</html>
