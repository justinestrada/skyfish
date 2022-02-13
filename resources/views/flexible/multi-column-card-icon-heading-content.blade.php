
@php
$background = get_sub_field('background');
$text = get_sub_field('text') ?? ['color' => 'white', 'alignment' => 'left'];
$section_padding = get_sub_field('padding');
@endphp
<section id="flex-layout_{{ $layout_key }}" class="flex-layout flex-layout_multi-column-card-icon-heading-content bg-{{ $background['color'] }} {{ $section_padding }}"
    {!! (isset($background['image']) && $background['image']) ? 'style="background-image: url(' . $background['image']['url'] . ');"' : '' !!}
  >
  @if ($background['overlay'])
    <div class="flex-layout_overlay"
      style="background-color: {{ $background['overlay']['color'] }}; opacity: {{ $background['overlay']['opacity'] }};"
    ></div>
  @endif
  <div class="container-xxl">
    <div class="row">
      @if ($cards = get_sub_field('cards'))
        @foreach ($cards as $key => $card)
          <div class="col-lg mb-4 mb-lg-0">
            <a href="{{ $card['link']['url'] }}" class="card bg-secondary text-{{ $text['color'] }}">
              <div class="card-body text-{{ $text['alignment'] }}">
                @if ($card['icon'])
                  <img src="{{ $card['icon']['url'] }}" alt="{{ $card['icon']['alt'] }}" style="height: 60px;" class="mb-3" loading="lazy"/>
                @endif
                @if ($card['heading'])
                  <h3 class="mb-3">{!! $card['heading'] !!}</h3>
                @endif
                @if ($card['content'])
                  <div class="text-gray">{!! $card['content'] !!}</div>
                @endif
              </div>
            </a>
          </div>
        @endforeach
      @endif
    </div>
  </div>
</section>
