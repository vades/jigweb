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
    <body class="text-gray-900 font-sans antialiased">
        <div class="flex flex-col h-screen justify-between">
            <header class="border-b-2">
                <section class="flex justify-between items-center container mx-auto max-sm:p-5 md:py-5">
                    <div class="header-brand">
                        <a class="flex items-center [&>*]:fill-blue-600 [&>*]:w-8" href="/">
                            <x-img.svg svg="logo"></x-svg>
                            <span class="pl-2">App&nbsp;Name</span>
                
                        </a>
                    </div>
                    <nav>
                        <a class="pl-4" href="/blog">Blog</a>
                        <a class="pl-4" href="/pages/about">About</a>
                        <a class="pl-4" href="">Contact</a>
                    </nav>
                    
                </section>
            </header>
            <main class="mb-auto">
                <section class="container mx-auto max-sm:p-5 md:py-5">
                    @yield('body')
                </section>
            </main>

        <footer class="border-t-2">
            <section class="container mx-auto max-sm:p-5 md:py-5 text-center text-sm">
                <span>©{{ date('Y') }} App Name</span>
                <nav>
                    <a class="pl-2" href="/">Home</a>
                    <a class="pl-2" href="/blog">Blog</a>
                    <a class="pl-2" href="/pages/about">About</a>
                    <a class="pl-2" href="">Contact</a>
                </nav>
            </section>
        </footer>
    </div>
        
    </body>
</html>
