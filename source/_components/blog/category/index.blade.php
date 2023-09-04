<x-layouts.master :page="$page">
    
@section('main')
    <section class="mb-6">
        <h1 class="text-3xl mb-3">{{ $page->title }}</h1>
        <div class="font-bold">
            {{ $page->description }}
        </div>
    </section>
    <section>
        @yield('content')
    </section>
    <section class="lg:grid lg:grid-cols-2 gap-3">
        @foreach ($page->posts($posts) as $post)
        <article class="flex flex-col md:flex-row md:items-start mb-3 pt-3 border-t border-skin-base">
                <figure class="mb-3 md:mr-3">
                    <a href="{{ $post->getPath() }}">
                        <img class="border-4 border-skin-base w-40" src="{{ $post->img }}" alt="{{ $post->title }}">
                    </a>
                </figure>
                <div>
                    <h2 class="text-2xl mb-3"><a href="{{ $post->getPath() }}">{{ $post->title }}</a></h2>
                    <div class="post-extra text-sm mb-3">
                        <span>{{ $post->author}}</span>
                        <span>{{ date('F j, Y', $post->date) }}</span>
                    </div>
                    <div class="mb-3">{{ $post->description}}</div>
                    <a class="text-lg" href="{{ $post->getPath() }}">Continue reading &raquo;</a>
                </div>
            </article>
        @endforeach
    </section>
@endsection

{{-- @section('sidebar')
    <x-blog.sidebar :page="$page" :posts="$posts" :categories="$categories" />
@endsection --}}
</x-layouts.master>