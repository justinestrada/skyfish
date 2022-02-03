
<section id="hero" style="background-image: url('{{ wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()) ) }}');">
  {{-- <iframe id="hero_video" style="opacity: 0;" src="https://www.youtube.com/embed/uRktp0gCc0k?rel=0&autoplay=1&mute=1&showinfo=0&playlist=uRktp0gCc0k&controls=0" title="YouTube video" allowfullscreen></iframe> --}}
  <div id="hero_inner">
    <div class="container">
      <h1 class="hero_inner_heading mb-3">{{ get_the_title() }}</h1>
      @if ($subheading = get_field('subheading'))
        <h3 class="m-0">{!! $subheading !!}</h3>
      @endif
      {{-- <p class="hero_inner_subheading" style="font-size: 24px;">The future of precise drone data collection
      and analysis.<br>The autonomous drone platform designed to inspect, measure, map, and model critical infrastructure.</p>
      <button type="button" class="btn btn-lg btn-primary" data-bs-toggle="modal" data-bs-target="#heroModal">
        Watch Skyfish Platform Overview
      </button> --}}
    </div>
  </div>
</section>