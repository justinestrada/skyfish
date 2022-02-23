{{--
  Template Name: Technology
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')
    @include('modules.template-technology.content')
    @include('partials.flex-layouts')
  @endwhile
@endsection
