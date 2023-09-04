<x-layouts.master :page="$page">
    
@section('main')
    @php
        $tagsArray = $page->getTagsCollection($posts);
        
    @endphp
    <section class="mb-6">
        <h1 class="text-3xl mb-3">{{ $page->title }}</h1>
        <div class="font-bold">
            {{ $page->description }}
        </div>
    </section>
    <section class="content">
        @yield('content')
    </section>

    <section class="mb-3">
        @foreach ($tagsArray as $key => $items)
        <a class="text-xs font-medium mr-2 px-2.5 py-0.5 rounded bg-skin-base border border-skin-base hover:bg-skin-accent hover:no-underline" href="#{{$key}}">{{$key}}</a>
        @endforeach
    </section>
    <section class="lg:grid lg:grid-cols-2 gap-3">
        @foreach ($tagsArray as $key => $items)
            <div class="mb-3 pt-3 border-t border-skin-base">
                <h2 class="text-2xl mb-3" id="{{$key}}"># {{$key}}</h2>
                    @foreach ($items as $item)
                        <article class="mb-3">
                            {{-- @if ($item['post']['img'] ?? null)
                                <figure class="tags-img">
                                    <a href="{{$item['post']['path']}}">
                                    <img class="w-24 border-4 border-slate-300" src="{{$item['post']['img']}}" alt="{{$item['post']['title']}}">
                                </a>
                                </figure>
                            @endif --}}
                            <h3 class="text-md mb-3">
                                <a href="{{$item['post']['path']}}" title="{{$item['post']['description']}}">
                                    {{$item['post']['title']}}
                                </a>
                            </h3>
                        </article>
                        
                    @endforeach
                    </div>
        @endforeach
    </section>
@endsection

@section('sidebar')
    {{-- <x-blog.sidebar :posts="$posts" /> --}}
@endsection
</x-layouts.master>