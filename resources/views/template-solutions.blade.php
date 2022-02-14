{{--
  Template Name: Solutions
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')
    @include('modules.template-solutions.content')
    @include('partials.flex-layouts')
  @endwhile
@endsection
