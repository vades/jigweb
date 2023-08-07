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

    <section class="border-solid border-2 border-red-500 p-4">
        @foreach ($tagsArray as $key => $items)
        <a href="#{{$key}}">{{$key}}</a>
        @endforeach
    </section>
    <section class="border-solid border-2 border-gray-200  p-4">
        @foreach ($tagsArray as $key => $items)
            <article class="border-solid border-2 border-green-500  p-4">
                <h2 id="{{$key}}">{{$key}}</h2>
                    @foreach ($items as $item)
                        <div class="border-solid border-2 border-blue-500 p-4">
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
    {{-- <x-blog.sidebar :posts="$posts" /> --}}
@endsection
</x-layouts.master>