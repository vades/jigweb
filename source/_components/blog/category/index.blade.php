<x-layouts.master :page="$page">
    
@section('main')
    <h1>{{ $page->title }}</h1>
    <div class="perex">
         {{ $page->description }}
    </div>
    @yield('content')
    <section class="articles">
        @foreach ($page->posts($posts) as $post)
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
    </section>
@endsection

@section('sidebar')
    <x-blog.sidebar />
@endsection
</x-layouts.master>