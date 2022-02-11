
<style>
.btn-link_underline {
  color: transparent;
  display: inline-block;
  overflow: hidden;
  position: relative;
  text-decoration: none;
  text-shadow: 0 0 #141414, 0.08em 0 0 #fff, 0 0, -0.08em 0 0 #fff;
  vertical-align: bottom;
}
.btn-link_underline:after {
  background: linear-gradient(to bottom, rgba(20, 20, 20, 0.8), rgba(20, 20, 20, 0.8)) center 1.08em/100% 2px no-repeat;
  content: "";
  height: 100%;
  left: 0;
  position: absolute;
  top: 0;
  width: 400%;
  will-change: transform;
  z-index: -1;
}
.btn-link_underline:hover:after {
  -webkit-animation: underline-gradient 6s linear infinite;
          animation: underline-gradient 6s linear infinite;
  background-image: linear-gradient(90deg, rgba(122, 95, 255, 0.8) 15%, rgba(1, 255, 137, 0.6) 35%, rgba(122, 95, 255, 0.8) 85%);
}

@-webkit-keyframes underline-gradient {
  0% {
    transform: translate3d(0%, 0%, 0);
  }
  100% {
    transform: translate3d(-75%, 0%, 0);
  }
}

@keyframes underline-gradient {
  0% {
    transform: translate3d(0%, 0%, 0);
  }
  100% {
    transform: translate3d(-75%, 0%, 0);
  }
}
</style>

@php
$background = get_sub_field('background');
$color = get_sub_field('color');
$section_padding = get_sub_field('padding');
@endphp
@if ($background['overlay'])
  <style>
  #flex-layout_{{ $layout_key }} .flex-layout_overlay {
    background-color: {{ $background['overlay']['color'] }};
    opacity: {{ $background['overlay']['opacity'] }};
  }
  </style>
@endif
<section id="flex-layout_{{ $layout_key }}" class="flex-layout flex-layout_content-and-image bg-{{ $background['color'] }} text-{{ $color }} {{ $section_padding }}"
    {!! (isset($background['image']) && $background['image']) ? 'style="background-image: url(' . $background['image']['url'] . ');"' : '' !!}
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
          @if ($button = get_sub_field('button'))
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
      @if ($image = get_sub_field('image'))
        <div class="d-none d-lg-flex col-lg-6">
          <img src="{{ $image['url'] }}" alt="{{ $image['alt'] }}" class="w-100"/>
        </div>
      @endif
    </div>
  </div>
</section>