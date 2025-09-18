

@if ($paginator->hasPages())
    <nav role="navigation" aria-label="Pagination Navigation" class="flex items-center justify-center space-x-1">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <span class="px-3 py-1 border rounded text-gray-400">&laquo;</span>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" class="px-3 py-1 border rounded hover:bg-gray-200">&laquo;</a>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <span class="px-3 py-1 border rounded text-gray-400">{{ $element }}</span>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <span class="px-3 py-1 border rounded bg-blue-600 text-white">{{ $page }}</span>
                    @elseif (
                        $page == 1 ||
                        $page == $paginator->lastPage() ||
                        ($page >= $paginator->currentPage() - 2 && $page <= $paginator->currentPage() + 2)
                    )
                        <a href="{{ $url }}" class="px-3 py-1 border rounded hover:bg-gray-200">{{ $page }}</a>
                    @elseif (
                        $page == 2 ||
                        $page == $paginator->lastPage() - 1
                    )
                        <span class="px-3 py-1 border rounded text-gray-400">...</span>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" class="px-3 py-1 border rounded hover:bg-gray-200">&raquo;</a>
        @else
            <span class="px-3 py-1 border rounded text-gray-400">&raquo;</span>
        @endif
    </nav>
@endif

