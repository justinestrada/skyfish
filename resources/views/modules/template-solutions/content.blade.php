
<style>
.pillars:hover {
  background-color: pink !important;
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
.pillars .pillar:last-child {
  border-right: none;
}
.pillars .pillar .pillar_text {
  display: flex;
  justify-content: flex-end;
  align-content: center;
  flex-direction: column;
}
.pillar .pillar_text_description {
  height: 0;
  overflow: hidden;
  transition: all 1s;
}
.pillar:hover {
  background-color: transparent;
  background-image: none !important;
}
.pillar:hover .pillar_text_description {
  height: fit-content;
  /* background-color: blue; */
}
</style>
<section id="solutions" class="py-10">
  <div class="container-xxl">
    {{-- mb-5 --}}
    <div class="pillars bg-black row">
      @if ($solutions = get_field('solutions'))
        @foreach ($solutions as $key => $solution)
          <a href="{{ get_permalink($solution['page']->ID) }}" class="pillar col-lg-3 text-center py-5" style="background-image: url('{{ $solution['icon']['url'] }}');">
            {{-- <img src="" alt="{{ $solution['icon']['alt'] }}" class="mb-3" style="height: 64px;"/> --}}
            <div class="pillar_text">
              <h3 class="text-white mb-0">{!! $solution['title'] !!}</h3>
              <div class="pillar_text_description">{!! $solution['description'] !!}</div>
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
  },
  onMouseOverPillar: function() {
    $('.pillars').mouseover(function() {
      const hover_background_image = $(this).attr('hover-background-image')
      console.log('this', hover_background_image)
    })
  },
}
Solutions.onLoad()
})(jQuery)
</script>
