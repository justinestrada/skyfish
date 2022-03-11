
<article @php post_class('card card_blog card_rounded') @endphp>
  @php
  $permalink = get_permalink();
  $categories = get_categories();
  $press = get_field('press');
  $is_press = isset($press['enable']) && $press['enable'];
  $permalink = $is_press ? $press['url'] : $permalink;
  @endphp
  @if ($image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'single-post-thumbnail' ))
    <img src="{{ $image[0] }}" alt="{{ the_title_attribute() }}" class="card-img-top"/>
  @endif
  <div class="card-body">
    <h3 class="entry-title">
      <a href="{{ $permalink }}" class="text-black" {{ $is_press ? 'target="_blank"' : '' }}>{!! get_the_title() !!}</a>
    </h3>
    @include('partials/entry-meta')
    <div class="entry-summary">
      {{ get_the_excerpt() }}
    </div>
    <a href="{{ $permalink }}" class="btn btn-secondary-underline" {{ $is_press ? 'target="_blank"' : '' }}>Read More &raquo;</a>
  </div>
</article>
  