{{--
  Template Name: Industries
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('modules.template-industries.hero')
    @include('partials.flex-layouts')
    @include('partials.contact')
  @endwhile
@endsection
