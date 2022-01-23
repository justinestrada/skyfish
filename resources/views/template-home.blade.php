{{--
  Template Name: Home
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('modules.template-home.hero')
    @if ( have_rows('content') )
      @php
      $layout_key = 0;
      @endphp
      @while ( have_rows('content') ) @php the_row() @endphp
        @php
        $layout = str_replace('_', '-', get_row_layout());
        @endphp
        @include('flexible.' . $layout, ['layout_key' => $layout_key])
        @php
        $layout_key++;
        @endphp
      @endwhile
    @endif    
  @endwhile
@endsection
