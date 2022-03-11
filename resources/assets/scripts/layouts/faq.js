export const FAQ = {
  onLoad: function() {
    this.categoryClick()
    this.faqOnSearch()
  },
  categoryClick: function() {
    let faq_categories = $('#faq_categories');
    if (!faq_categories.length) {
      return
    }
    let cards = $('.card', faq_categories)
    cards.on('click', function () {
      cards.removeClass('active')
      $('#qaAccordion').fadeIn()
      $(this).addClass('active')
      let category = $(this).attr('data-category')
      let founded = 0;
      $('#qaAccordion .accordion-item').map((i,e)=>{
        if ($(e).attr('data-category') == category) {
          $(e).slideUp()
        } else {
          founded++;
          $(e).slideDown()
        }
      });
      $('#questions_available').html(founded+ ' Question(s)');
    });
  },
  faqOnSearch: function() {
    let faq_searchbar = $('#faq_searchbar');
    if (!faq_searchbar.length) {
      return
    }
    faq_searchbar.on('keyup', function(){
      let search = $(this).val();
      if (!search) {
        $('#qaAccordion').slideUp()
        $('#faq_categories').slideDown()
        return
      }
      $('#faq_categories').slideUp()
      $('#qaAccordion').slideDown()
      let founded = 0;
      $('#qaAccordion .accordion-item').map((i,e)=>{
        if ($(e).attr('data-question').includes(search) || $(e).attr('data-answer').includes(search) || $(e).attr('data-category').includes(search) ) {
          $(e).slideDown()
          founded++;
        } else {
          $(e).slideUp()
        }
      });
      $('#questions_available').html(founded+ ' Question(s)');
    })
  },
}