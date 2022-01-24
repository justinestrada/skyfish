
<section class="bg-{{ get_sub_field('bg_color') }}">
  <div id="carousel{{ $layout_key }}" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      @foreach(get_sub_field('slides') as $key => $value)
        <button type="button" data-bs-target="#carousel{{ $layout_key }}" data-bs-slide-to="{{ $key }}"
          class="{{ $key === 0 ? 'active' : '' }}" aria-current="true" aria-label="Slide"></button>
      @endforeach
    </div>
    <div class="carousel-inner">
      @foreach(get_sub_field('slides') as $key => $value)
        <div class="carousel-item {{ $key === 0 ? 'active' : '' }}">
          <img src="{{ $value['image']['url'] }}" class="d-block w-100" alt="{{ $value['image']['alt'] }}">
        </div>
      @endforeach
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carousel{{ $layout_key }}" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carousel{{ $layout_key }}" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</section>
