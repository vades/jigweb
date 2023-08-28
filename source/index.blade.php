
<x-layouts.home :page="$page">
@section('main')
<section class="bg-skin-fill-accent p-3 mb-4">
    @php
        $post = $posts->first();
    @endphp
    <div class="md:p-0 md:container md:mx-auto">
    <p class="text-sm uppercase pb-3">Latest article</p>
    <article class="flex flex-col items-center md:flex-row">
        <figure class="mb-3 md:mr-3">
            <a href="{{ $post->getPath() }}">
                <img class="object-cover max-w-xs border-4 border-white drop-shadow-l" src="{{ $post->img }}" alt="{{ $post->title }}">
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
            <article class="md:flex md:flex-col md:justify-between mb-4 pb-3 bg-slate-200">
                <div>
                    <figure class="">
                        <a href="{{ $post->getPath() }}">
                            <img class="mr-auto ml-auto" src="{{ $post->img }}" alt="{{ $post->title }}">
                        </a>
                    </figure>
                    <div class="p-3">
                        <h2 class="text-2xl font-bold text-gray-800 mb-3"><a href="{{ $post->getPath() }}">{{ $post->title }}</a></h2>
                        <div class="post-extra text-sm mb-3">
                            <span class="posts-author">{{ $post->author}}</span>
                            <span class="posts-date">{{ date('F j, Y', $post->date) }}</span>
                        </div>
                        <div class="mb-3">{{ $post->description}}</div>
                        
                    </div>
                </div>
                <div class="p-3">
                    <a class="text-blue-800 text-lg" href="{{ $post->getPath() }}">Continue reading &raquo;</a>
                </div>
            </article>
        @endforeach
    </section>
    <p class="text-sm uppercase pb-3">Other articles</p>
    <section class="lg:grid lg:grid-cols-2 gap-3">
        @foreach ($posts as $post)
            <article class="flex flex-col md:flex-row md:items-start mb-3 pt-3 border-t border-slate-300">
                <figure class="mb-3 md:mr-3">
                    <a href="{{ $post->getPath() }}">
                        <img class="border-4 border-slate-300 w-40" src="{{ $post->img }}" alt="{{ $post->title }}">
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
  

