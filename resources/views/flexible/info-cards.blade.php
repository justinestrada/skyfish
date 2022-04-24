@php
$background = get_sub_field('background');
$padding_top = get_sub_field('padding_top');
$padding_bottom = get_sub_field('padding_bottom');
$text_alignment = get_sub_field('text_alignment');
@endphp
<section id="flex-layout_{{ $layout_key }}"
  class="flex-layout info-cards bg-{{ $background['color'] }} {{ $padding_top }} {{ $padding_bottom }}"
  {!! isset($background['image']) && $background['image'] ? 'style="background-image: url(' . $background['image']['url'] . '); background-size: ' . $background['image_size'] . '; background-position: ' . $background['image_position'] . ';"' : '' !!}>
  <div class="container-xxl">
    <div class="row">
      @if ($cards = get_sub_field('cards'))
        @foreach ($cards as $key => $card)
          <div class="col-lg-6 mb-3">
            <a class="card card-info bg-black" href="{{ $card['url'] ? $card['url'] : 'javascript:void(0)' }}" {{ str_contains($card['url'], '.pdf') ? 'download' : '' }}>
              <div class="card-body text-{{ $text_alignment }} text-white">
                <div class="row">
                  @if ($card['image'])
                    <div class="col-2">
                      <img src="{{ $card['image']['url'] }}" alt="{{ $card['heading'] }}" class="w-100"/>
                    </div>
                  @endif
                  <div class="col-10 d-flex align-items-center">
                    @if ($card['heading'])
                      <h5 class="card-title m-0">{{ $card['heading'] }}</h5>
                    @endif
                    @if ($card['content'])
                      <div class="card-text card-content">{!! $card['content'] !!}</div>
                    @endif
                  </div>
                </div>
              </div>
            </a>
          </div>
        @endforeach
      @endif
    </div>
  </div>
</section>
