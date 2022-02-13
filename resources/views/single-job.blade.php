
@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    <div class="main_inner pb-lg-5" style="background-image: url('{{ App\asset_path('images/background/futuristic-topology-landscape-vector.jpg') }}');">
      <div class="main_inner-background-overlay"></div>
      @include('partials.content-job')
    </div>
  @endwhile
@endsection
  