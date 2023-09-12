<article class="md:flex md:flex-col md:justify-between mb-4 pb-3 bg-skin-accent">
    <div>
        <figure class="">
            <a href="{{ $post->getPath() }}">
                <img class="mr-auto ml-auto" src="{{ $post->img }}" alt="{{ $post->title }}">
            </a>
        </figure>
        <div class="p-3">
            <h2 class="text-2xl font-bold mb-3"><a href="{{ $post->getPath() }}">{{ $post->title }}</a></h2>
            <div class="post-extra text-sm mb-3">
                <span class="posts-author">{{ $post->author}}</span>
                <span class="posts-date">{{ date('F j, Y', $post->date) }}</span>
            </div>
            <div class="mb-3">{{ $post->description}}</div>
            
        </div>
    </div>
    <div class="p-3">
        <a class="text-lg" href="{{ $post->getPath() }}">Continue reading &raquo;</a>
    </div>
</article>