@extends('layouts.app')
@php
$background = get_field('404_background', 'option');
$padding = get_field('404_padding', 'option');
$text = get_field('404_text', 'option');
@endphp
@section('content')
  <section id="hero_404"
    class="page-hero flex-layout flex-layout_hero bg-{{ $background['color'] }} {{ $padding }}"
    {!! isset($background['image']) && $background['image'] ? 'style="background-image: url(' . $background['image']['url'] . '); background-size: cover; background-position: center;"' : '' !!}>
    @if ($background['overlay'])
      <div class="flex-layout_overlay"
        style="background-color: {{ $background['overlay']['color'] }}; opacity: {{ $background['overlay']['opacity'] }};">
      </div>
    @endif
    <div class="container-xxl">
      <div class="row">
        <div class="col text-{{ $text['alignment'] }} text-{{ $text['color'] }}">
          <h1 class="mb-3">404</h1>
          <h2 class="mb-3">Page Not Found</h2>
          <p id="hero_404_subheading" class="mb-3">This page you are looking for doesn’t exist, or has been moved.</p>
          <a href="{{ get_site_url() }}" class="btn btn-primary">Take Me Home</a>
        </div>
      </div>
    </div>
  </section>
@endsection
