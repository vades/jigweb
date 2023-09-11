<x-layouts.master :page="$page">
    
@section('main')
    <x-partials.page.head :page="$page"></x-partials.page.head>
    <article>
        @yield('content')
    </article>
@endsection

{{-- @section('sidebar')
    <x-blog.sidebar :page="$page" :posts="$posts" :categories="$categories" />
@endsection --}}
</x-layouts.master>