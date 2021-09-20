<div class="paginationList">
    <!-- Previous Page Link -->
    @if ($paginator->onFirstPage())
        <a href="#" class="paginationList__el paginationList__el--prev disabled"></a>
    @else
        <a href="{{ $paginator->previousPageUrl() }}" class="paginationList__el paginationList__el--prev"></a>
    @endif
    <!-- Pagination Elements -->
    @foreach ($elements as $element)
        @if (is_string($element))
            <a href="#" class="paginationList__el paginationList__el--dots d-sm-flex d-none">{{ $element }}</a>
        @endif

            <!-- Array Of Links -->
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <a href="#" class="paginationList__el paginationList__el--number active">{{ $page }}</a>
                    @else
                        <a href="{{ $url }}" class="paginationList__el paginationList__el--number">{{ $page }}</a>
                    @endif
                @endforeach
            @endif

    @endforeach
    <!-- Next Page Link -->
    @if ($paginator->hasMorePages())
        <a href="{{ $paginator->nextPageUrl() }}" class="paginationList__el paginationList__el--next"></a>
    @else
        <a href="#" class="paginationList__el paginationList__el--next disabled"></a>
    @endif
</div>
