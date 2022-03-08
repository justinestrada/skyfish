<style>
@media (min-width: 992px) {
  header > nav .main-nav-menu-items {
    column-gap: 1rem;
  }
}
</style>
<header>
  <nav class="navbar navbar-expand-lg fixed-top bg-secondary">
    <div class="container-xxl">
      <a class="navbar-brand" href="{{ home_url('/') }}">
        <img src="{{ App\asset_path('images/logo.svg') }}" alt="{{ get_bloginfo('name', 'display') }}"
        style="height: 40px;" />
        <span class="sr-only">{{ get_bloginfo('name', 'display') }}</span>
      </a>
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarNavDropdown">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        @if (has_nav_menu('primary_navigation'))
          {!! wp_nav_menu([
          'theme_location' => 'primary_navigation',
          'menu_class' => 'main-nav-menu-items',
          'container_class' => 'main-nav-menu-items_container justify-content-start',
          ]) !!}
        @endif
        <div class="d-none d-lg-block">
          <img src="{{ App\asset_path('images/american-made.png') }}" alt="American Made" style="height: 32px;" />
          {{-- <a href="#" class="btn btn-transparent text-white" style="display: flex;">
            <i class="fa fa-user mr-3" style="position: relative; top: 2px;" aria-hidden="true"></i>
            Account
          </a> --}}
        </div>
      </div>
    </div>
  </nav>
</header>
