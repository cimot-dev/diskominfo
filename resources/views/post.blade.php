@extends('layouts.navbar')

@section('navbar')
    <section class="mt-20 bg-white dark:bg-white">
        <div class="container px-6 py-10 mx-auto">
            <div class="lg:flex lg:-mx-6">
                <!-- Sidebar Kategori di sebelah kiri -->
                <div class="hidden lg:block lg:w-1/5 lg:px-6">
                    <div class="p-4 bg-white rounded-lg">
                        <h3 class="mb-4 text-lg font-semibold text-black">Kategori :</h3>
                        <ul class="space-y-4">
                            @foreach ($categories as $category)
                                <li>
                                    <a href="{{ route('posts.byCategory', $category->slug) }}"
                                        class="block px-4 py-2 font-semibold text-center text-white transition duration-300 transform rounded-lg shadow-lg bg-gradient-to-r from-blue-500 to-purple-600 hover:bg-gradient-to-l hover:from-purple-600 hover:to-blue-500 hover:scale-105">
                                        {{ $category->name }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>

                    </div>
                </div>

                <!-- Bagian Utama: Post -->
                <div class="lg:w-3/5 lg:px-6">
                    <!-- Menampilkan gambar post -->
                    <img class="object-cover object-center w-full h-80 xl:h-[28rem] rounded-xl"
                        src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}">

                    <div class="mt-6">
                        <!-- Menampilkan judul post -->
                        <h1
                            class="max-w-lg mt-4 text-3xl font-bold leading-tight text-gray-800 dark:text-black font-montserrat">
                            {{ $post->title }}
                        </h1>

                        {{-- author --}}
                        <div class="flex items-center mt-4">
                            <div class="mx-4">
                                <!-- Menampilkan nama penulis -->
                                <h2 class="text-sm font-bold text-black font-montserrat">
                                    {{ $post->author->name }}</h2>
                                <!-- Menampilkan tanggal pembuatan dan waktu baca -->
                                <p class="text-sm text-black font-italic">
                                    {{ $post->created_at->format('M d, Y') }} · {{ $post->read_time }} min read
                                </p>
                            </div>
                        </div>

                        <!-- Menampilkan konten post -->
                        <div class="mt-6 prose text-black dark:text-black">
                            {!! $post->content !!}
                        </div>
                    </div>
                </div>

                <!-- Sidebar Related News di sebelah kanan -->
                <div class="mt-8 lg:w-1/5 lg:mt-0 lg:px-6">
                    <div class="p-4 rounded-lg shadow-md bg-gradient-to-r from-blue-200 to-blue-100">
                        <h3 class="mb-4 text-lg font-semibold text-blue-900">Related News</h3>
                        @foreach ($relatedPosts as $relatedPost)
                            <a href="{{ route('Singgel', $relatedPost->slug) }}"
                                class="block mt-2 transition-transform transform hover:scale-105">
                                <div class="flex items-center space-x-4">
                                    {{-- <img src="{{ asset('storage/' . $relatedPost->image) }}"
                                        class="object-cover w-16 h-16 rounded-lg shadow-lg"
                                        alt="{{ $relatedPost->title }}"> --}}
                                    <div class="text-black">
                                        <h4 class="font-medium text-blue-800">{{ Str::limit($relatedPost->title, 40) }}
                                        </h4>
                                        <p class="text-xs text-gray-600">{{ $relatedPost->created_at->format('M d, Y') }}
                                        </p>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>
    </section>

    <x-footer.footer></x-footer.footer>
@endsection
