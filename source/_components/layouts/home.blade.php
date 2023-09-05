<!DOCTYPE html>
<html class="dark" lang="{{ $page->language ?? 'en' }}">
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
    <body>
        <div class="bg-skin-base flex flex-col h-screen justify-between">
            <x-partials.header />
            <main>
                @yield('main') 
            </main>
           
            <x-partials.footer />
    </div>
        
    </body>
</html>
