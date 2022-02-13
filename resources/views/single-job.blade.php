
@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    <style>
    .main_inner {
      position: relative;
      background-image: url('https://skyfishnew.justinestrada.com/wp-content/uploads/2022/02/futuristic-topology-landscape-vector.jpg');
      background-position: center;
      background-size: cover;
    }
    .main_inner::before {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      /* background-color: rgba(0, 0, 0, 0.825); */
      background-color: rgba(255, 255, 255, 0.95);
    }
    </style>
    <div class="main_inner pb-lg-5">
      @include('partials.content-job')
    </div>
  @endwhile
@endsection
  