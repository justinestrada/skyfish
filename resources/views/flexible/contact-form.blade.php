@php
$background = get_sub_field('background');
$padding_top = get_sub_field('padding_top');
$padding_bottom = get_sub_field('padding_bottom');
$text_alignment = get_sub_field('text_alignment');
$color = get_sub_field('color');
@endphp
<section id="flex-layout_{{ $layout_key }}"
  class="flex-layout contact-form text-{{ $color }} bg-{{ $background['color'] }} {{ $padding_top }} {{ $padding_bottom }} text-{{$text_alignment}}"
  {!! isset($background['image']) && $background['image'] ? 'style="background-image: url(' . $background['image']['url'] . '); background-size: ' . $background['image_size'] . '; background-position: ' . $background['image_position'] . ';"' : '' !!}>
  <div class="container">
    {!! do_shortcode(get_sub_field('shortcode'))!!}
  </div>
</section>
