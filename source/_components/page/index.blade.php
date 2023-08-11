<x-layouts.master :page="$page">
    
@section('main')
    <section class="mb-6">
        @if ($page->img ?? null)
            <figure class="mb-3">
                <img class="w-24 border-4 border-slate-300" src="{{ $page->img }}" alt="{{ $page->title }}">
            </figure>
        @endif
        <div>
            <h1 class="text-3xl text-gray-8600 mb-3">{{ $page->title }}</h1>
            <div class="font-bold">
                {{ $page->description }}
            </div>
        </div>
    </section>
    <article class="">
        @yield('content')
    </article>
    
    
@endsection

{{-- @section('sidebar')
    <x-blog.sidebar :page="$page" :posts="$posts" :categories="$categories" />
@endsection --}}
</x-layouts.master>