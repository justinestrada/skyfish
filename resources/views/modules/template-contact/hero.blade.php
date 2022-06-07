@if ($hero = get_field('hero'))
<section id="hero_contact" class="page-hero flex-layout flex-layout_hero bg-{{ $hero['background']['color'] }} {{ $hero['padding'] }}"
    {!! (isset($hero['background']['image']) && $hero['background']['image']) ? 'style="background-image: url(' . $hero['background']['image']['url'] . '); background-size: cover; background-position: center;"' : '' !!}
  >
  @if ($hero['background']['overlay'])
    <div class="flex-layout_overlay"
      style="background-color: {{ $hero['background']['overlay']['color'] }}; opacity: {{ $hero['background']['overlay']['opacity'] }};"
    ></div>
  @endif
  <div class="container-xxl">
    <div class="row">
      <div class="col text-{{ $hero['text']['alignment'] }} text-{{ $hero['text']['color'] }}">
        <h1 class="mb-3">{!! get_the_title() !!}</h1>
        <p id="hero_faq_subheading" class="mb-0">{!! $hero['subheading'] !!}</p>
      </div>
    </div>
  </div>
</section>
@endif