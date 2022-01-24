@extends('layouts.app')

@section('content')
  <div id="content" class="py-5">
    @include('partials.page-header')
    @if (!have_posts())
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="alert alert-warning mb-0">
              {{ __('Sorry, but the page you were trying to view does not exist.', 'sage') }}
            </div>
          </div>
        </div>
      </div>
    @endif
  </div>
@endsection
