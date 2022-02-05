
@if ( have_rows('content') )
  @while( have_rows('content') )
    @php
    the_row();
    $layout = get_row_layout();
    $layout = str_replace('_', '-', $layout);
    @endphp
    @include('flexible.' . $layout)
  @endwhile
@endif