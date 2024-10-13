@extends('layouts.navbar')

@section('navbar-nav')
    <div class="relative z-10 pt-32 pb-16 overflow-hidden md:pt-40 lg:pt-52">
        <div class="container px-4 mx-auto sm:px-6 lg:px-8">
            <h1 class="mb-10 text-3xl font-bold text-center text-gray-800 dark:text-black">Dokumen Kategori RPJPD</h1>

            {{-- Container for larger screens --}}
            <div class="overflow-hidden bg-white rounded-lg shadow-md dark:bg-white">
                <div class="overflow-x-auto">
                    <table class="min-w-full leading-normal">
                        <thead class="bg-gray-100 dark:bg-gray-10">
                            <tr>
                                <th scope="col"
                                    class="px-5 py-3 text-xs font-semibold tracking-wider text-left text-gray-600 uppercase border-b-2 border-gray-200 dark:border-gray-100 dark:text-black">
                                    No
                                </th>
                                <th scope="col"
                                    class="px-5 py-3 text-xs font-semibold tracking-wider text-left text-gray-600 uppercase border-b-2 border-gray-200 dark:border-gray-100 dark:text-black">
                                    Judul
                                </th>
                                <th scope="col"
                                    class="px-5 py-3 text-xs font-semibold tracking-wider text-left text-gray-600 uppercase border-b-2 border-gray-200 dark:border-gray-100 dark:text-black">
                                    Deskripsi
                                </th>
                                <th scope="col"
                                    class="px-5 py-3 text-xs font-semibold tracking-wider text-left text-gray-600 uppercase border-b-2 border-gray-200 dark:border-gray-100 dark:text-black">
                                    Download
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($dokumens as $dokumen)
                                <tr class="hover:bg-gray-50 dark:hover:bg-gray-50">
                                    <td
                                        class="px-5 py-4 text-sm text-black border-b border-gray-200 dark:border-gray-100 dark:text-black">
                                        {{ $loop->iteration }}
                                    </td>
                                    <td
                                        class="px-5 py-4 text-sm text-black border-b border-gray-200 dark:border-gray-100 dark:text-black">
                                        {{ $dokumen->judul }}
                                    </td>
                                    <td
                                        class="px-5 py-4 text-sm italic text-black border-b border-gray-200 dark:border-gray-100 dark:text-black">
                                        {{ $dokumen->deskripsi }}
                                    </td>
                                    <td class="px-5 py-4 text-sm border-b border-gray-200 dark:border-gray-100">
                                        <a href="{{ Storage::url($dokumen->file_path) }}"
                                            class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-indigo-600 rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:bg-indigo-400 dark:hover:bg-indigo-500"
                                            download>
                                            <x-heroicon-o-folder-arrow-down class="w-5 h-5 mr-2" />
                                            Download
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            {{-- Mobile-friendly stacked view --}}
            <div class="grid gap-6 mt-8 md:hidden">
                @foreach ($dokumens as $dokumen)
                    <div class="p-4 bg-white rounded-lg shadow-md dark:bg-white">
                        <div class="flex items-center justify-between">
                            <h3 class="text-lg font-semibold text-gray-800 dark:text-black">{{ $dokumen->judul }}</h3>
                            <a href="{{ Storage::url($dokumen->file_path) }}"
                                class="px-4 py-2 text-sm font-medium text-white bg-indigo-600 rounded-md hover:bg-indigo-700"
                                download>
                                Download
                            </a>
                        </div>
                        <p class="mt-2 text-sm italic text-gray-600 dark:text-black">{{ $dokumen->deskripsi }}</p>
                    </div>
                @endforeach
            </div>

        </div>
    </div>
@endsection
