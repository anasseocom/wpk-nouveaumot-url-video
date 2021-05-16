<div class="mt-12">
    <div class="article-container article-container">
        <article @php post_class() @endphp >
            <div class="max-w-screen-lg m-auto">
            <div class="mx-4">
                <h1 class="font-bold text-3xl lg:text-5xl text-center">
                @title
                </h1>
            </div>
                <div class="w-full text-base content">
                @content
                </div>
            </div>
        </article>
    </div>
</div>
{!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
