
<header>
  <nav class="navbar navbar-expand-lg fixed-top">
    <div class="container">
      <a class="navbar-brand" href="{{ home_url('/') }}">
        <img src="{{ App\asset_path('images/logo.svg') }}" alt="{{ get_bloginfo('name', 'display') }}" style="height: 40px;"/>
        <span class="sr-only">{{ get_bloginfo('name', 'display') }}</span>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <div id="main-nav-icon" className="hamburger-close-animated-icon">
          <span></span>
          <span></span>
          <span></span>
        </div>        
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        @if (has_nav_menu('primary_navigation'))
          {!! wp_nav_menu([
            'theme_location' => 'primary_navigation',
            'menu_class' => 'main-nav-menu-items',
            'container_class' => 'main-nav-menu-items_container'
          ]) !!}
        @endif
      </div>
      <div>
        <img src="{{ App\asset_path('images/american-made.png') }}" alt="American Made" style="height: 32px;"/>
      </div>
    </div>
  </nav>
</header>
