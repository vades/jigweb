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