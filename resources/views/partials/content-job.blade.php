
<div class="page-header relative mb-5" style="z-index: 1;">
  <div class="container py-5 text-center text-black">
    <h1 class="d-none">{!! App::title() !!}</h1>
    <div class="h1 fs-2.5 mb-4">We're Hiring!</div>
    <h2 class="mb-0">Skyfish is building <br class="d-none d-lg-block"/>the next generation of drone technology.</h2>
  </div>
</div>
<section class="container bg-black relative text-white pt-5 px-lg-5 mb-lg-10">
  <div class="row mb-5">
    <div class="col-lg-8">
      <div class="h3">{!! App::title() !!}</div>
      @if ($metadata = get_field('metadata'))
        <div class="row">
          @foreach ($metadata as $meta)
            <div class="col">
              <div class="meta_label text-gray">{{ $meta['label'] }}</div>
              <div class="meta_value">{{ $meta['value'] }}</div>
            </div>
          @endforeach
        </div>
      @endif
    </div>
    <div class="col-lg-4 d-flex justify-content-lg-end">
      <div>Posted on {!! get_the_date() !!}</div>
    </div>
  </div>
  <div class="fs-lg-1.25 mb-5">
    {!! get_the_content() !!}
  </div>
  <section id="job-apply-form" class="pb-5">
    <h2>Ready To Start?</h2>
    <form action="">
      <button type="submit" disabled>Apply</button>
    </form>
  </section>
</section>