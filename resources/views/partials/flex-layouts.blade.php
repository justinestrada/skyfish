
@if ( have_rows('content') )
  @php
  $layout_key = 0;
  @endphp
  @while( have_rows('content') )
    @php
    the_row();
    $layout = get_row_layout();
    $layout = str_replace('_', '-', $layout);
    @endphp
    @include('flexible.' . $layout, ['layout_key' => $layout_key])
    @php
    $layout_key++;
    @endphp
  @endwhile
@endif