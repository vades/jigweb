@if (isset($aside))
    <div class="mb-auto container mx-auto max-sm:p-5 md:py-5">
        <main>
            {{ $slot }}
        </main>
        <aside>
            {{ $aside }}
        </aside>
    </div>
@else
    <main class="mb-auto container mx-auto max-sm:p-5 md:py-5">
        {{ $slot }}
    </main>
@endif

