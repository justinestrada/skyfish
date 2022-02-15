
@php
$background = get_sub_field('background');
$section_padding = get_sub_field('padding');
$text_alignment = get_sub_field('text_alignment');
@endphp
<section id="flex-layout_{{ $layout_key }}" class="flex-layout flex-layout_multi-column-card-icon-heading-content bg-{{ $background['color'] }} {{ $section_padding }}"
    {!! (isset($background['image']) && $background['image']) ? 'style="background-image: url(' . $background['image']['url'] . '); background-size: ' . $background['image_size'] . '; background-position: ' . $background['image_position'] . ';"' : '' !!}
  >
  <div class="container-xxl">
    <div class="d-flex justify-content-around">
      @if ($cards = get_sub_field('cards'))
        @foreach ($cards as $key => $card)
        <div class="card text-{{$text_alignment}}" style="max-width: 400px">
          <img class="card-img-top" src="{{ $card['image']['url'] }}" alt="{{ $card['heading'] }}" style="width: 200px;margin: 0 auto;margin-top: -100px;border-radius: 100px;">
          <div class="card-body">
            <h5 class="card-title">{{ $card['heading'] }}</h5>
            <p class="card-text">{!! $card['content'] !!}</p>
          </div>
        </div>
        @endforeach
      @endif
    </div>
  </div>
</section>