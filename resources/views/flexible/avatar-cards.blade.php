@php
$background = get_sub_field('background');
$section_padding = get_sub_field('padding');
$text_alignment = get_sub_field('text_alignment');
@endphp
<section id="flex-layout_{{ $layout_key }}"
    class="flex-layout avatar-cards pb-10 bg-{{ $background['color'] }} {{ $section_padding }}"
    {!! isset($background['image']) && $background['image'] ? 'style="background-image: url(' . $background['image']['url'] . '); background-size: ' . $background['image_size'] . '; background-position: ' . $background['image_position'] . ';"' : '' !!}>
    <div class="container-xxl">
        <div class="row">
            @if ($cards = get_sub_field('cards'))
                @foreach ($cards as $key => $card)
                    <div class="col-lg-4 pt-10 mb-10">
                        <div class="card text-{{ $text_alignment }} h-100">
                            @if ($card['linkedin_url'])
                                <a href="{{ $card['linkedin_url'] }}" target="_blank" class="card-img-container">
                                    <img class="card-img-top card-img" src="{{ $card['image']['url'] }}"
                                        alt="{{ $card['heading'] }}">
                                    <div class="icon-container">
                                        <i class="fa fa-linkedin"></i>
                                    </div>
                                </a>
                            @else
                                <div class="card-img-container">
                                    <img class="card-img-top card-img" src="{{ $card['image']['url'] }}"
                                        alt="{{ $card['heading'] }}">
                                </div>
                            @endif
                            <div class="card-body">
                                <h5 class="card-title">{{ $card['heading'] }}</h5>
                                <div class="card-text card-content">{!! $card['content'] !!}</div>
                                <button class="btn btn-transparent btn-toggle-expand-bio">
                                  <i class="fa fa-angle-double-down" aria-hidden="true"></i>
                                  <span class="sr-only">View More</span>
                                </button>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
</section>
