{{--
  Template Name: Careers
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')
    <section class="container">
      {!! get_the_content() !!}
    </section>
    @include('modules.template-careers.jobs')
  @endwhile
@endsection
