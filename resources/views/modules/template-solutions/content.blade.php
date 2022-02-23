
<style>
.pillars {
  position: relative;
}
.pillars_bg {
  display: none;
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-position: center;
  background-size: cover;
}
/* .pillars:hover {
  background-color: pink !important;
} */
a.pillar:hover {
  text-decoration: none;
}
.pillars .pillar {
  display: flex;
  justify-content: flex-end;
  min-height: 512px;
  padding-left: 0.125rem;
  padding-right: 0.125rem;
  border-right: 1px solid white;
  background-size: 64px;
  background-repeat: no-repeat;
  background-position: center;  
}
.pillars:hover .pillar {
  background-color: transparent;
  /* background-image: none !important; */
}
.pillars .pillar:last-child {
  border-right: none;
}
.pillars .pillar .pillar_text {
  display: flex;
  justify-content: flex-end;
  align-content: center;
  flex-direction: column;
}
.pillar .pillar_text_description.pillar_text_description_initialized {
  height: 0;
  overflow: hidden;
  transition: height 500ms;
}
</style>
<section id="solutions" class="py-10">
  <div class="container-xxl">
    {{-- mb-5 --}}
    <div class="pillars bg-black row">
      @if ($solutions = get_field('solutions'))
        @foreach ($solutions as $key => $solution)
          <div class="pillars_bg bg-{{ $solution['hover_background']['color'] }}" key="{{ $key }}" style="background-image: url('{{ $solution['hover_background']['image']['url'] }}');"></div>
        @endforeach
        @foreach ($solutions as $key => $solution)
          <a href="{{ get_permalink($solution['page']->ID) }}" class="pillar col-lg-3 text-center py-5" style="background-image: url('{{ $solution['icon']['url'] }}');"
            key="{{ $key }}">
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
<script>
(function($) {
const Solutions = {
  onLoad: function() {
    if (!$('#solutions').length) {
      return
    }
    this.onMouseOverPillar()
    $('.pillar_text_description').each(function() {
      const original_height = $(this).height()
      $(this).attr('original-height', original_height)
      $(this).addClass('pillar_text_description_initialized')
    })
  },
  onMouseOverPillar: function() {
    $('.pillars').each(function() {
      const $pillars = $(this)
      const $pillar_bg = $pillars.find('.pillars_bg')
      $pillars.find('.pillar').mouseover(function() {
        const $pillar = $(this)
        const key = $pillar.attr('key')
        const original_height = $pillar.find('.pillar_text_description').attr('original-height')
        $pillar.find('.pillar_text_description').css('height', original_height + 'px')
        $pillars.find(`.pillars_bg[key="${key}"]`).fadeIn(500)
      })
      $pillars.find('.pillar').mouseleave(function() {
        const $pillar = $(this)
        const key = $pillar.attr('key')
        $pillar.find('.pillar_text_description').css('height', '0')
        $pillars.find(`.pillars_bg[key="${key}"]`).fadeOut()
      })
    })
  },
}
Solutions.onLoad()
})(jQuery)
</script>
