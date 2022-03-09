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
                    <div class="col-lg-6 p-1">
                      <div class="card p-2">
                        <a class="d-flex flex-row align-items-center" href="{{ $card['url'] ? $card['url'] : 'javascript:void(0)' }}">
                          <div class="card-img-container">
                              <img class="card-img" src="{{ $card['image']['url'] }}"
                                  alt="{{ $card['heading'] }}" />
                          </div>
                          <div class="card-body w-75 text-{{ $text_alignment }}">
                              @if ($card['heading'])
                                  <h5 class="card-title m-0">{{ $card['heading'] }}</h5>
                              @endif
                              @if ($card['content'])
                                  <div class="card-text card-content">{!! $card['content'] !!}</div>
                              @endif
                          </div>
                      </a>
                      </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
</section>
