@if ($paginator->hasPages())
<nav aria-label="...">
    <ul class="pagination justify-content-end mb-0">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1">
                    <i class="fas fa-angle-left"></i>
                    <span class="sr-only">Previous</span>
                </a>
            </li>
        @else
        <li class="page-item">
            <a class="page-link" href="{{ $paginator->previousPageUrl() }}" tabindex="-1">
                <i class="fas fa-angle-left"></i>
                <span class="sr-only">Previous</span>
            </a>
        </li>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1">
                        <i class="fas fa-ellipsis-h"></i>
                        <span class="sr-only">{{ $element }}</span>
                    </a>
                </li>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                    <li class="page-item active">
                        <a class="page-link" href="#">{{ $page }}</a>
                    </li>
                    @else
                    <li class="page-item">
                        <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                    </li>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
        <li class="page-item">
            <a class="page-link" href="{{ $paginator->nextPageUrl() }}">
                <i class="fas fa-angle-right"></i>
                <span class="sr-only">Next</span>
            </a>
        </li>
        @else
        <li class="page-item disabled">
            <a class="page-link" href="{{ $paginator->nextPageUrl() }}">
                <i class="fas fa-angle-right"></i>
                <span class="sr-only">Next</span>
            </a>
        </li>
        @endif
    </ul>
</nav>
@endif
