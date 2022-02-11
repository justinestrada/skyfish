
@if ($hero = get_field('hero'))
  <section id="hero_industries" class="page-hero flex-layout flex-layout_hero bg-{{ $hero['background']['color'] }} {{ $hero['padding'] }}"
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
          <h1 class="d-none">{!! get_the_title() !!}</h1>
          <h3 class="mb-0">{!! $hero['subheading'] !!}</h3>
        </div>
      </div>
    </div>
  </section>
@endif
