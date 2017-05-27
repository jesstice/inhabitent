/**
 * nav-menu.js
 *
 * Adds search bar toggle.
 *
 */

(function ($) {
  $(function () {

    $('.icon-search').click( function(event){
      event.stopPropagation();
      event.preventDefault();
      $('.search-field').toggle('fast');
    });

    $(document).click( function(event) {
      if ( !$('.search-field').is(event.target) ) {
        $('.search-field').hide('fast');
      }
    });

  });
})(jQuery);