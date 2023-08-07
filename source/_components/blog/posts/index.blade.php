<x-layouts.master :page="$page">

@section('main')
    <section>
        <h1>{{ $page->title }}</h1>
        <div class="perex">
            {{ $page->description }}
        </div>
    </section>
    <section class="content">
        @yield('content')
    </section>
   
    <section class="articles">
        @foreach ($pagination->items as $post)
            <article class="border-solid border-2 border-blue-500 p-4">
                <figure class="posts-img">
                    <a href="{{ $post->getPath() }}">
                        <img src="{{ $post->img }}" alt="{{ $post->title }}">
                    </a>
                </figure>
                <div class="posts-preview">
                    <h2><a href="{{ $post->getPath() }}">{{ $post->title }}</a></h2>
                    <div class="post-extra">
                        <span class="posts-author">{{ $post->author}}</span>
                        <span class="posts-date">{{ date('F j, Y', $post->date) }}</span>
                    </div>
                    <div class="posts-description">{{ $post->description}}</div>
                    <a href="{{ $post->getPath() }}">Continue reading...</a>
                </div>
            </article>
        @endforeach
    </section>

    <section class="pagination-items">

        {{-- Check if there is a previous page available in the pagination --}}
        @if ($previous = $pagination->previous)
            {{-- Display the link to the first page using the base URL --}}
            <a href="{{ $page->baseUrl }}{{ $pagination->first }}" title="First page">&lt;&lt;</a>
            {{-- Display the link to the previous page using the base URL --}}
            <a href="{{ $page->baseUrl }}{{ $previous }}" title="Previous page">&lt;</a>
            {{-- Display double and single left arrows indicating more previous pages --}}
        
        @endif
    
        {{-- Loop through the pagination pages and display each page number --}}
        @foreach ($pagination->pages as $pageNumber => $path)
            {{-- Display a link to each page using the base URL, with a 'selected' class if it's the current page --}}
            <a href="{{ $page->baseUrl }}{{ $path }}" class="{{ $pagination->currentPage == $pageNumber ? 'selected' : '' }}">
            {{-- Display the page number --}}
            {{ $pageNumber }}
            </a>
        @endforeach
    
        {{-- Check if there is a next page available in the pagination --}}
        @if ($next = $pagination->next)
            {{-- Display the link to the next page using the base URL --}}
            <a href="{{ $page->baseUrl }}{{ $next }}" title="Next page">&gt;</a>
            {{-- Display the link to the last page using the base URL --}}
            <a href="{{ $page->baseUrl }}{{ $pagination->last }}" title="Last page">&gt;&gt;</a>
        @else
            {{-- Display double and single right arrows indicating more next pages --}}
            {{-- &gt; &gt;&gt; --}}
        @endif
    
    </section>
@endsection
  
@section('sidebar')
    <x-blog.sidebar :page="$page" :posts="$posts" :categories="$categories" />
@endsection
</x-layouts.master>