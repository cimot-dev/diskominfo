@extends('layouts.navbar')

@section('navbar')
    <x-welcome.header></x-welcome.header>
    <x-welcome.dokument></x-welcome.dokument>

    <div class="px-6 py-10 mx-auto text-center text-white max-w-7xl lg:px-8 sm:py-16">
        <div class="max-w-2xl mx-auto mb-4 sm:text-center">
            <h2 class="text-3xl font-extrabold tracking-tight text-black sm:text-4xl sm:text-black" data-aos="fade-up">
                Portal Berita
            </h2>
        </div>
    </div>
    <div class="grid grid-cols-1 gap-6 pb-12 mt-4 md:grid-cols-2 lg:grid-cols-3">
        @foreach ($posts as $post)
            <div>
                <!-- Card konten post -->
                <div class="overflow-hidden transition-transform duration-300 bg-white rounded-lg shadow-lg hover:scale-105"
                    data-aos="zoom-in" data-aos-delay="200">
                    <a href="{{ route('post.berita', $post->slug) }}" class="block">
                        <img src="{{ asset('storage/' . $post->image) }}" alt="Post Image"
                            class="object-cover w-full h-64 transition-transform duration-300 hover:scale-110">
                    </a>
                    <div class="p-6">
                        <!-- Kategori Post -->
                        <a href="{{ route('posts.byCategory', $post->category->slug) }}">
                            <span
                                class="inline-block px-3 py-1 mb-2 text-xs font-semibold text-white uppercase bg-blue-500 rounded-full">
                                {{ $post->category->name }}
                            </span>
                        </a>
                        <!-- Judul Post -->
                        <h2 class="mb-3 text-lg font-semibold text-black hover:text-blue-600">
                            <a href="{{ route('Singgel', $post->slug) }}">
                                {{ Str::limit($post->title, 50) }}
                            </a>
                        </h2>
                        <!-- Konten singkat Post -->
                        <p class="mb-4 text-gray-600 dark:text-gray-400">
                            {!! Str::limit(strip_tags($post->content), 80) !!}
                        </p>
                        <!-- Info Author dan Waktu -->
                        <div class="flex items-center">
                            <div>
                                <h3 class="text-sm font-semibold text-blue-500">
                                    {{ $post->author->name }}
                                </h3>
                                <p class="text-xs text-gray-500">{{ $post->created_at->format('M d Y') }} ·
                                    {{ $post->read_time }} min read</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <x-welcome.terkait></x-welcome.terkait>
    <x-footer.footer></x-footer.footer>

    <!-- Blog End -->
@endsection
