
<x-layouts.master :page="$page">
@section('main')
<h3>Latest article</h3>
    <section class="border-solid border-2 border-gray-200 p-4">
        @php
            $post = $posts->first();
        @endphp
            <article class="border-solid border-2 border-red-500 p-4">
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
    </section>
    <h3>Featured articles</h3>
    <section class="border-solid border-2 border-gray-200 p-4">
        @foreach ($posts as $post)
            <article class="border-solid border-2 border-green-500 p-4">
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
    <section class="border-solid border-2 border-gray-200 p-4">
        @foreach ($posts as $post)
            <article class="border-solid border-2 border-blue-500 p-4">
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
        <div class="border-solid border-2 border-gray-200 p-4">
            <a href="/blog">All articles</a>
        </div>
    </section>
    
@endsection

@section('sidebar')
    <x-partials.aside-blog />
@endsection
</x-layouts.master>
  

