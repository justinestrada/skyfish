
export const Solutions = {
  onLoad: function() {
    if (!$('#solutions').length) {
      return
    }
    $('.pillar_text_description').each(function() {
      const original_height = $(this).height()
      $(this).attr('original-height', original_height)
      $(this).addClass('pillar_text_description_initialized')
    })
    this.onMouseOverPillar()
  },
  onMouseOverPillar: function() {
    $('.pillars').each(function() {
      const $pillars = $(this)
      $pillars.find('.pillar').mouseover(function() {
        const $pillar = $(this)
        const key = $pillar.attr('key')
        const original_height = $pillar.find('.pillar_text_description').attr('original-height')
        $pillar.find('.pillar_text_description').css('height', original_height + 'px')
        $pillars.find(`.pillars_bg[key="${key}"]`).fadeIn(500)
      })
      $pillars.find('.pillar').mouseleave(function() {
        const $pillar = $(this)
        const key = $pillar.attr('key')
        $pillar.find('.pillar_text_description').css('height', '0')
        $pillars.find(`.pillars_bg[key="${key}"]`).fadeOut()
      })
    })
  },
}
