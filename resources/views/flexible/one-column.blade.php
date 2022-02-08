@php
$background = get_sub_field('background');
$section_padding = get_sub_field('padding');
$text_color = get_sub_field('color');
$text_alignment = get_sub_field('text_alignment');
@endphp
<section id="flex-layout_{{ $layout_key }}" class="flex-layout flex-layout_multi-column-card-icon-heading-content bg-{{ $background['color'] }} {{ $section_padding }} text-{{ $text_color }} text-{{ $text_alignment }}">
  <div class="container">
    <div class="row">
      <div class="col-lg mb-4 mb-lg-0">
        <div class="card-body">
          @if ($heading = get_sub_field('heading'))
            <div class="card-title">
              <h3>{!! $heading !!}</h3>
            </div>
          @endif
          @if ($content = get_sub_field('content'))
              <div>{!! $content !!}</div>
          @endif
        </div>
      </div>
    </div>
  </div>
</section>
