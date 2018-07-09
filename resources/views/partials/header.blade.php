<header class="banner">
  <div class="container">
      @if (get_theme_mod('sage_logo'))
        <div class="navbar-logo">
         <a class="brand" href="{{ home_url('/') }}">
        <img src='{{ get_theme_mod('sage_logo') }}' alt='{{ get_bloginfo('name', 'display') }}'>
        </a>
        </div>
      @endif
    <nav class="collapse navbar-collapse mobile" role="navigation">
      @if (has_nav_menu('mobile_navigation'))
        {!! wp_nav_menu(['theme_location' => 'mobile_navigation', 'menu_class' => 'nav navbar-nav mob']) !!}
      @endif
    </nav>
    <nav class="nav-primary">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
      @endif
    </nav>
  </div>
</header>


