@php
$section_padding = get_sub_field('padding');
$background = get_sub_field('background');
$width_class = get_sub_field('width');
@endphp
<section id="flex-layout_{{ $layout_key }}" class="flex-layout flex-image-column bg-{{ $background['color'] }} {{ $section_padding }}">
  <div class="container">
    <div class="row">
      <div class="col">
        @if ($image = get_sub_field('image'))
          <img src="{{ $image['url'] }}" alt="{{ $image['title'] }}" class="{{ $width_class }} mx-auto d-block"/>
        @endif
      </div>
    </div>
  </div>
</section>
