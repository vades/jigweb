<x-layouts.master :page="$page">
    
@section('main')
    <h1>{{ $page->title }}</h1>
    <div class="perex">
         {{ $page->description }}
    </div>
    @yield('content')

    @foreach ($page->posts($posts) as $post)
        <div class="flex flex-col mb-4">
            <h2 class="text-3xl mt-0">
                <a
                    href="{{ $post->getUrl() }}"
                    title="Read more - {{ $post->title }}"
                    class="text-gray-900 font-extrabold"
                >{{ $post->title }}</a>
            </h2>
        </div>

        @if (! $loop->last)
            <hr class="w-full border-b mt-2 mb-6">
        @endif
    @endforeach
@endsection

@section('sidebar')
    <x-blog.sidebar />
@endsection
</x-layouts.master>