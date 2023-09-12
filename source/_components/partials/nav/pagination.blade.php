<nav class="inline-flex -space-x-px text-base h-10 [&>*:first-child]:rounded-l-md [&>*:last-child]:rounded-r-md  [&>a:hover]:no-underline" aria-label="Page navigation example">

    {{-- Check if there is a previous page available in the pagination --}}
    @if ($previous = $pagination->previous)
        {{-- Display the link to the first page using the base URL --}}
        {{-- <a class="flex items-center justify-center px-4 h-10 ml-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-l-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white" href="{{ $page->baseUrl }}{{ $pagination->first }}" title="First page">&lt;&lt;</a> --}}
        {{-- Display the link to the previous page using the base URL --}}
        <a class="flex items-center justify-center px-4 h-10 leading-tight bg-skin-base border border-skin-base hover:bg-skin-accent" href="{{ $page->baseUrl }}{{ $previous }}" title="Previous page">&lt;</a>
        {{-- Display double and single left arrows indicating more previous pages --}}
    
    @endif

    {{-- Loop through the pagination pages and display each page number --}}
    @foreach ($pagination->pages as $pageNumber => $path)
        
        @if ($pagination->currentPage == $pageNumber)
          {{-- Current page --}}
          <span aria-current="page" class="flex items-center justify-center px-4 h-10 bg-skin-accent border border-skin-base hover:bg-skin-accent" href="{{ $page->baseUrl }}{{ $path }}">
            {{-- Display the page number --}}
            {{ $pageNumber }}
          </span>
        @else
          {{-- Other pages with link --}}
          <a  class="flex items-center justify-center px-4 h-10 leading-tight bg-skin-base border border-skin-base hover:bg-skin-accent" href="{{ $page->baseUrl }}{{ $path }}">
            {{-- Display the page number --}}
            {{ $pageNumber }}
            </a>
            
        @endif
        
    @endforeach

    {{-- Check if there is a next page available in the pagination --}}
    @if ($next = $pagination->next)
        {{-- Display the link to the next page using the base URL --}}
        <a class="flex items-center justify-center px-4 h-10 leading-tight bg-skin-base border border-skin-base hover:bg-skin-accent"  href="{{ $page->baseUrl }}{{ $next }}" title="Next page">&gt;</a>
        {{-- Display the link to the last page using the base URL --}}
        {{-- <a class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 rounded-r-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white" href="{{ $page->baseUrl }}{{ $pagination->last }}" title="Last page">&gt;&gt;</a> --}}
    @else
        {{-- Display double and single right arrows indicating more next pages --}}
        {{-- &gt; &gt;&gt; --}}
    @endif

    </nav>