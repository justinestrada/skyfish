
@php
$background = get_sub_field('background');
$color = get_sub_field('color');
$section_padding = get_sub_field('padding');
@endphp
@if ($background['overlay'])
  <style>
  .flex-layout_overlay {
    background-color: {{ $background['overlay']['color'] }};
    opacity: {{ $background['overlay']['opacity'] }};
  }
  </style>
@endif
<section class="flex-layout flex-layout_content-and-image bg-{{ $background['color'] }} text-{{ $color }} {{ $section_padding }}"
    {!! isset($background['image']) ? 'style="background-image: url(' . $background['image']['url'] . ');"' : '' !!}
  >
  @if ($background['overlay'])
    <div class="flex-layout_overlay"></div>
  @endif
  <div class="container-xxl">
    <div class="row">
      @if ($image = get_sub_field('image'))
        <div class="col-12 d-lg-none mb-4">
          <img src="{{ $image['url'] }}" alt="{{ $image['alt'] }}" class="w-100"/>
        </div>
      @endif
      <div class="content-and-image_content col-lg-6">
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
          @if ($button = get_sub_field('button'))
            <div>
              <a href="{{ $button['link']['url'] }}" title="{{ $button['link']['title'] }}"
                  class="btn btn-primary"
                  {!! ($button['link']['target'] !== '') ? 'target="' . $button['link']['target'] . '"' : '' !!}
                >
                {{ $button['link']['title'] }}
              </a>
            </div>
          @endif
        </div>
      </div>
      @if ($image = get_sub_field('image'))
        <div class="d-none d-lg-flex col-lg-6">
          <img src="{{ $image['url'] }}" alt="{{ $image['alt'] }}" class="w-100"/>
        </div>
      @endif
    </div>
  </div>
</section>