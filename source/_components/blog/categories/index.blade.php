<x-layouts.master :page="$page">
    
@section('main')
    <x-partials.page.head :page="$page"></x-partials.page.head>
    <section class="content">
        @yield('content')
    </section>
    <section class="lg:grid lg:grid-cols-2 gap-3">
        @foreach ($categories as $category)
            <x-blog.categories.list :category="$category"></x-blog.categories.list>
        @endforeach
    </section>
@endsection

{{-- @section('sidebar')
    <x-blog.sidebar :page="$page" :posts="$posts" :categories="$categories" />
@endsection --}}
</x-layouts.master>