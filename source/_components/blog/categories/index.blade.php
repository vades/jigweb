<x-layouts.master :page="$page">
    
@section('main')
    <h1>{{ $page->title }}</h1>
    <div class="perex">
         {{ $page->description }}
    </div>
    @yield('content')

    @foreach ($categories as $category)
    <h2 class="text-3xl mt-0">
        <a
            href="{{ $category->getUrl() }}"
            title="Read more - {{ $category->title }}"
            class="text-gray-900 font-extrabold"
        >{{ $category->title }}</a>
    </h2>
    @endforeach
@endsection

@section('sidebar')
    <x-blog.sidebar />
@endsection
</x-layouts.master>