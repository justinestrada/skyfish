
<div class="page-header relative bg-white" style="z-index: 1;">
  <div class="container py-5">
    <div class="row justify-content-center">
      <div class="col text-center">
        <h1 class="mb-0">{!! App::title() !!}</h1>
      </div>
    </div>
  </div>
</div>
<section class="py-5 mb-5">
  <div class="container">
    <article @php post_class() @endphp>
      @include('partials/entry-meta')
      <div class="entry-content mb-5">
        @php the_content() @endphp
      </div>
      @php
      $previous_post = get_previous_post(true);
      $next_post = get_next_post(true);
      @endphp
      @if ($previous_post || $next_post)
        <div class="row">
          @if ($previous_post)
            <div class="col-6">
              @php previous_post_link('%link',"<div>&laquo; Previous Post</div>", true); @endphp
            </div>
          @endif
          @if ($next_post)
            <div class="col-6 text-right">
              @php next_post_link('%link',"<div>Next Post &raquo;</div>", true); @endphp
            </div>
          @endif
        </div>
      @endif
      {{--
      {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
      --}}
      {{-- @php comments_template('/partials/comments.blade.php') @endphp --}}
    </article>
  </div>
</section>
