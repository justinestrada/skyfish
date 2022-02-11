
export const Header = {
  onLoad: function() {
    this.onScroll();
    this.onBodyClick();
  },
  onBodyClick: function() {
    jQuery(document.body).on('click', function(ev){
      if(jQuery(ev.target).closest('.navbar-collapse').length || jQuery(ev.target).closest('.navbar-toggler').length) return; // Not return false
      jQuery('.navbar-collapse').removeClass('show');
      jQuery('.navbar-toggler').addClass('collapsed');
    });
  },

  onScroll: function() {
    $(window).on('scroll', function() {
      if($(this).scrollTop() > 16) {
        $('header#main-nav > nav').addClass('z-depth-1')
      } else {
        $('header#main-nav > nav').removeClass('z-depth-1')
      }
    })
  },
}
