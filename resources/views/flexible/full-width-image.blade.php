<section id="flex-layout_{{ $layout_key }}" class="flex-layout flex-layout_multi-column-card-icon-heading-content">
  @if ($image = get_sub_field('image'))
    <img src="{{ $image }}" class="w-100"/>
  @endif
</section>