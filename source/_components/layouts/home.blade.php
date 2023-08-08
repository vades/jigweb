<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="canonical" href="{{ $page->getUrl() }}">
        <meta name="description" content="{{ $page->description }}">
        <meta name="description" content="{{ $page->keywords }}">
        <title>{{ $page->title }}</title>
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
        <script defer src="{{ mix('js/main.js', 'assets/build') }}"></script>
    </head>
    <body class="bg-slate-50 text-gray-900 font-sans antialiased">
        <div class="flex flex-col h-screen justify-between">
            <x-partials.header />
            @yield('main') 
            <x-partials.footer />
    </div>
        
    </body>
</html>
