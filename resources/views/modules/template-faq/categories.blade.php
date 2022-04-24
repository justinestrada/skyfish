@php
$faq_categories_container = get_field('faq_categories_container');
$background = $faq_categories_container['background'];
$padding_top = $faq_categories_container['padding_top'];
$padding_bottom = $faq_categories_container['padding_bottom'];
$text_color = $faq_categories_container['color'];
$text_alignment = $faq_categories_container['text_alignment'];
@endphp
<section id="faq_categories"
  class="faq_categories bg-{{ $background['color'] }} {{ $padding_top }} {{ $padding_bottom }} text-{{ $text_alignment }}"
  {!! isset($background['image']) && $background['image'] ? 'style="background-image: url(' . $background['image']['url'] . '); background-size: ' . $background['image_size'] . '; background-position: ' . $background['image_position'] . ';"' : '' !!}>
  <div class="container-xxl">
    <div class="row">
      <h2 class="text-{{ $text_color }} text-{{ $text_alignment }}">Categories</h2>
      @if (isset($faq_categories_container['faq_categories']))
        @foreach ($faq_categories_container['faq_categories'] as $card)
          <div class="col-6 col-lg-4">
            <a href="javascript:void(0);" class="card bg-secondary text-white p-2" data-category="{{ $card['category'] }}">
              <div class="d-flex flex-row align-items-center">
                {{-- @if ($card['image'])
                  <div class="card-img-container">
                    <img class="card-img" src="{{ $card['image']['url'] }}" alt="{{ $card['category'] }}"/>
                  </div>
                @endif --}}
                <div class="card-body w-100">
                  <h5 class="card-title m-0">{{ $card['category'] }}</h5>
                </div>
              </div>
            </a>
          </div>
        @endforeach
      @endif
    </div>
  </div>
</section>
