<header class="bg-skin-header drop-shadow-md text-skin-header">
    <section class="flex justify-between items-center container mx-auto p-3 md:p-4">
        <div class="text-skin-brand-primary">
            <a class="flex items-center [&>*]:fill-skin-brand-primary [&>*]:w-7" href="/">
                <x-img.svg svg="logo" />
                <span class="pl-2 hidden md:inline-block">App&nbsp;Name</span>
    
            </a>
        </div>
        <nav class="hidden lg:inline-block">
            <a class="pl-4 hover:text-skin-header-muted" href="/blog">Blog</a>
            <a class="pl-4 hover:text-skin-header-muted" href="/tags">Tags</a>
            <a class="pl-4 hover:text-skin-header-muted" href="/pages/about">About</a>
            <a class="pl-4 hover:text-skin-header-muted" href="">Contact</a>
        </nav>
        <x-heroicon icon="menu-s" class="w-6 h-6 fill-white cursor-pointer lg:hidden" />
    </section>
</header>