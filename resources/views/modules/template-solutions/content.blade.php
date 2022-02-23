
<section id="solutions" class="bg-black py-10">
  <div class="container-xxl">
    <div class="pillars bg-black row">
      @if ($solutions = get_field('solutions'))
        @foreach ($solutions as $key => $solution)
          <div class="pillars_bg bg-{{ $solution['hover_background']['color'] }}" key="{{ $key }}" style="background-image: url('{{ $solution['hover_background']['image']['url'] }}');"></div>
        @endforeach
        @foreach ($solutions as $key => $solution)
          <a href="{{ get_permalink($solution['page']->ID) }}" class="pillar col-lg-3 text-center py-5"
            style="background-image: url('{{ $solution['background_image']['url'] }}');"
            key="{{ $key }}">
            <div class="pillar_inner-bg bg-fade-up"></div>
            <div class="pillar_text">
              <h3 class="text-white mb-2">{!! $solution['title'] !!}</h3>
              <div class="pillar_text_description text-white">
                {!! $solution['description'] !!}
              </div>
            </div>
          </a>
        @endforeach
      @endif
    </div>
  </div>
</section>
