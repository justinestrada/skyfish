@extends('layouts.app')
@php
  $hero = get_field('404_background', 'option');
  $padding = get_field('404_padding', 'option');
@endphp

@section('content')
  <section id="hero_404"
      class="page-hero flex-layout flex-layout_hero bg-{{ $hero['color'] }} {{ $padding }}"
      {!! isset($hero['image']) && $hero['image'] ? 'style="background-image: url(' . $hero['image']['url'] . '); background-size: cover; background-position: center;"' : '' !!}>
      @if ($hero['overlay'])
          <div class="flex-layout_overlay"
              style="background-color: {{ $hero['overlay']['color'] }}; opacity: {{ $hero['overlay']['opacity'] }};">
          </div>
      @endif
      <div class="container-xxl">
          <div class="row">
              <div class="col text-{{ $hero['color'] }}">
                  <h1 class="mb-3">-404</h1>
                  <h2 class="mb-3">Houston, <br/>We have a problem.</h2>
                  <p id="hero_404_subheading" class="mb-3">It seems that you're stuck in tree. <br/> Let us help you get out and back in your owner arms.</p>
                  <a href="{{ get_site_url() }}" class="btn action-btn">Take me home</a>
              </div>
          </div>
      </div>
  </section>
@endsection
