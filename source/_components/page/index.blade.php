<x-layouts.master :page="$page">
    
@section('main')
    <h1>{{ $page->title }}</h1>
    <div class="perex">
         {{ $page->description }}
    </div>
    @yield('content')
@endsection

@section('sidebar')
    <x-blog.sidebar />
@endsection
</x-layouts.master>