
@php ($page_header = get_field('page_header'))
<div class="page-header relative mb-5" style="z-index: 1;">
  <div class="container py-5 text-center text-black">
    <h1 class="mb-4">{!! App::title() !!}</h1>
    @if (isset($page_header['subheading']))
      <h2 class="mb-0">{!! $page_header['subheading'] !!}</h2>
    @endif
  </div>
</div>
