<x-layouts.master :page="$page">
@php
    //dd($pagination);
@endphp
@section('main')
    <section class="mb-6">
        <h1 class="text-3xl text-gray-8600 mb-3">{{ $page->title }}</h1>
        <div class="font-bold">
            {{ $page->description }}
        </div>
    </section>
    <section class="content">
        @yield('content')
    </section>
   
    <section class="articles">
        @foreach ($pagination->items as $post)
        <article class="mb-4 pb-3 border-b border-slate-300">
            <figure class="">
                <a href="{{ $post->getPath() }}">
                    <img class="w-24 border-4 border-slate-300" src="{{ $post->img }}" alt="{{ $post->title }}">
                </a>
            </figure>
            <div class="">
                <h2 class="text-2xl font-bold text-gray-800 mb-3"><a href="{{ $post->getPath() }}">{{ $post->title }}</a></h2>
                <div class="post-extra text-sm mb-3">
                    <span class="posts-author">{{ $post->author}}</span>
                    <span class="posts-date">{{ date('F j, Y', $post->date) }}</span>
                </div>
                <div class="mb-3">{{ $post->description}}</div>
                <a class="text-blue-800 text-lg" href="{{ $post->getPath() }}">Continue reading &raquo;</a>
            </div>
        </article>
        @endforeach
    </section>
  
    <section class="mx-auto text-center">
        <nav class="inline-flex -space-x-px text-base h-10 [&>*:first-child]:rounded-l-md [&>*:last-child]:rounded-r-md" aria-label="Page navigation example">

            {{-- Check if there is a previous page available in the pagination --}}
            @if ($previous = $pagination->previous)
                {{-- Display the link to the first page using the base URL --}}
                {{-- <a class="flex items-center justify-center px-4 h-10 ml-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-l-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white" href="{{ $page->baseUrl }}{{ $pagination->first }}" title="First page">&lt;&lt;</a> --}}
                {{-- Display the link to the previous page using the base URL --}}
                <a class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white" href="{{ $page->baseUrl }}{{ $previous }}" title="Previous page">&lt;</a>
                {{-- Display double and single left arrows indicating more previous pages --}}
            
            @endif
        
            {{-- Loop through the pagination pages and display each page number --}}
            @foreach ($pagination->pages as $pageNumber => $path)
                
                @if ($pagination->currentPage == $pageNumber)
                  {{-- Current page --}}
                  <span aria-current="page" class="flex items-center justify-center px-4 h-10 text-blue-600 border border-gray-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white" href="{{ $page->baseUrl }}{{ $path }}">
                    {{-- Display the page number --}}
                    {{ $pageNumber }}
                  </span>
                @else
                  {{-- Other pages with link --}}
                  <a  class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white" href="{{ $page->baseUrl }}{{ $path }}">
                    {{-- Display the page number --}}
                    {{ $pageNumber }}
                    </a>
                    
                @endif
                
            @endforeach
        
            {{-- Check if there is a next page available in the pagination --}}
            @if ($next = $pagination->next)
                {{-- Display the link to the next page using the base URL --}}
                <a class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white" href="{{ $page->baseUrl }}{{ $next }}" title="Next page">&gt;</a>
                {{-- Display the link to the last page using the base URL --}}
                {{-- <a class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 rounded-r-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white" href="{{ $page->baseUrl }}{{ $pagination->last }}" title="Last page">&gt;&gt;</a> --}}
            @else
                {{-- Display double and single right arrows indicating more next pages --}}
                {{-- &gt; &gt;&gt; --}}
            @endif
        
            </nav>
      </section>
@endsection
{{--   
@section('sidebar')
    <x-blog.sidebar :page="$page" :posts="$posts" :categories="$categories" />
@endsection --}}
</x-layouts.master>