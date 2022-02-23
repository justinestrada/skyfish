
export const Flex = {
  onLoad: function() {
    this.avatarCards()
  },
  avatarCards: function() {
    if (!$('.avatar-cards').length) {
      return
    }
    $('.avatar-cards .card-content').map((k, element) => {
      const length = element.innerHTML.length;
      const height = ($(element).height() + 24);
      if (length < 256) {
        $(element).closest('.btn-toggle-expand-bio').hide()
        return
      }
      $(element).addClass('truncate')
      const $btn_toggle_expand_bio = $(element).parent().find('.btn-toggle-expand-bio')
      $btn_toggle_expand_bio.on('click', function(){
        if ($(element).hasClass('active')) {
          $(element).animate({height: '100px'}).removeClass('active')
          $btn_toggle_expand_bio.removeClass('expanded')
        } else {
          $(element).animate({height: `${height}px`}).addClass('active')
          $btn_toggle_expand_bio.addClass('expanded')
        }
      })
    })
  },
}
