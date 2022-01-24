
@if ( have_rows('layouts') )
  @php
  $layout_key = 0;
  @endphp
  @while ( have_rows('layouts') ) @php the_row() @endphp
    @php
    $layout = str_replace('_', '-', get_row_layout());
    @endphp
    @include('flexible.' . $layout, ['layout_key' => $layout_key])
    @php
    $layout_key++;
    @endphp
  @endwhile
@endif
