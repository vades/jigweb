@if (isset($aside))
    <div class="mb-auto container mx-auto max-sm:p-5 md:py-5">
        <main class="border-solid border-2 border-gray-200 p-4">
            {{ $slot }}
        </main>
        <aside class="border-solid border-2 border-gray-200 p-4">
            {{ $aside }}
        </aside>
    </div>
@else
    <main class="mb-auto container mx-auto max-sm:p-5 md:py-5 border-solid border-2 border-gray-200 p-4">
        {{ $slot }}
    </main>
@endif

