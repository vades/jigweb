<article class="flex flex-col items-center md:flex-row">
    <figure class="mb-3 md:mr-3">
        <a href="{{ $post->getPath() }}">
            <img class="object-cover max-w-xs border-4 border-skin-muted drop-shadow-l" src="{{ $post->img }}" alt="{{ $post->title }}">
        </a>
    </figure>
    <div>
        <p class="text-sm uppercase pb-3">Latest article</p>
        <h2 class="text-3xl font-bold mb-3"><a href="{{ $post->getPath() }}">{{ $post->title }}</a></h2>
        <div class="text-sm mb-3">
            <span class="posts-author">{{ $post->author}}</span>
            <span class="posts-date">{{ date('F j, Y', $post->date) }}</span>
        </div>
        <div class="mb-3">{{ $post->description}}</div>
        <a class="text-lg" href="{{ $post->getPath() }}">Continue reading &raquo;</a>
    </div>

</article>