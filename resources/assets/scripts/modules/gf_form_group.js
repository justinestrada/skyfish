export const GF_Form_Group = {
  onLoad: function() {
    if (!$('.skyfish-gf-form-group').length) {
      return;
    }
    setTimeout(function() {
      GF_Form_Group.init();
    }, 500)
    this.onFocus();
    this.onBlur();
  },
  init: function() {
    $('.skyfish-gf-form-group input, .skyfish-gf-form-group textarea').each(function() {
      const $form_group = $(this).parent().parent();
      if ( $(this).val() !== '' ) {
        $form_group.addClass('is-focused');
      }
    });
  },
  onFocus: function() {
    $('.skyfish-gf-form-group input, .skyfish-gf-form-group textarea').on('focus', function() {
      const $form_group = $(this).parent().parent();
      $form_group.addClass('is-focused');
    });
  },
  onBlur: function() {
    $('.skyfish-gf-form-group input, .skyfish-gf-form-group textarea').on('blur', function() {
      const $form_group = $(this).parent().parent();
      if ($(this).val() === '') {
        $form_group.removeClass('is-focused');
      }
    });
  },
};
