
@php ($page_header = get_field('page_header'))
<div class="page-header mb-4">
  <div class="container py-5 text-center">
    <h1>{!! App::title() !!}</h1>
    @if (isset($page_header['subheading']))
      <h2>{!! $page_header['subheading'] !!}</h2>
    @endif
  </div>
</div>
