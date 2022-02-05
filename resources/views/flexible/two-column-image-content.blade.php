
@php
$background_color = get_sub_field('background_color');
$color = get_sub_field('color');
$section_padding = get_sub_field('padding');
@endphp
<style>
.content-and-image_content {
  display: flex;
  align-items: center;
}
.flex-layout.viewport_height {
  height: 100vh
}
</style>
<section class="flex-layout_content-and-image bg-{{ $background_color }} text-{{ $color }} {{ $section_padding }}">
  <div class="container">
    <div class="row">
      @if ($image = get_sub_field('image'))
        <div class="col-lg-6">
          <img src="{{ $image['url'] }}" alt="{{ $image['alt'] }}" class="w-100"/>
        </div>
      @endif
      <div class="content-and-image_content col-lg-6">
        <div>
          @if ($subheading = get_sub_field('subheading'))
            <p>{!! $subheading !!}</p>
          @endif
          @if ($heading = get_sub_field('heading'))
            <h3>{!! $heading !!}</h3>
          @endif
          @if ($content = get_sub_field('content'))
            <div>{!! $content !!}</div>
          @endif
          @if ($button = get_sub_field('button'))
            <div>{!! var_dump($button) !!}</div>
          @endif
        </div>
      </div>
    </div>
  </div>
</section>
