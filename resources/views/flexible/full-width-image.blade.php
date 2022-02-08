@php
$background = get_sub_field('background');
$section_padding = get_sub_field('padding');
@endphp
<section id="flex-layout_{{ $layout_key }}" class="flex-layout flex-layout_multi-column-card-icon-heading-content bg-{{ $background['color'] }} {{ $section_padding }} text-{{ $text_color }}">
  @if ($image = get_sub_field('image'))
    <img src="{{ $image }}" class="w-100"/>
  @endif
</section>
