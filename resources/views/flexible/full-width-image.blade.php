
@if ($image = get_sub_field('image'))
  @php
  $parallax = get_sub_field('parallax');
  $background_color = get_sub_field('background_color') ? get_sub_field('background_color') : 'black';
  @endphp
  <section id="flex-layout_{{ $layout_key }}" class="flex-layout bg-black flex-layout_full-width-image {{ isset($parallax) && $parallax['enable'] ? 'flex-layout_full-width-image_parallax ' . $parallax['padding'] : ''  }} bg-{{ $background_color }}" style="background-image: url('{{ $image['url'] }}');">
    <img src="{{ $image['url'] }}" alt="{{ $image['alt'] }}" class="w-100 {{ isset($parallax) && $parallax['enable'] ? 'd-lg-none' : '' }}" loading="lazy"/>
    @if ($parallax && $parallax['enable'] && $parallax['padding'] !== 'viewport_height')
      <div class="d-none d-lg-block my-lg-10">
        <span class="sr-only">{{ $image['alt'] }}</span>
      </div>
    @endif
  </section>
@endif
