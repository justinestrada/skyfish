@php
$faqs = get_field('faqs');
$background = $faqs['background'];
$padding_top = $faqs['padding_top'];
$padding_bottom = $faqs['padding_bottom'];
$text_color = $faqs['color'];
$text_alignment = $faqs['text_alignment'];
@endphp
@if (isset($faqs['qa']))
    <section
        class="accordion accordion-flush bg-{{ $background['color'] }} {{ $padding_top }} {{ $padding_bottom }} text-{{ $text_color }} text-{{ $text_alignment }}"
        id="qaAccordion" {!! isset($background['image']) && $background['image'] ? 'style="background-image: url(' . $background['image']['url'] . '); background-size: ' . $background['image_size'] . '; background-position: ' . $background['image_position'] . ';"' : '' !!}>
        <div class="container-xxl">
            <div class="row">
              <h2 class="text-{{ $text_color }} text-{{ $text_alignment }}">Questions</h2>
              <p id="questions_available">0 Question(s)</p>
                @foreach ($faqs['qa'] as $key => $qa)
                    <div class="bg-{{ $background['color'] }} text-{{ $text_color }} accordion-item" data-question="{{ $qa['question'] }}"
                        data-answer="{{ $qa['answer'] }}" data-category="{{ $qa['qa_category'] }}">
                        <h2 class="accordion-header" id="qa-heading-{{ $key }}">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#qa-collapse-{{ $key }}" aria-expanded="false"
                                aria-controls="qa-collapse-{{ $key }}">
                                {{ $qa['question'] }}
                            </button>
                        </h2>
                        <div id="qa-collapse-{{ $key }}" class="accordion-collapse collapse text-left"
                            aria-labelledby="qa-heading-{{ $key }}" data-bs-parent="#qaAccordion">
                            <div class="accordion-body">{!! $qa['answer'] !!}</div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endif
