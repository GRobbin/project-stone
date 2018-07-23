export default {
  init() {

  //Removes 'show' class in desktop mode, in case it was toggled and then resized

  $(window).resize(function () {
    var windowSize = '';
    windowSize += $(document).width();
    if (windowSize > 990) {
      $('.navbar-collapse').removeClass('show');
    }
  });

  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
