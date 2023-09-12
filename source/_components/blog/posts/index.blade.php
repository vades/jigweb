<x-layouts.master :page="$page">
@php
    //dd($pagination);
@endphp
@section('main')
    <x-partials.page.head :page="$page"></x-partials.page.head>
    <section>
        @yield('content')
    </section>
   
    <section class="lg:grid lg:grid-cols-2 gap-3">
        @foreach ($pagination->items as $post)
            <x-blog.posts.list :post="$post"></x-blog.posts.list>
        @endforeach
    </section>
  
    <section class="mx-auto text-center">
        <x-partials.nav.pagination :pagination="$pagination" :page="$page"></x-partials.nav.pagination>
    </section>
@endsection
{{--   
@section('sidebar')
    <x-blog.sidebar :page="$page" :posts="$posts" :categories="$categories" />
@endsection --}}
</x-layouts.master>