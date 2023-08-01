---
title: "Category 1"
description: "Lorem ipsum dolor sit amet, consectetur adipiscing elit. "
metaTitle: "Category 1 title"
metaDescription: "Category 1 meta description"
keywords: "kw1, kw2"
extends: _components.layouts.blog
section: main
published: true
---
<h1>{{ $page->title }}</h1>
<div class="perex">
     {{ $page->description }}
</div>