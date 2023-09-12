
<x-layouts.master :page="$page">
@section('jumbotron')
    @php
    $post = $posts->first();
    @endphp
<x-home.jumbotron :post="$post"></x-home.jumbotron>

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
  

