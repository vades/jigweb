<x-layouts.master :page="$page">
@php
    $tags = $page->getTags();
    $previous = $page->getPrevious();
    $next = $page->getNext();
@endphp   
@section('main')
    <section class="flex flex-col md:flex-row md:items-start mb-3">
        @if ($page->img ?? null)
            <figure class="mb-3 md:mr-3">
                <img class="w-48 border-4 border-skin-muted drop-shadow-lg" src="{{ $page->img }}" alt="{{ $page->title }}">
            </figure>
        @endif

        <div>
            <h1 class="text-3xl font-bold mb-3">{{ $page->title }}</h1>
            <div class="text-sm mb-3">
                <span>{{ $page->author}}</span>
                <span>{{ date('F j, Y', $page->date) }}</span>
            </div>
            <div class="perex">
                {{ $page->description }}
            </div>
        </div>
    
    </section>
    <article class="mb-3 pt-3 border-t border-skin-base">
        @yield('content')
    </article>

    @if (count($tags) > 0)
        <div class="tag-items">
            @foreach ($tags as $tag)
                <a class="text-xs font-medium mr-2 px-2.5 py-0.5 rounded bg-skin-base border border-skin-base hover:bg-skin-accent hover:no-underline" href="/tags#{{$tag}}">{{$tag}}</a>
            @endforeach
        </div>
    @endif

    <section class="flex justify-between mt-3">
            @if( $previous ?? null)
            <a class="text-lg" href="{{$previous?->getPath() }}" title="{{ $previous?->title }}">&#10094; Previous article</span>
                </a>
            @endif
            
            @if( $next ?? null)
                <a class="text-lg" href="{{ $next?->getPath() }}" title="{{ $next?->title }}">
                <span>Next article &#10095;</span>
                </a>
           @endif
    </section> 
@endsection

{{-- @section('sidebar')
    <x-blog.sidebar :page="$page" :posts="$posts" :categories="$categories" />
@endsection --}}
</x-layouts.master>