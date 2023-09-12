<x-layouts.master :page="$page">
@php
    $tags = $page->getTags();
    $previous = $page->getPrevious();
    $next = $page->getNext();
@endphp   
@section('main')
    <x-blog.post.head :page="$page"></x-blog.post.head>
    <article class="mb-3 pt-3 border-t border-skin-base">
        @yield('content')
    </article>

    @if (count($tags) > 0)
        <div>
            @foreach ($tags as $tag)
                <x-blog.post.tag :tag="$tag"></x-blog.post.tag>
            @endforeach
        </div>
    @endif

    <section class="flex justify-between mt-3">
        <x-partials.nav.prev-next :previous="$previous" :next="$next"></x-partials.nav.prev-next>     
    </section> 
@endsection

{{-- @section('sidebar')
    <x-blog.sidebar :page="$page" :posts="$posts" :categories="$categories" />
@endsection --}}
</x-layouts.master>