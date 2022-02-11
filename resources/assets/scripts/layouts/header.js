
export const Header = {
  onLoad: function() {
    $(window).on('scroll', function() {
      if($(this).scrollTop() > 16) {
        $('header#main-nav > nav').addClass('z-depth-1')
      } else {
        $('header#main-nav > nav').removeClass('z-depth-1')
      }
    })
  },
}
