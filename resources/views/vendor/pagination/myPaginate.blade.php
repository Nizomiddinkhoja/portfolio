@if ($paginator->hasPages())
    <div class="ui pagination menu" role="navigation">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <a class="disabled" style="display: inline-block;margin: 5px;"><span>«</span></a>

        @else
            <a href="{{ $paginator->previousPageUrl() }}" style="display: inline-block;margin: 5px;" rel="prev">«</a>
        @endif

{{--        @if($paginator->currentPage() >= 3)--}}
            <a href="{{ $paginator->url(1) }}" style="display: inline-block;margin: 5px;" class="hidden-xs">1</a>
{{--        @endif--}}
        @if($paginator->currentPage() >=4)
            <a class="disabled" style="display: inline-block;margin: 5px;"><span>...</span></a>
        @endif
        @foreach(range(2, $paginator->lastPage()-1) as $i)
            @if($i >= $paginator->currentPage() - 1 && $i <= $paginator->currentPage() + 1)
                @if ($i == $paginator->currentPage())
                    <a class="active" style="display: inline-block;margin: 5px;"><span>{{ $i }}</span></a>
                @else
                    <a href="{{ $paginator->url($i) }}" style="display: inline-block;margin: 5px;">{{ $i }}</a>
                @endif
            @endif
        @endforeach

        @if($paginator->currentPage() <= $paginator->lastPage() - 3)
            <a class="disabled" style="display: inline-block;margin: 5px;"><span>...</span></a>
        @endif
{{--        @if($paginator->currentPage() < $paginator->lastPage() - 2)--}}
            <a href="{{ $paginator->url($paginator->lastPage()) }}" style="display: inline-block;margin: 5px;"
               class="hidden-xs">{{ $paginator->lastPage() }}</a>
{{--        @endif--}}

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" style="display: inline-block;margin: 5px;" rel="next">»</a>
        @else
            <a class="disabled" style="display: inline-block;margin: 5px;"><span>»</span></a>
        @endif
    </div>
@endif
