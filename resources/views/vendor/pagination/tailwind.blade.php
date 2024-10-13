@if ($paginator->hasPages())
    <nav role="navigation" aria-label="Pagination Navigation" class="flex justify-center mt-8">
        <ul class="inline-flex space-x-2">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li>
                    <span
                        class="px-3 py-1 text-gray-400 bg-white border border-gray-300 rounded-full cursor-default">Previous</span>
                </li>
            @else
                <li>
                    <a href="{{ $paginator->previousPageUrl() }}" rel="prev"
                        class="px-3 py-1 text-blue-500 bg-white border border-gray-300 rounded-full hover:bg-blue-500 hover:text-white transition-colors duration-300">Previous</a>
                </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li>
                        <span
                            class="px-3 py-1 text-gray-400 bg-white border border-gray-300 rounded-full">{{ $element }}</span>
                    </li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li>
                                <span
                                    class="px-3 py-1 text-white bg-blue-500 border border-blue-500 rounded-full">{{ $page }}</span>
                            </li>
                        @else
                            <li class="hidden sm:inline-flex">
                                <a href="{{ $url }}"
                                    class="px-3 py-1 text-blue-500 bg-white border border-gray-300 rounded-full hover:bg-blue-500 hover:text-white transition-colors duration-300"
                                    aria-label="{{ __('Go to page :page', ['page' => $page]) }}">
                                    {{ $page }}
                                </a>
                            </li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li>
                    <a href="{{ $paginator->nextPageUrl() }}" rel="next"
                        class="px-3 py-1 text-blue-500 bg-white border border-gray-300 rounded-full hover:bg-blue-500 hover:text-white transition-colors duration-300">Next</a>
                </li>
            @else
                <li>
                    <span
                        class="px-3 py-1 text-gray-400 bg-white border border-gray-300 rounded-full cursor-default">Next</span>
                </li>
            @endif
        </ul>
    </nav>
@endif
