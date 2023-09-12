@if( $previous ?? null)
<a class="text-lg" href="{{$previous?->getPath() }}" title="{{ $previous?->title }}">&#10094; Previous article</span>
    </a>
@endif

@if( $next ?? null)
    <a class="text-lg" href="{{ $next?->getPath() }}" title="{{ $next?->title }}">
    <span>Next article &#10095;</span>
    </a>
@endif