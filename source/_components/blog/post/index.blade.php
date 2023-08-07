<x-layouts.master :page="$page">
@php
    $tags = $page->getTags();
    $previous = $page->getPrevious();
    $next = $page->getNext();
@endphp   
@section('main')
    <section class="post-head">
        @if ($page->img ?? null)
            <figure class="post-img">
                <img src="{{ $page->img }}" alt="{{ $page->title }}">
            </figure>
        @endif

        <div class="post-header">
            <h1>{{ $page->title }}</h1>
            <div class="post-extra">
                <span class="post-author">{{ $page->author}}</span>
                <span class="post-date">{{ date('F j, Y', $page->date) }}</span>
            </div>
            <div class="perex">
                {{ $page->description }}
            </div>
        </div>
    
    </section>
    <article class="post-article">
        @yield('content')
    </article>

    @if (count($tags) > 0)
        <div class="tag-items">
            @foreach ($tags as $tag)
                <a href="/tags#{{$tag}}">{{$tag}}</a>
            @endforeach
        </div>
    @endif

    <section class="post-prev-next">
        <div class="prevnext-items">
            @if( $previous ?? null)
            <a class="button" href="{{$previous?->getPath() }}" title="{{ $previous?->title }}">&#10094; Previous article</span>
                </a>
            @endif
            
            @if( $next ?? null)
                <a class="button" href="{{ $next?->getPath() }}" title="{{ $next?->title }}">
                <span>Next article &#10095;</span>
                </a>
           @endif
        </div>
    </section> 
@endsection

@section('sidebar')
    <x-blog.sidebar :page="$page" :posts="$posts" :categories="$categories" />
@endsection
</x-layouts.master>