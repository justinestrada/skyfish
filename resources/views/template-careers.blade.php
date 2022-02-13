{{--
  Template Name: Careers
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    <div class="main_inner pb-lg-5" style="background-image: url('{{ App\asset_path('images/background/futuristic-topology-landscape-vector.jpg') }}');">
      <div class="main_inner-background-overlay"></div>
      @include('partials.page-header')
      <section class="container bg-black relative text-white pt-5 px-lg-5 mb-lg-10">
        <div class="row justify-content-center mb-5">
          <div class="col fs-lg-1.25">
            {!! get_the_content() !!}
          </div>
        </div>
        @include('modules.template-careers.jobs')
      </section>
    </div>
  @endwhile
@endsection
