<x-layouts.master :page="$page">
    
@section('main')
    @php
        $tagsArray = $page->getTagsCollection($posts);
        
    @endphp
    <x-partials.page.head :page="$page"></x-partials.page.head>
    <section class="content">
        @yield('content')
    </section>

    <section class="mb-3">
        @foreach ($tagsArray as $tag => $tags)
        <x-partials.nav.tag :tag="$tag" :tagLink="'#'.$tag"></x-partials.nav.tag>
        @endforeach
    </section>
    <section class="lg:grid lg:grid-cols-2 gap-3">
        @foreach ($tagsArray as $tag => $tags)
            <x-blog.tags.list :tag="$tag" :tags="$tags"></x-blog.tags.list>
        @endforeach
    </section>
@endsection

{{-- @section('sidebar')
    <x-blog.sidebar :posts="$posts" />
@endsection --}}
</x-layouts.master>