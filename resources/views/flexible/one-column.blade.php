@php
$section_padding = get_sub_field('padding');
$background = get_sub_field('background');
$text = get_sub_field('text');
@endphp
<section id="flex-layout_{{ $layout_key }}" class="flex-layout flex-layout_multi-column-card-icon-heading-content bg-{{ $background['color'] }} {{ $section_padding }} text-{{ $text['color'] }} text-{{ $text['alignment'] }}">
  <div class="container">
    <div class="row">
      <div class="col text-{{ $text['alignment'] }}">
        @if ($heading = get_sub_field('heading'))
          <h2 class="flex-layout_heading text-{{ $text['heading']['mobile_alignment'] }} text-lg-{{ $text['heading']['desktop_alignment'] }} mb-3">{!! $heading !!}</h2>
        @endif
        @if ($content = get_sub_field('content'))
          <div class="flex-layout_inner-content">{!! $content !!}</div>
        @endif
      </div>
    </div>
  </div>
</section>
