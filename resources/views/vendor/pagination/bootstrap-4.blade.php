{{-- 기본 페이지네이션 --}}
{{-- 페이지 있을경우 아래 실행 --}}
@if ($paginator->hasPages())
    <div class="pagination col-md-8">
        {{-- 페이징 < 아이콘 --}}
        {{-- 이전 페이지 --}}
        @if ($paginator->onFirstPage())
            <a class="disabled" aria-disabled="true" aria-label="@lang('pagination.previous')" href="#">&laquo;</a>
        @else
            <a href="{{ $paginator->previousPageUrl() }}">&laquo;</a>
        @endif

        {{-- 페이징 번호 --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
            <a class="disabled" aria-disabled="true" href="#">{{ $element }}</a>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <a class="active" aria-current="page" href="#">{{ $page }}</a>
                    @else
                        <a aria-current="page" href="{{ $url }}">{{ $page }}</a>
                    @endif
                @endforeach
            @endif
        @endforeach


        {{-- 페이징 > 아이콘 --}}
        {{-- 다음 페이지 --}}
        @if ($paginator->hasMorePages())
            <a rel="next" aria-label="@lang('pagination.next')" href="{{ $paginator->nextPageUrl() }}">&raquo;</a>
        @else
            <a class="disabled" aria-disabled="true" aria-label="@lang('pagination.next')" href="#">&raquo;</a>
        @endif
    </div>
@endif
