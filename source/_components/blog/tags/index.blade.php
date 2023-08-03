<x-layouts.master :page="$page">
    
@section('main')
    @php
        $tagsArray = $page->getTagsCollection($posts);
        
    @endphp
    <h1>{{ $page->title }}</h1>
    <div class="perex">
         {{ $page->description }}
    </div>
    @yield('content')

    <section class="tags-list">
        @foreach ($tagsArray as $key => $items)
        <a href="#{{$key}}">{{$key}}</a>
        @endforeach
    </section>
    <section class="tags-items">
        @foreach ($tagsArray as $key => $items)
            <article class="tag-posts">
                <h2 id="{{$key}}">{{$key}}</h2>
                    @foreach ($items as $item)
                        <div class="tag-post-item">
                            @if ($item['post']['img'] ?? null)
                                <figure class="tags-img">
                                    <a href="{{$item['post']['path']}}">
                                    <img src="{{$item['post']['img']}}" alt="{{$item['post']['title']}}">
                                </a>
                                </figure>
                            @endif
                        
                            <a href="{{$item['post']['path']}}" title="{{$item['post']['description']}}">
                                <h3>{{$item['post']['title']}}</h3>
                            </a>
                        </div>
                        
                    @endforeach
            </article>
        @endforeach
    </section>
@endsection

@section('sidebar')
    <x-blog.sidebar />
@endsection
</x-layouts.master>