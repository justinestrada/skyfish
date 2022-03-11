export const FAQ = {
  onLoad: function() {
    this.categoryClick()
    this.faqOnSearch()
  },
  categoryClick: function() {
    const $faq_categories = $('#faq_categories')
    if (!$faq_categories.length) {
      return
    }
    const $cards = $('.card', $faq_categories)
    $cards.on('click', function () {
      $cards.removeClass('active')
      $('#qaAccordion').fadeIn()
      $(this).addClass('active')
      const category = $(this).attr('data-category')
      let founded = 0;
      $('#qaAccordion .accordion-item').map((i, e) => {
        if ($(e).attr('data-category').toLowerCase() !== category.toLowerCase()) {
          $(e).slideUp()
        } else {
          founded = founded+1
          $(e).slideDown()
        }
      })
      $('#questions_available').html(`${founded} Question(s)`)
    });
  },
  faqOnSearch: function() {
    const $faq_searchbar = $('#faq_searchbar')
    if (!$faq_searchbar.length) {
      return
    }
    $faq_searchbar.on('keyup', function(){
      const search = $(this).val();
      if (!search) {
        $('#qaAccordion').slideUp()
        $('#faq_categories').slideDown()
        return
      }
      $('#faq_categories').slideUp()
      $('#qaAccordion').slideDown()
      let founded = 0
      $('#qaAccordion .accordion-item').map((i, e) => {
        if ($(e).attr('data-question').toLowerCase().includes(search.toLowerCase()) || $(e).attr('data-answer').toLowerCase().includes(search.toLowerCase()) || $(e).attr('data-category').toLowerCase().includes(search.toLowerCase()) ) {
          $(e).slideDown()
          founded++
        } else {
          $(e).slideUp()
        }
      })
      $('#questions_available').html(`${founded} Question(s)`)
    })
  },
}
