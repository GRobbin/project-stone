<header class="banner navbar navbar-expand-lg navbar-light bg-navbar">
  <div class="container">
      @if (get_theme_mod('sage_logo'))
        <div class="navbar-logo">
         <a class="brand" href="{{ home_url('/') }}">
        <img src='{{ get_theme_mod('sage_logo') }}' alt='{{ get_bloginfo('name', 'display') }}'>
        </a>
        </div>
      @endif
  <button class="navbar-toggler" data-toggle="collapse" data-target=".navbar-collapse">
  <i class="fa fa-bars"></i>
  </button>
  <nav class="navbar-collapse collapse">
    @if (has_nav_menu('primary_navigation'))
      {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav']) !!}
    @endif
  </nav>
      @if ( get_theme_mod( 'sage_social_facebook' ))
      <div class="social facebook"><a href '{{ get_theme_mod('sage_social_facebook') }}'> <i class="fa fa-facebook" aria-hidden="true"></i></a></div>
      @endif
      @if ( get_theme_mod( 'sage_social_instagram' ))
      <div class="social instagram"><a href '{{ get_theme_mod('sage_social_instagram') }}'> <i class="fa fa-instagram" aria-hidden="true"></i></a></div>
      @endif
    </nav>
  </div>
</header>


