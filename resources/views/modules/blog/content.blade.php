
<style>
.btn-secondary-underline {
  padding-left: 0.125rem;
  border-bottom: 2px solid #161826;
}
</style>
@php
$page_header = get_field('page_header', get_queried_object_id());
@endphp
<section class="bg-{{ $page_header['background']['color'] }}">
  <div class="container py-5">
    @if (have_posts())
      <div class="row">
        @while (have_posts()) @php the_post() @endphp
          <div class="col-lg-4 mb-5">
            @include('partials.content-' . get_post_type())
          </div>
        @endwhile
      </div>
      <div class="row justify-content-center mb-5">
        <div class="pagenavi_wrap col-auto">
          {!! wp_pagenavi() !!}
        </div>
      </div>
    @endif
  </div>
</section>