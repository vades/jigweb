@if (isset($aside))
    <div class="mb-auto container mx-auto pt-3 pb-3 md:pt-4 md:pb-4">
        <main class="">
            {{ $slot }}
        </main>
        <aside class="">
            {{ $aside }}
        </aside>
    </div>
@else
    <main class="mb-auto container mx-auto pt-3 pb-3 md:pt-4 md:pb-4">
        {{ $slot }}
    </main>
@endif

