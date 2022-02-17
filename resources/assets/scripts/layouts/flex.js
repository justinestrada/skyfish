
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
      const height = ($(element).height() + 50);
      if (length < 256) {
        $(element).closest('.load-more-content').hide()
        return
      }
      $(element).addClass('truncate')
      const $btn_toggle_expand_bio = $(element).parent().find('.btn-toggle-expand-bio')
      $btn_toggle_expand_bio.on('click', function(){
        if ($(element).hasClass('active')) {
          $(element).animate({height: '100px'}).removeClass('active')
          load_more_content.addClass('fa-angle-double-down')
          load_more_content.removeClass('fa-angle-double-up')
        } else {
          $(element).animate({height: height+'px'}).addClass('active')
          load_more_content.removeClass('fa-angle-double-down')
          load_more_content.addClass('fa-angle-double-up')
        }
      })
    })
  },
}
