
<x-layouts.home :page="$page">
@section('main')

<section class="bg-slate-200 p-3 mb-4">
    @php
        $post = $posts->first();
    @endphp
    <div class="md:p-0 md:container md:mx-auto">
    <p class="text-sm uppercase">Latest article</h3>
    <article class="pt-3">
        <figure class="posts-img">
            <a href="{{ $post->getPath() }}">
                <img src="{{ $post->img }}" alt="{{ $post->title }}">
            </a>
        </figure>
        <div class="posts-preview">
            <h2><a href="{{ $post->getPath() }}">{{ $post->title }}</a></h2>
            <div class="post-extra">
                <span class="posts-author">{{ $post->author}}</span>
                <span class="posts-date">{{ date('F j, Y', $post->date) }}</span>
            </div>
            <div class="posts-description">{{ $post->description}}</div>
            <a href="{{ $post->getPath() }}">Continue reading...</a>
        </div>
    </div>
    </article>

</section>

<div class="container mx-auto">
    <h3>Featured articles</h3>
    <section class="">
        @foreach ($posts as $post)
            <article class="mb-4">
                <figure class="posts-img">
                    <a href="{{ $post->getPath() }}">
                        <img src="{{ $post->img }}" alt="{{ $post->title }}">
                    </a>
                </figure>
                <div class="posts-preview">
                    <h2><a href="{{ $post->getPath() }}">{{ $post->title }}</a></h2>
                    <div class="post-extra">
                        <span class="posts-author">{{ $post->author}}</span>
                        <span class="posts-date">{{ date('F j, Y', $post->date) }}</span>
                    </div>
                    <div class="posts-description">{{ $post->description}}</div>
                    <a href="{{ $post->getPath() }}">Continue reading...</a>
                </div>
            </article>
        @endforeach
    </section>
    <h3>Other articles</h3>
    <section class="">
        @foreach ($posts as $post)
            <article class="mb-4">
                <figure class="posts-img">
                    <a href="{{ $post->getPath() }}">
                        <img src="{{ $post->img }}" alt="{{ $post->title }}">
                    </a>
                </figure>
                <div class="posts-preview">
                    <h2><a href="{{ $post->getPath() }}">{{ $post->title }}</a></h2>
                    <div class="post-extra">
                        <span class="posts-author">{{ $post->author}}</span>
                        <span class="posts-date">{{ date('F j, Y', $post->date) }}</span>
                    </div>
                    <div class="posts-description">{{ $post->description}}</div>
                    <a href="{{ $post->getPath() }}">Continue reading...</a>
                </div>
            </article>
        @endforeach
        <div class="">
            <a href="/blog">All articles</a>
        </div>
    </section>
</div>  
@endsection
</x-layouts.master>
  

