
@php
$background = get_sub_field('background');
$section_padding = get_sub_field('padding');
$text_alignment = get_sub_field('text_alignment');
@endphp
<section id="flex-layout_{{ $layout_key }}" class="flex-layout card-grid-column-content bg-{{ $background['color'] }} {{ $section_padding }}"
    {!! (isset($background['image']) && $background['image']) ? 'style="background-image: url(' . $background['image']['url'] . '); background-size: ' . $background['image_size'] . '; background-position: ' . $background['image_position'] . ';"' : '' !!}
  >
  <div class="container-xxl">
    <div class="cards-container">
      @if ($cards = get_sub_field('cards'))
        @foreach ($cards as $key => $card)
        <div class="card text-{{$text_alignment}}">
          <img class="card-img-top" src="{{ $card['image']['url'] }}" alt="{{ $card['heading'] }}">
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