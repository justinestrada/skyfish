{{--
  Template Name: Default Page Header
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')
    @include('partials.page-content')
    @include('partials.flex-layouts')
  @endwhile
@endsection
  