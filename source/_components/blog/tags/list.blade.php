<div class="mb-3 pt-3 border-t border-skin-base">
    <h2 class="text-2xl mb-3" id="{{$tag}}"># {{$tag}}</h2>
    @foreach ($tags as $item)
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