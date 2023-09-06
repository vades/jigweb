<!DOCTYPE html>
<html class="dark" lang="{{ $page->language ?? 'en' }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="canonical" href="{{ $page->getUrl() }}">
        <meta name="description" content="{{ $page->metaDescription ?? $page->description}}">
        <meta name="keywords" content="{{ $page->keywords}}">
        <title>{{ $page->metaTitle ?? $page->title}}</title>
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
        <script defer src="{{ mix('js/main.js', 'assets/build') }}"></script>
    </head>
    <body>
        <div class="flex flex-col h-screen justify-between">
            <x-partials.header />
            <x-partials.page>
                <x-slot:jumbotron>
                    @yield('jumbotron')
                </x-slot>
                <slot>
                    @yield('main') 
                </slot>
               
              
               <x-slot:aside>
                    @yield('sidebar')
                </x-slot>
            </x-partials.page>
            <x-partials.footer />
    </div>
        
    </body>
</html>
