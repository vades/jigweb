<x-layouts.master :page="$page">
    
@section('main')
    <h1>{{ $page->title }}</h1>
    <div class="perex">
         {{ $page->description }}
    </div>
    @yield('content')
@endsection

@section('sidebar')
    <x-partials.aside-blog />
@endsection
</x-layouts.master>