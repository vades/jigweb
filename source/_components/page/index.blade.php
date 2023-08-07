<x-layouts.master :page="$page">
    
@section('main')
    <section class="border-solid border-2 border-green-500 p-4">
        @if ($page->img ?? null)
            <figure class="post-img">
                    <img src="{{ $page->img }}" alt="{{ $page->title }}">
            </figure>
        @endif
        <div>
            <h1>{{ $page->title }}</h1>
            <div class="perex">
                {{ $page->description }}
            </div>
        </div>
    </section>
    <article class="border-solid border-2 border-blue-500 p-4">
        @yield('content')
    </article>
    
    
@endsection

@section('sidebar')
    <x-blog.sidebar />
@endsection
</x-layouts.master>