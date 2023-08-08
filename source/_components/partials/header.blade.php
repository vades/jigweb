<header class="bg-blue-700 drop-shadow-md">
    <section class="flex justify-between items-center container mx-auto p-3 md:p-4">
        <div class="header-brand">
            <a class="flex items-center [&>*]:fill-white [&>*]:w-7" href="/">
                <x-img.svg svg="logo" />
                <span class="pl-2 hidden md:inline-block text-white">App&nbsp;Name</span>
    
            </a>
        </div>
        <nav class="hidden lg:inline-block">
            <a class="pl-4 text-white" href="/blog">Blog</a>
            <a class="pl-4 text-white" href="/tags">Tags</a>
            <a class="pl-4 text-white" href="/pages/about">About</a>
            <a class="pl-4 text-white" href="">Contact</a>
        </nav>
        <x-heroicon icon="menu-s" class="w-6 h-6 fill-white cursor-pointer lg:hidden" />
    </section>
</header>