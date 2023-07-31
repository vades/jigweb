@if (isset($aside))
    <div class="mb-auto">
        <main>
            {{ $slot }}
        </main>
        <aside>
            {{ $aside }}
        </aside>
    </div>
@else
    <main class="mb-auto">
        {{ $slot }}
    </main>
@endif

