
@php
$page_header = get_field('page_header');
$page_header['margin_bottom'] = $page_header['margin_bottom'] ?? '';
$page_header['text'] = $page_header['text'] ?? [
  'alignment' => 'center',
  'color' => 'white',
];
$image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'single-post-thumbnail' );
@endphp
<div class="page-header relative bg-black {{ $page_header['margin_bottom'] !== 'none' ? $page_header['margin_bottom'] : '' }}" style="
  {{ $image ? "background-image: url('" . $image[0] . "');" : '' }}
  z-index: 1;">
  <div class="container py-5 text-{{ $page_header['text']['alignment'] }} text-{{ $page_header['text']['color'] }}">
    <h1 class="mb-4">{!! App::title() !!}</h1>
    @if (isset($page_header['subheading']))
      <h2 class="mb-0">{!! $page_header['subheading'] !!}</h2>
    @endif
  </div>
</div>
