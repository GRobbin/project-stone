<footer class="content-info bg-dark">
  <div class="container">
    <div class="row">
      <div class="col-md-3 text-md-left text-center">
      @if (get_theme_mod('sage_logo_footer'))
          <div class="footer-logo">
          <img src='{{ get_theme_mod('sage_logo_footer') }}' alt='{{ get_bloginfo('name', 'display') }}' style="max-width: 160px; width: 100%; ">
          </div>
          @endif
      </div>
      <div class="col-md-3 text-md-left text-center text-light">
      @php dynamic_sidebar('sidebar-footer') @endphp
      </div>
      <div class="col-md-3 text-md-left text-center text-light">
      @php dynamic_sidebar('sidebar-footer-2') @endphp
      </div>
      <div class="col-md-3 text-md-left text-center text-light">
      @php dynamic_sidebar('sidebar-footer-3') @endphp
      </div>
    </div>
  </div>
</footer>
