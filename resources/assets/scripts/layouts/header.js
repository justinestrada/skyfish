
export const Header = {
  onLoad: function() {
    this.onScroll()
    this.onBodyClick()
  },
  onBodyClick: function() {
    $(document.body).on('click', function(e) {
      if ($(e.target).closest('.navbar-collapse').length || jQuery(e.target).closest('.navbar-toggler').length) return // Not return false
      $('.navbar-collapse').removeClass('show')
      $('.navbar-toggler').addClass('collapsed')
    })
  },
  onScroll: function() {
    $(window).on('scroll', function() {
      if($(this).scrollTop() > 16) {
        $('header > nav').addClass('z-depth-1')
      } else {
        $('header > nav').removeClass('z-depth-1')
      }
    })
  },
}
