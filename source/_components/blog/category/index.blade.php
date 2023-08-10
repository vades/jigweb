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
    <section class="articles">
        @foreach ($page->posts($posts) as $post)
            <article class="mb-4 pb-3 border-b border-slate-300">
                <figure class="">
                    <a href="{{ $post->getPath() }}">
                        <img class="w-24 border-4 border-slate-300" src="{{ $post->img }}" alt="{{ $post->title }}">
                    </a>
                </figure>
                <div class="">
                    <h2 class="text-2xl font-bold text-gray-800 mb-3"><a href="{{ $post->getPath() }}">{{ $post->title }}</a></h2>
                    <div class="post-extra text-sm mb-3">
                        <span class="posts-author">{{ $post->author}}</span>
                        <span class="posts-date">{{ date('F j, Y', $post->date) }}</span>
                    </div>
                    <div class="mb-3">{{ $post->description}}</div>
                    <a class="text-blue-800 text-lg" href="{{ $post->getPath() }}">Continue reading &raquo;</a>
                </div>
            </article>
        @endforeach
    </section>
@endsection

{{-- @section('sidebar')
    <x-blog.sidebar :page="$page" :posts="$posts" :categories="$categories" />
@endsection --}}
</x-layouts.master>