
@php
$page_id = is_home() ? get_queried_object_id() : get_the_ID();
$page_header = get_field('page_header', $page_id);
$page_header['margin_bottom'] = $page_header['margin_bottom'] ?? '';
$page_header['text'] = $page_header['text'] ?? [
  'alignment' => 'center',
  'color' => 'white',
];
$image = wp_get_attachment_image_src( get_post_thumbnail_id( $page_id ), 'single-post-thumbnail' );
@endphp
<div class="page-header relative bg-{{ $page_header['background']['color'] }} {{ $page_header['margin_bottom'] !== 'none' ? $page_header['margin_bottom'] : '' }}" style="
  {{ $image ? "background-image: url('" . $image[0] . "');" : '' }}
  z-index: 1;">
  <div class="container py-5 text-{{ $page_header['text']['alignment'] }} text-{{ $page_header['text']['color'] }}">
    <div class="row justify-content-center">
      <div class="col-lg-8 col-xl-6">
        <h1 class="mb-4">{!! App::title() !!}</h1>
        @if (isset($page_header['subheading']))
          <p class="fs-1.25x mb-0">{!! $page_header['subheading'] !!}</p>
        @endif
      </div>
    </div>
  </div>
</div>
