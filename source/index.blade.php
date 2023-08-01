
<x-layouts.master :page="$page">
@section('main')
    <h1 class="text-3xl font-bold">{{$page->title}}</h1>
    <div class="perex">
        {{ $page->description }}
   </div>
    <section>
        <div>Jumbotron: Latest post</div>
        <div>eatured posts</div>
        <div>Other posts: Link to all posts</div>
    </section>
@endsection

@section('sidebar')
    <x-partials.aside-blog />
@endsection
</x-layouts.master>
  

