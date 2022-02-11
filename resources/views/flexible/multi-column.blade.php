
@php
$background = get_sub_field('background');
$section_padding = get_sub_field('padding');
@endphp
<section id="flex-layout_{{ $layout_key }}" class="flex-layout flex-layout_multi-column-card-icon-heading-content bg-{{ $background['color'] }} {{ $section_padding }}"
    {!! (isset($background['image']) && $background['image']) ? 'style="background-image: url(' . $background['image']['url'] . '); background-size: ' . $background['image_size'] . '; background-position: ' . $background['image_position'] . ';"' : '' !!}
  >
  @if ($background['overlay'])
    <div class="flex-layout_overlay"
      style="background-color: {{ $background['overlay']['color'] }}; opacity: {{ $background['overlay']['opacity'] }};"
    ></div>
  @endif
  <div class="container-xxl">
    <div class="row">
      @if ($columns = get_sub_field('columns'))
        @foreach ($columns as $key => $card)
          <div class="col-lg mb-4 mb-lg-0">
            @if ($card['content'])
              <div>{!! $card['content'] !!}</div>
            @endif
          </div>
        @endforeach
      @endif
    </div>
  </div>
</section>
