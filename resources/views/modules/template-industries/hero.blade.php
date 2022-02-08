@php
$subheading = get_field('subheading');
$overlay = get_field('overlay');
$color = get_field('color');
$text_alignment = get_field('text_alignment');
@endphp
<section class="flex-layout py-5 text-{{ $text_alignment }}" {!! $overlay['enable'] ? 'style="background-color:'.($overlay['background_color']).'; opacity:'.$overlay['opacity'].';"' : '' !!}>
    <div class="container" style="color: {{ $color }}">
        <h1 class="hero_inner_heading m-0">{{ $subheading }}</h1>
    </div>
</section>
