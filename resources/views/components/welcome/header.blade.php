<style>
    html,
    body {
        overflow-x: hidden;
    }
</style>

<body>


    <!-- Background Image -->
    <div class="absolute inset-0 overflow-hidden bg-black -z-20 blur-sm">
        <img src="images\logo\bgf.jpeg" alt="Background" class="object-cover w-full h-full bg-black opacity-50">
    </div>

    <!-- Content Section -->
    <section class="relative overflow-x-hidden">
        <!-- Container -->
        <div class="w-full px-5 py-16 mx-auto max-w-7xl md:px-10 md:py-24 lg:py-32">
            <div class="hidden sm:mb-8 sm:flex sm:justify-center">
                <div
                    class="relative px-6 py-4 text-base leading-6 text-white transition-all duration-300 rounded-full bg-Light-500 ring-1 ring-gray-500/20 hover:ring-white/30">
                    "Dirgahayu Republik Indonesia: "<em class="font-semibold">Nusantara Baru Indonesia Maju</em>
                    <a href="https://www.setneg.go.id/view/index/peringatan_hari_ulang_tahun_ke_79_kemerdekaan_republik_indonesia_tahun_2024"
                        class="font-semibold text-indigo-400 transition-all duration-300 hover:text-indigo-600">
                        <span class="absolute inset-0" aria-hidden="true"></span>Read more <span
                            aria-hidden="true">&rarr;</span>
                    </a>
                </div>
            </div>

            <!-- Heading Div -->
            <div class="w-full max-w-3xl mx-auto mt-12 text-center md:mb-16 lg:mb-20 md:mt-16 lg:mt-20">
                <!-- Typing Effect Container -->
                <div class="relative inline-block">
                    <h1 class="mb-4 text-4xl font-bold md:text-6xl">
                        <span id="typing-effect" class="inline-block text-white"></span>
                    </h1>
                    <!-- Static Text with Background Image -->
                    <h2 class="mt-4 text-4xl italic text-white md:text-6xl">
                        Demak.
                    </h2>
                </div>

                <p class="mx-auto mb-5 mt-8 max-w-[528px] text-sm md:text-xl text-white lg:mb-8 leading-relaxed">
                    Badan Perencanaan Pembangunan, Penelitian dan Pengembangan Daerah Kabupaten Demak.
                </p>
            </div>
            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    const textToType = "Guyub rukun mbangun";
                    const typingSpeed = 100; // milliseconds per character
                    const pauseBetweenLoops = 2000; // milliseconds before restarting
                    const typingElement = document.getElementById("typing-effect");

                    let i = 0;

                    function typeText() {
                        if (i < textToType.length) {
                            typingElement.innerHTML += textToType.charAt(i);
                            i++;
                            setTimeout(typeText, typingSpeed);
                        } else {
                            setTimeout(resetText, pauseBetweenLoops);
                        }
                    }

                    function resetText() {
                        i = 0;
                        typingElement.innerHTML = "";
                        setTimeout(typeText, typingSpeed);
                    }

                    // Start the typing effect
                    typeText();
                });
            </script>
        </div>
    </section>

    <!-- Bottom Overlay -->
    <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]"
        aria-hidden="true">
        <div class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]"
            style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
        </div>
    </div>
</body>
