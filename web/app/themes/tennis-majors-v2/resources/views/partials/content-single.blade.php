<article @php(post_class())>
  <header>
    <h1 class="entry-title">
      {!! $title !!}
    
      @thumbnail

    </h1>
    @include('partials/entry-meta')
  </header>

  <div class="entry-content">
    @php(the_content())
  </div>

  <footer>
  
  </footer>

  @php(comments_template())
</article>
