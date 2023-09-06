
@if (isset($jumbotron))
<section class="bg-skin-accent p-3 mb-4">
    <div class="md:p-0 md:container md:mx-auto">{{ $jumbotron }}</div>
</section>
@endif
@if (isset($aside))
    <div class="mb-auto container mx-auto p-3 md:pt-4 md:pb-4 md:pr-0 md:pl-0">
        <main class="">
            {{ $slot }}
        </main>
        <aside class="">
            {{ $aside }}
        </aside>
    </div>
@else
    <main class="mb-auto container mx-auto p-3 md:pt-4 md:pb-4">
        {{ $slot }}
    </main>
@endif

