{{--
  Template Name: FAQ
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('modules.template-faq.hero')
    @include('modules.template-faq.categories')
    @include('modules.template-faq.qa')
  @endwhile
@endsection
