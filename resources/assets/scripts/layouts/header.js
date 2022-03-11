
export const Header = {
  onLoad: function() {
    this.onScroll()
    this.onBodyClick()
    this.subMenuWidth()
    this.makeMenuResponsive()
    $(window).on('resize', ()=>{
      this.subMenuWidth()
      this.makeMenuResponsive()
    })
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
  subMenuWidth: function() {
    const $menu_menu = $('#menu-main, #menu-menu-1')
    if (!$menu_menu.length) {
      return
    }
    $('> li', $menu_menu).map((i, e) => {
      let sub_menu = $('ul.sub-menu', e);
      if (!sub_menu.length) {
        return;
      }
      if($(window).width() > 991) {  
        sub_menu.css('width', Math.round($menu_menu.width()) + 'px')
        sub_menu.css('left', Math.round($menu_menu.position().left) + 'px')
      } else {
        sub_menu.removeAttr('style')
      }
    })
  },
  makeMenuResponsive: function() {
    const $menu_menu = $('#menu-main')
    if (!$menu_menu.length) {
      return
    }
    if ($(window).width() > 991) { 
      return;
    }
    $('> li', $menu_menu).map((i, e) => {
      let sub_menu = $('ul.sub-menu', e);
      if (!sub_menu.length) {
        return;
      }
      $(e).off('click')
      $(e).on('click', (itemClick) => {
        let itemCicked = $(itemClick.currentTarget); 
        itemClick.preventDefault()
        $('> li', $menu_menu).map((_, siblings) => {
          if($(siblings).hasClass('active_slide') && itemCicked.attr('id') != $(siblings).attr('id')) {
            $('ul.sub-menu', siblings).slideUp()
            $(siblings).removeClass('active_slide')
          }
        })
        sub_menu.slideToggle()
        itemCicked.toggleClass('active_slide')
      })
    })
  },
}
