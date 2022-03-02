
@php
$theme = 'default';
$position = 'top';
@endphp
<div class="flex-layout_inner-divider"
  style="background-image: url('{{ App\asset_path('images/mountainous-bottom-pattern.png') }}'); {{ $position }}: 0; {{ $position === 'top' ? 'transform: rotate(180deg);' : '' }}">
  &nbsp;
</div>
