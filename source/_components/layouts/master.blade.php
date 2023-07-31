<!DOCTYPE html>
<html lang="{{ $page?->language ?? 'en' }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="canonical" href="{{ $page?->getUrl() ?? '' }}">
        <meta name="description" content="{{ $page?->metaDescription ?? '' }}">
        <meta name="description" content="{{ $page?->keywords ?? '' }}">
        <title>{{ $page?->metaTitle ?? '' }}</title>
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
        <script defer src="{{ mix('js/main.js', 'assets/build') }}"></script>
    </head>
    <body class="text-gray-900 font-sans antialiased">
        <div class="flex flex-col h-screen justify-between">
            <x-button type="submit" class="dfdfdf">
                Submit
            </x-button>
            <x-partials.header />
            <x-partials.page>
                {{ $slot }}
                {{ $aside ?? '' }}
            </x-partials.page>
            <x-partials.footer />
        </div>
        
    </body>
</html>
