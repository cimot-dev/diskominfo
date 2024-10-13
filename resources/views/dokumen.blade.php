@extends('layouts.navbar')

@section('navbar')
    <section>
        <div class="relative py-8 mt-20 from-indigo-500 via-purple-500 to-pink-500 sm:py-12">
            <div class="px-6 mx-auto text-center text-white max-w-7xl lg:px-8">
                <div class="max-w-2xl mx-auto sm:text-center">
                    <h2 class="text-4xl font-extrabold tracking-tight text-white sm:text-5xl sm:text-black"
                        data-aos="fade-up">
                        Dokumen
                    </h2>
                </div>

                <!-- Baris pertama dengan 3 kolom -->
                <div class="grid gap-8 mt-16 sm:mt-20 lg:grid-cols-3">
                    <!-- Kolom 1 -->
                    <div class="py-10 text-center bg-white hover:shadow-2xl hover:ring-indigo-600 ring-2 ring-inset ring-gray-900/5 rounded-2xl "
                        data-aos="zoom-in">
                        <div class="max-w-xs px-8 mx-auto">
                            <div class="flex justify-center mb-4">
                                <!-- Icon with customized size and color -->
                                <x-heroicon-o-building-office-2 class="w-10 h-10 text-indigo-600" />
                            </div>
                            <p class="text-xl font-semibold text-indigo-600">RPJPD</p>
                            <p class="mt-6 text-sm leading-5 text-gray-600">Rencana Pembangunan Jangka Panjang Daerah</p>
                            <a href="{{ route('dokumen.rpjpd') }}"
                                class="block w-full px-3 py-2 mt-10 text-sm font-semibold text-center text-white bg-indigo-600 rounded-md">
                                Get access
                            </a>


                        </div>
                    </div>
                    <!-- Kolom 2 -->
                    <div class="py-10 text-center bg-white hover:shadow-2xl hover:ring-indigo-600 ring-2 ring-inset ring-gray-900/5 rounded-2xl"
                        data-aos="zoom-in">
                        <div class="max-w-xs px-8 mx-auto">
                            <div class="flex justify-center mb-4">
                                <!-- Icon with customized size and color -->
                                <x-heroicon-o-building-office class="w-10 h-10 text-indigo-600" />
                            </div>

                            <p class="text-xl font-semibold text-indigo-600">RPJMD</p>
                            <p class="mt-6 text-sm leading-5 text-gray-600">Rencana Pembangunan Jangka Menengah Daerah</p>
                            <a href="{{ route('dokumen.rpjmd') }}"
                                class="block w-full px-3 py-2 mt-10 text-sm font-semibold text-center text-white bg-indigo-600 rounded-md">Get
                                access</a>
                        </div>
                    </div>
                    {{-- Kolom 3 --}}
                    <div class="py-10 text-center bg-white hover:shadow-2xl hover:ring-indigo-600 ring-2 ring-inset ring-gray-900/5 rounded-2xl "
                        data-aos="fade-up-right">
                        <div class="max-w-xs px-8 mx-auto">
                            <div class="flex justify-center mb-4">
                                <!-- Icon with customized size and color -->
                                <x-heroicon-o-document-arrow-up class="w-10 h-10 text-indigo-600" />
                            </div>
                            <p class="text-xl font-semibold text-indigo-600">RKPD</p>
                            <p class="mt-6 text-sm leading-5 text-gray-600">Rencana Kerja Pemerintahan Daerah</p>
                            <a href="{{ route('dokumen.rkpd') }}"
                                class="block w-full px-3 py-2 mt-10 text-sm font-semibold text-center text-white bg-indigo-600 rounded-md">Get
                                access</a>
                        </div>
                    </div>

                </div>
                {{-- Column baris ke-2 --}}
                <div class="grid gap-8 mt-16 sm:mt-20 lg:grid-cols-3">
                    {{-- Kolom 4 --}}
                    <div class="py-10 text-center bg-white hover:shadow-2xl hover:ring-indigo-600 ring-2 ring-inset ring-gray-900/5 rounded-2xl "
                        data-aos="fade-up-left">
                        <div class="max-w-xs px-8 mx-auto">
                            <div class="flex justify-center mb-4">
                                <!-- Icon with customized size and color -->
                                <x-heroicon-o-document-text class="w-10 h-10 text-indigo-600" />
                            </div>
                            <p class="text-xl font-semibold text-indigo-600">Renstra PD</p>
                            <p class="mt-6 text-sm leading-5 text-gray-600">Rencana Strategis Perangkat Daerah</p>
                            <a href="{{ route('dokumen.renstra-pd') }}"
                                class="block w-full px-3 py-2 mt-10 text-sm font-semibold text-center text-white bg-indigo-600 rounded-md">Get
                                access</a>
                        </div>
                    </div>
                    {{-- Kolom 5 --}}
                    <div class="py-10 text-center bg-white hover:shadow-2xl hover:ring-indigo-600 ring-2 ring-inset ring-gray-900/5 rounded-2xl "
                        data-aos="fade-up">
                        <div class="max-w-xs px-8 mx-auto">
                            <div class="flex justify-center mb-4">
                                <!-- Icon with customized size and color -->
                                <x-heroicon-o-document-arrow-up class="w-10 h-10 text-indigo-600" />
                            </div>
                            <p class="text-xl font-semibold text-indigo-600">Renja PD</p>
                            <p class="mt-6 text-sm leading-5 text-gray-600">Rencana Kerja Pemerintahan Daerah</p>
                            <a href="{{ route('dokumen.renja-pd') }}"
                                class="block w-full px-3 py-2 mt-10 text-sm font-semibold text-center text-white bg-indigo-600 rounded-md">Get
                                access</a>
                        </div>
                    </div>
                    {{-- Kolom 6 --}}
                    <div class="py-10 text-center bg-white hover:shadow-2xl hover:ring-indigo-600 ring-2 ring-inset ring-gray-900/5 rounded-2xl "
                        data-aos="fade-up">
                        <div class="max-w-xs px-8 mx-auto">
                            <div class="flex justify-center mb-4">
                                <!-- Icon with customized size and color -->
                                <x-heroicon-o-document-magnifying-glass class="w-10 h-10 text-indigo-600" />
                            </div>
                            document-magnifying-glass
                            <p class="text-xl font-semibold text-indigo-600">Kajian</p>
                            <p class="mt-6 text-sm leading-5 text-gray-600">Penelitian & Pengembangan</p>
                            <a href="{{ route('dokumen.kajian') }}"
                                class="block w-full px-3 py-2 mt-10 text-sm font-semibold text-center text-white bg-indigo-600 rounded-md">Get
                                access</a>
                        </div>
                    </div>

                </div>

            </div>

            <script>
                AOS.init({
                    once: false, // Animasi akan berulang kali setiap scroll
                    duration: 1000, // Durasi animasi
                });
            </script>
    </section>
    <x-footer.footer></x-footer.footer>
@endsection
