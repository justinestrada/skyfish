
@php
$background = get_field('background');
@endphp
<style>
#hero {
  background-image: url('{{ $background['mobile_image']['url'] }}');
}
@media (min-width: 992px) {
  #hero {
    background-image: url('{{ $background['desktop_image']['url'] }}');
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
  <div id="hero_inner">
    <div class="container">
      <h1 class="hero_inner_heading mb-lg-5">Welcome to Skyfish</h1>
      <p class="hero_inner_subheading mb-lg-5" style="font-size: 24px;">The future of precise drone data collection
      and analysis.<br>The autonomous drone platform designed to inspect, measure, map, and model critical infrastructure.</p>
      <button type="button" class="btn btn-lg btn-primary border-corners" data-bs-toggle="modal" data-bs-target="#heroModal">
        Watch Skyfish Platform Overview
      </button>      
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
