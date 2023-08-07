@php
    $recentPost = $posts->first();
    $tagsArray = $page->getTagsCollection($posts);
@endphp
<section>
    <div class="border-solid border-2 border-orange-500 p-4">
        <h4>Recent post</h4>
        <article>
            <figure class="posts-img">
                <a href="{{ $recentPost->getPath() }}">
                    <img src="{{ $recentPost->img }}" alt="{{ $recentPost->title }}">
                </a>
            </figure>
            <div class="posts-preview">
                <p><a href="{{ $recentPost->getPath() }}">{{ $recentPost->title }}</a></p>
                <div class="posts-description">{{ $recentPost->description}}</div>
                <a href="{{ $recentPost->getPath() }}">Continue reading...</a>
            </div>
        </article>
       
    </div>

    <div class="border-solid border-2 border-green-500 p-4">
        <h4>Featured posts</h4>
        @foreach ($posts as $post)
            <p><a href="{{ $post->getPath() }}">{{ $post->title }}</a></p>
        @endforeach
    </div>

    <div class="border-solid border-2 border-red-500 p-4">
        <h4>Categories</h4>
        <nav>
            @foreach ($categories as $category)
                <a href="{{ $category->getUrl() }}">{{ $category->title }}</a>
            @endforeach
        </nav>
    </div>

    <div class="border-solid border-2 border-blue-500 p-4">
        <h4>Tags</h4>
        @foreach ($tagsArray as $key => $items)
            <a href="/tags#{{$key}}">{{$key}}</a>
        @endforeach
    </div>
</section>