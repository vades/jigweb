<x-layouts.master :page="$page">
    
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

    @foreach ($categories as $category)
    <article class="mb-4 pb-3 border-b border-slate-300">
        <h2 class="text-2xl font-bold text-gray-800 mb-3">
            <a href="{{ $category->getUrl() }}">{{ $category->title }}</a>
        </h2>
        <div class="mb-3">{{ $category->description}}</div>
        <a class="text-blue-800 text-lg" href="{{ $category->getUrl() }}">Show articles for this category &raquo;</a>
    </article>
    @endforeach
@endsection

{{-- @section('sidebar')
    <x-blog.sidebar :page="$page" :posts="$posts" :categories="$categories" />
@endsection --}}
</x-layouts.master>