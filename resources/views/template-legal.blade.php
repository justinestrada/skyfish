{{--
  Template Name: Legal
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('modules.template-legal.hero')
    @include('partials.flex-layouts')
  @endwhile
@endsection