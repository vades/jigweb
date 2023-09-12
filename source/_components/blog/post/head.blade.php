<section class="flex flex-col md:flex-row md:items-start mb-3">
    @if ($page->img ?? null)
        <figure class="mb-3 md:mr-3">
            <img class="w-48 border-4 border-skin-muted drop-shadow-lg" src="{{ $page->img }}" alt="{{ $page->title }}">
        </figure>
    @endif

    <div>
        <h1 class="text-3xl mb-3">{{ $page->title }}</h1>
        <div class="text-sm mb-3">
            <span>{{ $page->author}}</span>
            <span>{{ date('F j, Y', $page->date) }}</span>
        </div>
        <div class="font-bold">
            {{ $page->description }}
        </div>
    </div>

</section>