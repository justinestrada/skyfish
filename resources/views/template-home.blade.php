{{--
  Template Name: Home
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('modules.template-home.hero')
    @include('partials.flex-layouts')
  @endwhile
@endsection
