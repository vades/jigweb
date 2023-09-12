<x-layouts.master :page="$page">
    
@section('main')
    <x-partials.page.head :page="$page"></x-partials.page.head>
    <section>
        @yield('content')
    </section>
    <section class="lg:grid lg:grid-cols-2 gap-3">
        @foreach ($page->posts($posts) as $post)
            <x-blog.posts.list :post="$post"></x-blog.posts.list>
        @endforeach
    </section>
@endsection

{{-- @section('sidebar')
    <x-blog.sidebar :page="$page" :posts="$posts" :categories="$categories" />
@endsection --}}
</x-layouts.master>