@extends('layouts.navbar')

@section('navbar')
    <div class="container p-4 mx-auto mt-24 mb-20">
        <h1 class="mb-4 text-3xl font-bold text-center text-gray-800">Dokumen Kategori RPJPD</h1>
        <p class="mb-8 text-center">Rencana Pembangunan Jangka Panjang Daerah</p>

        @if ($dokumens->isEmpty())
            <p class="mt-5 text-center text-red-600">Tidak ada dokumen dalam kategori ini.</p>
        @else
            {{-- Table view for larger screens --}}
            <div class="hidden md:block">
                <table class="min-w-full leading-normal bg-white border rounded-lg shadow-md">
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
                                Kategori
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
                                <td
                                    class="px-5 py-4 text-sm italic text-black border-b border-gray-200 dark:border-gray-100 dark:text-black">
                                    {{ $dokumen->category->name }}
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

            {{-- Mobile-friendly stacked view for small screens --}}
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
                        <span class="block mt-2 text-sm text-gray-600 dark:text-black">Kategori:
                            {{ $dokumen->category->name }}</span>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
    <x-footer.footer></x-footer.footer>
@endsection
