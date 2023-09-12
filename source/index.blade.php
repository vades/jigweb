
<x-layouts.master :page="$page">
@section('jumbotron')

@php
$post = $posts->first();
@endphp
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

@endsection

@section('main')

<div class="container mx-auto p-3">
    <p class="text-sm uppercase pb-3">Featured articles</p>
    <section class="md:grid md:grid-cols-3 xl:grid-cols-4 gap-3">
        @foreach ($posts as $post)
            <x-blog.posts.featured :post="$post"></x-blog.posts.featured>
        @endforeach
    </section>
    <p class="text-sm uppercase pb-3">Other articles</p>
    <section class="lg:grid lg:grid-cols-2 gap-3">
        @foreach ($posts as $post)
            <x-blog.posts.list :post="$post"></x-blog.posts.list>
        @endforeach
        
    </section>
    <div class="">
        <a class="text-2xl" href="/blog">All articles</a>
    </div>
</div>  
@endsection
{{-- @section('sidebar')
    <x-blog.sidebar :page="$page" :posts="$posts" :categories="$categories" />
@endsection --}}
</x-layouts.master>
  

