@extends('layouts.navbar')

@section('navbar')
    <div class="relative z-10 overflow-hidden pt-[120px] pb-[60px] md:pt-[130px] lg:pt-[160px] dark:bg-dark">
        <div
            class="absolute bottom-0 left-0 w-full h-px bg-gradient-to-r from-stroke/0 via-stroke dark:via-dark-3 to-stroke/0">
        </div>
        <div class="container">
            <div class="flex flex-wrap items-center -mx-4">
                <div class="w-full px-4">
                    <div class="text-center">
                        <h1
                            class="mb-4 text-3xl font-bold text-dark dark:text-black sm:text-4xl md:text-[40px] md:leading-[1.2]">
                            Portal Berita
                        </h1>

                        <!-- Search Form Start -->
                        <form action="{{ route('search.posts') }}" method="GET" class="mt-4">
                            <input type="text" name="query"
                                class="w-full max-w-md px-4 py-2 text-sm text-gray-700 border rounded-md focus:border-blue-500 dark:bg-dark dark:text-black"
                                placeholder="Cari berita...">
                            <button type="submit" class="px-4 py-2 mt-2 text-white bg-blue-500 rounded-md">Cari</button>
                        </form>
                        <!-- Search Form End -->

                        <ul class="flex items-center justify-center gap-[10px] mt-4">
                            <li>
                                <a href="/"
                                    class="flex items-center gap-[10px] text-base font-medium text-dark dark:text-black">Beranda</a>
                            </li>
                            <li>
                                <a href="/berita"
                                    class="flex items-center gap-[10px] text-base font-medium text-body-color">
                                    <span class="text-body-color dark:text-dark-6"> / </span>
                                    Blog Grid
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Kategori Dinamis Start -->
    <div class="flex justify-center">
        <div class="grid grid-cols-2 gap-4 mx-4 mt-8 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 sm:mx-6 md:mx-8 lg:mx-10">
            @foreach ($categories as $categoryItem)
                <a href="{{ route('posts.byCategory', $categoryItem->slug) }}"
                    class="flex items-center w-full px-4 py-2 text-sm font-semibold text-center text-blue-500 transition-all duration-300 border border-blue-500 rounded-full hover:bg-blue-500 hover:text-white">

                    <!-- Ikon kategori berdasarkan slug -->
                    <span class="mr-2">
                        @switch($categoryItem->slug)
                            @case('technology')
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="currentColor">
                                    <path
                                        d="M9 3l-3 2 3 2V5h7V3H9zm3 7H4c-1.1 0-2 .9-2 2v9c0 1.1.9 2 2 2h8v-2H4v-9h8v3l5-5-5-5v3z" />
                                </svg>
                            @break

                            @case('travel')
                                ✈️
                            @break

                            @default
                                🏷️ <!-- Ikon default jika tidak ada yang sesuai -->
                        @endswitch
                    </span>
                    {{ $categoryItem->name }}
                </a>
            @endforeach
        </div>
    </div>
    <!-- Kategori Dinamis End -->

    <!-- ====== Blog Section Start -->
    <section class="pt-20 pb-10 lg:pt-[120px] lg:pb-20 dark:bg-dark">
        <div class="container py-6 mx-auto">
            <!-- Cek jika kategori dipilih -->
            @if (isset($category))
                <div class="mb-12 text-center">
                    <h3 class="text-sm italic font-semibold text-gray-800 md:text-xl dark:text-dark">
                        Postingan dalam Kategori:
                    </h3>
                    <span class="block mt-2 text-2xl font-bold text-blue-500 md:text-3xl">
                        {{ $category->name }}
                    </span>
                </div>
            @endif

            <!-- List Postingan -->
            <div class="flex flex-wrap -mx-4">
                @if ($posts->count())
                    @foreach ($posts as $post)
                        <div class="w-full px-4 mb-8 md:w-1/2 lg:w-1/3">
                            <div
                                class="overflow-hidden transition-transform duration-300 bg-white rounded-lg shadow-lg dark:bg-white hover:scale-105">
                                <!-- Link ke halaman detail postingan -->
                                <a href="{{ route('post.berita', $post->slug) }}" class="block">
                                    <img src="{{ asset('storage/' . $post->image) }}" alt="Post Image"
                                        class="object-cover w-full h-64 transition-transform duration-300 hover:scale-110">
                                </a>
                                <div class="p-6">
                                    <!-- Link ke kategori, klik untuk melihat postingan dalam kategori yang sama -->
                                    <a href="{{ route('posts.byCategory', $post->category->slug) }}">
                                        <span
                                            class="inline-block px-3 py-1 mb-2 text-xs font-semibold text-white uppercase bg-blue-500 rounded-full">
                                            {{ $post->category->name }}
                                        </span>
                                    </a>

                                    <h2 class="mb-3 text-lg font-semibold text-black dark:text-black hover:text-blue-600">
                                        <a href="{{ route('Singgel', $post->slug) }}">
                                            {{ Str::limit($post->title, 50) }}
                                        </a>
                                    </h2>

                                    <p class="mb-4 text-gray-600 dark:text-gray-400">
                                        {!! Str::limit(strip_tags($post->content), 80) !!}
                                    </p>

                                    <div class="flex items-center">
                                        <div>
                                            <h3 class="text-sm font-semibold text-blue-500 dark:text-blue-500">
                                                {{ $post->author->name }}
                                            </h3>
                                            <p class="text-xs text-gray-500">
                                                {{ $post->created_at->format('M d Y') }} · {{ $post->read_time }} min read
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <!-- Pesan jika tidak ada postingan dalam kategori ini -->
                    <p class="text-center text-gray-600 dark:text-gray-400">Tidak ada postingan dalam kategori ini.</p>
                @endif
            </div>


            <!-- Pagination -->
            <div class="mt-8">
                {{ $posts->links('vendor.pagination.tailwind') }}
            </div>
        </div>
    </section>

    <!-- ====== Blog Section End -->

    <x-footer.footer></x-footer.footer>
@endsection
