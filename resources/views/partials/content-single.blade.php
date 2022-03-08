
@php
$page_for_posts = get_option( 'page_for_posts' );
$page_title = get_the_title();
@endphp
<section class="breadcrumb bg-light-gray py-1">
  <div class="container">
    <div class="row">
      <div class="col text-center text-md-left">
        <ul class="breadcrumb_links p-0 m-0">
          <li>
            <a href="{{ get_permalink($page_for_posts) }}">{{ get_the_title($page_for_posts) }}</a>
          </li>
          <li class="breadcrumb_links_divider">/</li>
          <li class="breadcrumb_links_divider current">
            {{ strlen($page_title) > 32 ? substr($page_title, 0, 32) . '...' : $page_title }}
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>
<section class="page-header relative bg-white" style="z-index: 1;">
  <div class="container py-5">
    <div class="row justify-content-center">
      <div class="col text-center">
        <h1 class="mb-0">{!! $page_title !!}</h1>
      </div>
    </div>
  </div>
</section>
<section class="py-5 mb-5">
  <div class="container">
    <article @php post_class() @endphp>
      @include('partials/entry-meta')
      @php
      $previous_post = get_previous_post(true);
      $next_post = get_next_post(true);
      @endphp
      <div class="entry-content {{ $previous_post || $next_post ? 'mb-5' : '' }}">
        @php the_content() @endphp
      </div>
      @if ($previous_post || $next_post)
        <div class="row">
          <div class="col-6">
            @if ($previous_post)
              @php previous_post_link('%link',"<div>&laquo; Previous Post</div>", true); @endphp
            @endif
          </div>
          <div class="col-6 text-right">
            @if ($next_post)
              @php next_post_link('%link',"<div>Next Post &raquo;</div>", true); @endphp
            @endif
          </div>
        </div>
      @endif
      {{--
      {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
      --}}
      {{-- @php comments_template('/partials/comments.blade.php') @endphp --}}
    </article>
  </div>
</section>
