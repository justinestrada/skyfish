
@php
$hero = get_field('hero');
@endphp
<style>
#hero {
  background-image: url('{{ $hero['background']['mobile_image']['url'] }}');
}
@media (min-width: 992px) {
  #hero {
    background-image: url('{{ $hero['background']['desktop_image']['url'] }}');
  }
  #hero::after {
    content: "";
    width: 100%;
    position: absolute;
    background-image: url('{{ App\asset_path('images/mountainous-bottom-pattern.png') }}');
    height: 64px;
    bottom: 0;
    background-position: center;
    background-size: cover;
  }
}
@media (min-width: 1200px) {
  #hero::after {
    height: 72px;
  }
}
</style>
<section id="hero">
  @if ($yt_id = get_field('youtube_id'))
    <iframe id="hero_video" src="https://www.youtube.com/embed/{{ $yt_id }}?rel=0&autoplay=1&mute=1&showinfo=0&playlist={{ $yt_id }}&controls=0&loop=1" title="YouTube video" allowfullscreen></iframe>
  @endif
  <div id="hero_inner"
    @if (isset($hero['overlay']) && $hero['overlay']['enable'])
      @php ($rgb_ar = App\skyfish_convert_hex_color_to_rgb($hero['overlay']['background_color']))
      style="background-color: rgba({{ $rgb_ar[0] }}, {{ $rgb_ar[1] }}, {{ $rgb_ar[2] }}, {{ $hero['overlay']['opacity'] }});"
    @endif
    >
    <div class="container">
      <h1 class="hero_inner_heading mb-lg-5">Welcome to Skyfish</h1>
      @if ($hero['subheading'])
        <p class="hero_inner_subheading mb-lg-5" style="font-size: 24px;">
          {!! $hero['subheading'] !!}
        </p>
      @endif
      @if ($hero['primary_button'] || $hero['secondary_button'])
        <div>
          @if ($hero['primary_button'])
            <button type="button" class="btn btn-lg btn-primary border-corners {{ $hero['secondary_button'] ? 'mr-3' : '' }}" data-bs-toggle="modal" data-bs-target="#heroModal">
              {{ $hero['primary_button']['title'] }}
            </button>
          @endif
          @if ($hero['secondary_button'])
            <a href="{{ $hero['secondary_button']['url'] }}" target="_blank" class="btn btn-lg btn-secondary border-corners">
              {{ $hero['secondary_button']['title'] }}
            </a>
          @endif
        </div>
      @endif
    </div>
  </div>
</section>
<div class="modal fade" id="heroModal" tabindex="-1" aria-labelledby="heroModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-body">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        <div class="ratio ratio-16x9">
          <iframe src="https://www.youtube.com/embed/jGwIUexJbD4?rel=0" title="YouTube video" allowfullscreen></iframe>
        </div>  
      </div>
    </div>
  </div>
</div>
