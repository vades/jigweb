<x-layouts.master :page="$page">
    
@section('main')
    <h1>{{ $page->title }}</h1>
    <div class="perex">
         {{ $page->description }}
    </div>
    @yield('content')

    @foreach ($categories as $category)
    <article class="border-solid border-2 border-blue-500 p-4">
        <h2>
            <a href="{{ $category->getUrl() }}">{{ $category->title }}</a>
        </h2>
        <p>
            {{ $category->description }} 
        </p>
        <a href="{{ $category->getUrl() }}">Show articles for this category</a>
    </article>
    @endforeach
@endsection

@section('sidebar')
    <x-blog.sidebar :page="$page" :posts="$posts" :categories="$categories" />
@endsection
</x-layouts.master>