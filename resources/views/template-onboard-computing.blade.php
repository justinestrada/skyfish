{{--
  Template Name: Onboard Computing
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('modules.template-team.hero')
    @include('partials.flex-layouts')
  @endwhile
@endsection