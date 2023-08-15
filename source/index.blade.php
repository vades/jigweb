
<x-layouts.home :page="$page">
@section('main')
<section class="bg-slate-200 p-3 mb-4">
    @php
        $post = $posts->first();
    @endphp
    <div class="md:p-0 md:container md:mx-auto">
    <p class="text-sm uppercase pb-3">Latest article</p>
    <article class="flex flex-col items-center md:flex-row">
        <figure class="mb-3 md:mr-3">
            <a href="{{ $post->getPath() }}">
                <img class="object-cover md:max-w-64 md:w-64 border-4 border-white drop-shadow-l" src="{{ $post->img }}" alt="{{ $post->title }}">
            </a>
        </figure>
        <div class="">
            <h2 class="text-3xl font-bold text-gray-800 mb-3"><a href="{{ $post->getPath() }}">{{ $post->title }}</a></h2>
            <div class="text-sm mb-3">
                <span class="posts-author">{{ $post->author}}</span>
                <span class="posts-date">{{ date('F j, Y', $post->date) }}</span>
            </div>
            <div class="mb-3">{{ $post->description}}</div>
            <a class="text-blue-800 text-lg" href="{{ $post->getPath() }}">Continue reading &raquo;</a>
        </div>
    </div>
    </article>

</section>

<div class="container mx-auto p-3">
    <p class="text-sm uppercase pb-3">Featured articles</p>
    <section class="md:grid md:grid-cols-3 xl:grid-cols-4 gap-3">
        @foreach ($posts as $post)
            <article class="max-w-xs_ mb-4 pb-3">
                <figure class="">
                    <a href="{{ $post->getPath() }}">
                        <img class="" src="{{ $post->img }}" alt="{{ $post->title }}">
                    </a>
                </figure>
                <div class="bg-slate-200 p-3">
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
    <p class="text-sm uppercase pb-3">Other articles</p>
    <section class="grid lg:grid-cols-2 gap-3">
        @foreach ($posts as $post)
            <article class="flex flex-col md:flex-row mb-4 pb-3 border-b border-slate-300">
                <figure class="mb-3 md:mr-3">
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
    <div class="">
        <a class="text-blue-800 text-2xl" href="/blog">All articles</a>
    </div>
</div>  
@endsection
</x-layouts.master>
  

