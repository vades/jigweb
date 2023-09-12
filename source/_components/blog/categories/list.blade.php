<article class="mb-3 pt-3 border-t border-skin-base">
    <h2 class="text-2xl mb-3">
        <a href="{{ $category->getUrl() }}">{{ $category->title }}</a>
    </h2>
    <div class="mb-3">{{ $category->description}}</div>
    <a class="text-lg" href="{{ $category->getUrl() }}">Show articles for this category &raquo;</a>
</article>