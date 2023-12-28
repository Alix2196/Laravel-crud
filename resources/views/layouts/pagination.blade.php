@if ($paginator->hasPages())
    <div class="pagination">
        @if ($paginator->onFirstPage())
            <a href="#" class="disabled">&laquo;</a>
        @else
            <a href="{{ $paginator->previousPageUrl() }}">&laquo;</a>
        @endif

        @foreach ($elements as $element)
            @if (is_string($element))
                <a href="#" class="disabled">{{ $element }}</a>
            @endif

            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <a href="#" class="active-page">{{ $page }}</a>
                    @else
                        <a href="{{ $url }}">{{ $page }}</a>
                    @endif
                @endforeach
            @endif
        @endforeach

        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}">&raquo;</a>
        @else
            <a href="#" class="disabled">&raquo;</a>
        @endif
    </div>
@endif
