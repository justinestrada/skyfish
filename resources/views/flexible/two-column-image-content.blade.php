
@php
$background = get_sub_field('background');
$color = get_sub_field('color');
$section_padding = get_sub_field('padding');
$button = get_sub_field('button');
@endphp
<section id="flex-layout_{{ $layout_key }}" class="flex-layout flex-layout_image-and-content bg-{{ $background['color'] }} text-{{ $color }} {{ $section_padding }}"
    {!! (isset($background['image']) && $background['image']) ? 'style="background-image: url(' . $background['image']['url'] . ');"' : '' !!}
  >
  @if ($background['overlay'])
    <div class="flex-layout_overlay"
      style="background-color: {{ $background['overlay']['color'] }}; opacity: {{ $background['overlay']['opacity'] }};"
    ></div>
  @endif
  <div class="container-xxl">
    <div class="row">
      @if ($image = get_sub_field('image'))
        <div class="flex-layout_image-col col-lg-6 mb-4 mb-lg-0">
          <img src="{{ $image['url'] }}" alt="{{ $image['alt'] }}" class="w-100" loading="lazy"/>
        </div>
      @endif
      <div class="flex-layout_content-col col-lg-6">
        <div>
          @if ($subheading = get_sub_field('subheading'))
            <p class="flex-layout_subheading text-gray mb-3">{!! $subheading !!}</p>
          @endif
          @if ($heading = get_sub_field('heading'))
            <h2 class="flex-layout_heading mb-3">{!! $heading !!}</h2>
          @endif
          @if ($content = get_sub_field('content'))
            <div class="flex-layout_inner-content mb-3">{!! $content !!}</div>
          @endif
          @if ($button && $button['link'])
            <div>
              <a href="{{ $button['link']['url'] }}" title="{{ $button['link']['title'] }}"
                  class="btn btn-{{ $button['type'] }} border-corners"
                  {!! ($button['link']['target'] !== '') ? 'target="' . $button['link']['target'] . '"' : '' !!}
                >
                {{ $button['link']['title'] }}
              </a>
            </div>
          @endif
        </div>
      </div>
    </div>
  </div>
</section>