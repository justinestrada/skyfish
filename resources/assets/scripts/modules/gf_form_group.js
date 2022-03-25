export const GF_Form_Group = {
  onLoad: function() {
    if (!$('.gfield').length) {
      return;
    }
    setTimeout(function() {
      GF_Form_Group.init();
    }, 500)
    this.onFocus();
    this.onBlur();
  },
  init: function() {
    $('.gfield input, .gfield textarea').each(function() {
      const $form_group = $(this).parent().parent();
      if ( $(this).val() !== '' || $(this).attr('type') === 'file') {
        $form_group.addClass('is-focused');
      }
    });
  },
  onFocus: function() {
    $('.gfield input, .gfield textarea').on('focus', function() {
      const $form_group = $(this).parent().parent();
      $form_group.addClass('is-focused');
    });
  },
  onBlur: function() {
    $('.gfield input, .gfield textarea').on('blur', function() {
      const $form_group = $(this).parent().parent();
      if ($(this).val() === '' && $(this).attr('type') !== 'file') {
        $form_group.removeClass('is-focused');
      }
    });
  },
};
