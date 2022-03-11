@if ($hero = get_field('hero'))
<section id="hero_faq" class="page-hero flex-layout flex-layout_hero bg-{{ $hero['background']['color'] }} {{ $hero['padding'] }}"
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
    <div class="row">
      <div class="col">
        <div class="d-flex mt-4 mx-auto p-1 px-3 faq_search_container">
          <input type="text" id="faq_searchbar" class="w-100 py-2 px-1 faq_searchbar" placeholder="Search..."/>
          <button class="px-2 faq_search_action"><i class="fa fa-search"></i>
        </div>
      </div>
    </div>
  </div>
</section>
@endif