{{--
  Template Name: Contact
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('modules.template-contact.hero')
    @include('partials.flex-layouts')
  @endwhile
@endsection
