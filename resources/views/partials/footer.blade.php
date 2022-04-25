
<footer class="bg-secondary">
  <div id="footer_terrain_pattern" style="background-image: url('{{ App\asset_path('images/terrain-pattern.jpg') }}');"></div>
  <div class="container-xxl py-5">
    <div class="row mb-5">
      <div class="col text-center">
        <a href="{{ home_url('/') }}">
          <img src="{{ App\asset_path('images/logo.svg') }}" alt="{{ get_bloginfo('name', 'display') }}" style="height: 40px;"/>
        </a>
      </div>
    </div>
    @if ($contact = get_field('contact', 'option'))
      <div class="row justify-content-center mb-4">
        <div class="col-lg-6">
          <ul id="footer_contact-links">
            @if ($contact['phone'])
              <li>
                <a href="tel:{{ $contact['phone']['url'] }}" title="Call">{{ $contact['phone']['title'] }}</a>
              </li>
            @endif
            @if ($contact['email'])
              <li>
                <a href="mailto:{{ $contact['email'] }}" title="Email">{{ $contact['email'] }}</a>
              </li>
            @endif
            @if ($contact['instagram'])
              <li class="d-none d-md-inline-flex">
                <a href="{{ $contact['instagram'] }}" title="Instagram">
                  <i class="fa fa-instagram" aria-hidden="true"></i>
                  <span class="sr-only">Instagram</span>
                </a>
              </li>
            @endif
            @if ($contact['linkedin'])
              <li class="d-none d-md-inline-flex">
                <a href="{{ $contact['linkedin'] }}" title="LinkedIn">
                  <i class="fa fa-linkedin" aria-hidden="true"></i>
                  <span class="sr-only">LinkedIn</span>
                </a>
              </li>
            @endif
            @if ($contact['twitter'])
              <li class="d-none d-md-inline-flex">
                <a href="{{ $contact['twitter'] }}" title="Twitter">
                  <i class="fa fa-twitter" aria-hidden="true"></i>
                  <span class="sr-only">Twitter</span>
                </a>
              </li>
            @endif
          </ul>
        </div>
      </div>
    @endif
    @if ($menus = get_field('footer_menus', 'option'))
      <div id="footer_menu-links" class="row justify-content-center mb-4 mb-lg-5">
        @foreach($menus as $menu)
          <div class="col-lg mb-3 mb-lg-0">
            <h5 class="footer_menu-heading">{!! $menu['heading'] !!}</h5>
            @foreach($menu['links'] as $link)
              <a href="{{ $link['link']['url'] }}" class="footer_link" {{ $link['link']['target'] !== '' ? 'target="' . $link['link']['target'] . '"' : '' }}>
                {!! $link['link']['title'] !!}
              </a>
            @endforeach
          </div>
        @endforeach
      </div>
    @endif
    <ul id="footer_social-links_mobile" class="d-md-none mb-4">
      @if ($contact['instagram'])
        <li>
          <a href="{{ $contact['instagram'] }}" title="Instagram">
            <i class="fa fa-instagram" aria-hidden="true"></i>
            <span class="sr-only">Instagram</span>
          </a>
        </li>
      @endif
      @if ($contact['linkedin'])
        <li>
          <a href="{{ $contact['linkedin'] }}" title="LinkedIn">
            <i class="fa fa-linkedin" aria-hidden="true"></i>
            <span class="sr-only">LinkedIn</span>
          </a>
        </li>
      @endif
      @if ($contact['twitter'])
        <li>
          <a href="{{ $contact['twitter'] }}" title="Twitter">
            <i class="fa fa-twitter" aria-hidden="true"></i>
            <span class="sr-only">Twitter</span>
          </a>
        </li>
      @endif
    </ul>  
    <div id="footer_made-in-america-wrap" class="d-none d-lg-block mb-4">
      @include('partials.footer.made-in-america')
    </div>
    <div id="footer_made-in-america-wrap_mobile" class="d-lg-none mb-4">
      @include('partials.footer.made-in-america_mobile')
    </div>
    <div class="text-center">
      <p class="text-gray">&copy; 2020-<?php echo date('Y'); ?> Skyfish Inc. All Rights Reserved. Review our <a href="https://skyfish.ai/wp-content/uploads/2020/12/Skyfish-Privacy-Policy.pdf" class="text-gray">privacy policy</a> & <a href="https://skyfish.ai/resources/#legal-patents" class="text-gray">other legal docs</a>.</p>
    </div>
  </div>
</footer>
